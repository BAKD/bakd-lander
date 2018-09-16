<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Main Landing Page
     *
     * @return string
     */
    public function index()
    {
        // Onepager Doc URLs
        $onepagerTextURL = 'https://bakd.io/docs/onepager-eng.pdf';
        $onepagerGraphicURL = 'https://bakd.io/docs/onepager-eng.pdf';
        
        // Roadmap Doc URLs
        $roadmapTextURL = 'https://bakd.io/docs/roadmap-eng.pdf';
        $roadmapGraphicURL = 'https://bakd.io/docs/roadmap-eng.png';
        
        // Features Doc URLs
        $featuresTextURL = 'https://bakd.io/docs/features-eng.pdf';
        $featuresGraphicURL = 'https://bakd.io/docs/features-eng.pdf';

        return view('home', [
            'launch' => \Carbon\Carbon::now(),
            'features' => [
                'text' => $featuresTextURL,
                'graphic' => $featuresGraphicURL
            ],
            'onepager' => [
                'text' => $onepagerTextURL,
                'graphic' => $onepagerGraphicURL
            ],
            'roadmap' => [
                'text' => $roadmapTextURL,
                'graphic' => $roadmapGraphicURL
            ],
        ]);
    }
}
