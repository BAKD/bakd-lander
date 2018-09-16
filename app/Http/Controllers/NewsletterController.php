<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Newsletter Subscribe POST endpoint
     *
     * @param  Request  $request
     * @return Response

     */
    public function subscribe(Request $request)
    {
        // Request Data
        $data = [
            'email' => $request->input('email_address', ''),
            'name' => $request->input('full_name', '')
        ];

        // $this->validate($request, [
        //     'email' => 'required|unique:subscribers',
        // ]);

        // Response/output internal data
        $_data = [];
                
        if (!isset($data['email']) || empty($data['email'])) {
            $status = 'error';
            $message = 'Unable to subscribe to future <strong>BAKD</strong> Platform Development Updates without a valid email address!';
        }

        // Save the subscriber to the DB
        try {
            $subscriber = new Subscriber;
            if ($db = $subscriber->addSubscriber($data)) {
                $status = 'success';
                $message = 'Successfully subscribed to future <strong>BAKD</strong> Platform Development Updates!';
            } else {
                $status = 'error';
                $message = 'Unable to save to database. Please contact an administrator if the problem persists.';
                $_data = $db;
            }
        } catch (Illuminate\Validation\ValidationException $e) {
            $status = 'error';
            $message = 'Please check the form and try again!';
            $_data = $e;
        } catch (\Exception $e) {
            $errorCode = (int)$e->getCode();

            if ($errorCode === 23000)  { // duplicate db entry
                $message = 'Email is already subscribed to <strong>BAKD</strong> Platform Updates!';
            } else {
                $message = 'Unable to save to database. Error Code ' . $e->getCode();
            }
            
            $status = 'error';
            $_data = $e;
        }
     
        return response()->json([
            'status'  => $status, 
            'message' => $message,
            'db'      => $_data,
        ]);
    }
}
