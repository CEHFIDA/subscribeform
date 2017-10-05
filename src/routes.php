<?php

Route::post(config('subscribeform.path'), 'selfreliance\subscribeform\SubscribeFormController@send')->name('SubscribeForm');