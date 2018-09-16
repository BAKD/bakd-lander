<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function addSubscriber(array $data = array())
    {
        // var_dump($data); die;

        $this->name = isset($data['name']) ? $data['name'] : 'Unknown'; // Optional field
        $this->email = $data['email'];

        if ($this->save()) {
            return true;
        }

        return false;
    }
}
