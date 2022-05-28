<?php

namespace App\Http\View\Composser;

use App\Models\Page;
use App\Models\Setting;
use App\Models\Ticket;
use App\Models\Txtdese;
use Illuminate\Contracts\View\View;

class Menuindex{
    public function compose(View $view){


        $listpages=Page::idDescending()->get();
        $setting=Setting::find(1);
        $textdeses=Txtdese::orderBy('id','DESC')->get();


        $count_ticket_unread_user=0;
        if(auth()->guard('user')->user()){

            $count_ticket_unread_user = Ticket::where([
                ['fromshow' , '=' ,'unread'],
                ['user_id' , '=' ,auth()->guard('user')->user()->id], ])->count();
        }

        $count_ticket_unread_admin = Ticket::where([
            ['toshow' , '=' ,'unread'], ])->count();




// $view->with('listpages', $listpages);
// $view->with('setting', $setting);

$view->with(['listpages' => $listpages , 'setting' => $setting, 'textdeses' => $textdeses
, 'count_ticket_unread_user' => $count_ticket_unread_user , 'count_ticket_unread_admin' => $count_ticket_unread_admin ]);


    }
}
