<?php

namespace Olssonm\Humans\Http\Controllers;

use Illuminate\Routing\Controller;

class HumansController extends Controller
{
    /**
     * Return a text/plain-response with humans-view
     * @return response
     */
    public function humans()
    {
        return response()
            ->view('humans::humans')
            ->header('Content-Type', 'text/plain');
    }
}
