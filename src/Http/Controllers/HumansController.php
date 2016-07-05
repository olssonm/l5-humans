<?php

namespace Olssonm\Humans\Http\Controllers;

use Illuminate\Routing\Controller;

class HumansController extends Controller
{
    public function humans()
    {
        return response()
            ->view('humans::humans')
            ->header('Content-Type', 'text/plain');
    }
}
