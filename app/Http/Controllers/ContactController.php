<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller {
    public function submit(Request $req) {

        $newRequest = new Contact([
            'name' => $req->name,
            'email' => $req->email,
            'message' => $req->message,
        ]);

        $newRequest->save();

        return redirect()->to('/#contact')->with('success', 'Данные успешно отправлены!');

    }
}
