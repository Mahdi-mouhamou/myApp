<?php

namespace App\widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
// use \TCG\Voyager\Widgets\BaseDimmer;

class PinosDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Models\Pino::count();
        $string = trans_choice('voyager::dimmer.post', $count);

        return view('carte');
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {

        
        return Auth::user()->role_id==1||Auth::user()->role_id==4;
    }
}
