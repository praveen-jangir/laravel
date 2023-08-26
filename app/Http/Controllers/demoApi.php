<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\Request;
use Mail;
class demoApi extends Controller
{
    function getData(){
        $data = ['name'=>'ghgghghghghg','data'=>"helllo"]
        Mail::send('mail',$data,function($messages){
            $messages->to("a.praveenjangir@gmail.com");
            $messages->subject('"hi praveen');
        });
        return [
            "{
                name=>'praveen',age=>22
            }"
        ];
    }
}
