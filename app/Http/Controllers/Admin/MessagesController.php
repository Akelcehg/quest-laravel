<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        return view('admin.messages.index', ['messages' => Message::orderBy('id','desc')->paginate(10)]);
    }
}
