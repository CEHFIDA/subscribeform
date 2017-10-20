<?php

namespace Selfreliance\subscribeform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Selfreliance\Subscribeform\Models\Subscribe;

class SubscribeFormController extends Controller
{
    public function send(Request $request, Subscribe $model)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        $check_mail = Subscribe::where('email', $request->input('email'));
        if(!$check_mail)
        {
        	$model->email = $request->input('email');
        	if($model->save())
            {
                $data = [
                    'success' => true,
                    'message' => "Email успешно подписан на рассылку"
                ];
            }
        }
        else
        {
            $data = [
                'success' => false,
                'message' => "Данный email уже был ранее подписан на рассылку"
            ];
        }

        return response()->json(
            $data
        );
    }
}
