<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LetterMail;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;



class SubscribeController extends Controller
{
    public function newsletter(Request $request) {

        Log::debug("시작", [$request]);

        $validation = $request->validate([
            'email' => 'required|email|unique:subscribes',
            'name' => 'required|min:1',
            'person' => 'required|accepted',
            'promotion' => 'required|accepted',
        ]);

        Log::debug("검증", [$validation]);


        Mail::to($validation['email'])->send(new NewNeek());

        Log::debug("발송", [$validation]);

        Subscribe::create($validation);

        Log::debug("생성", [$validation]);

        return redirect('/');
    }
}
