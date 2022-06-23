<?php

namespace App\Http\View\Composser;

use App\Models\Page;
use App\Models\Setting; 
use App\Models\Txtdese;
use Illuminate\Contracts\View\View;

class Menuindex{
    public function compose(View $view){


        $listpages=Page::idDescending()->get();
        $setting=Setting::find(1);
        $textdeses=Txtdese::orderBy('id','DESC')->get();

$view->with(['listpages' => $listpages , 'setting' => $setting, 'textdeses' => $textdeses ]);


    }
}
