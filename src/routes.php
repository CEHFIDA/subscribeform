<?php

Route::post(config('subscribeform.path'), 'selfreliance\subscribeform\SubscribeFormController@subscribe')->name('SubscribeForm');