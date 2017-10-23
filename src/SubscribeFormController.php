<?php

namespace Selfreliance\subscribeform;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Selfreliance\Subscribeform\Models\Subscribe;

class SubscribeFormController extends Controller
{
    /**
     * Subscribed
     * @param string $email
     * @return bool
    */
    public static function subscribed($email)
    {
        $check_mail = Subscribe::where('email', $request->input('email'))->first();
        return ($check_mail) ? true : false;
    }

    /**
     * Subscribe
     * @param request $request
     * @param \Subscribe $model
     * @return response json
    */
    public function subscribe(Request $request, Subscribe $model)
    {
        $this->validate($request, [
            'email' => 'required|email'
        ]);

        if(!self::subscribed($request->input('email')))
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
