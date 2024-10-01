<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\SubscribeRequest;
use App\Models\Subscribers;
use Exception;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SubscribeController
{
    public function subscribeSubmit(SubscribeRequest $request)
    {
        try {
            $subscriber = new Subscribers();
            $subscriber->email = $request->email;
            $subscriber->save();

            Alert::success('Abone Olundu', 'Yeni içerikler için takipte kalın');
            return back();
        } catch (Exception $e) {
            Alert::error('Hata: '.$e);
            return back();
        }
    }
}
