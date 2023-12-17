<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\UsersMail;
use App\Jobs\SendEamilJob;
use Illuminate\Http\Request;
use App\Events\testWebsocket;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
   public function sendMail($number){
    try {
        $data = User::take($number)->latest()->get();
        foreach($data as $key=>$mailData){
            SendEamilJob::dispatch($mailData->email);
            event(new testWebsocket($mailData->name));
        }
        $res['msg']='Mail sent to queue';
        return response()->json($res,200);

    } catch (Throwable $e) {
        $res['msg']=$e;
        return response()->json($res,500);

    }




   }
}
