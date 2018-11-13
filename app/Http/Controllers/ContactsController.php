<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;
use App\Mail\MessageContactCreated;
use Illuminate\Support\Facades\Mail;
use App\Models\Message;


class ContactsController extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }

    public function store(ContactsRequest $request){
    	$message = Message::create($request->only('name','email','message'));
    	
    	Mail::to(config('laracarte.admin_support_email'))
            ->send(new MessageContactCreated($message));
    	flashy()->success('Nous vous repondons dans le plus bref delai');
    	return redirect()->route('home');
    }
}
