<?php

namespace Selfreliance\subscribeform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Selfreliance\Subscribeform\Models\Contact;

class SubscribeFormController extends Controller
{
    public function send(Request $request, Subscribe $model)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $check_mail = \DB::table('subscribes')->where('email', $request->input('email'))->first();
        if(!$check_mail)
        {
	        $model->email = $request->input('email');
	        $model->save();
            echo '<div class="alert alert-success">Вы успешно подписались на рассылку!</div>';
        }
        else echo '<div class="alert alert-danger">Данный email уже подписан на рассылку!</div>';
    }
}