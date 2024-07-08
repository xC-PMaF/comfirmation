<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
      {     return view('thanks');
    }
    }
    public function store(ContactRequest $request)
{
     // ここに処理を記述していきます
    $contact = $request->only(['name', 'email', 'tel', 'content']);
}
}