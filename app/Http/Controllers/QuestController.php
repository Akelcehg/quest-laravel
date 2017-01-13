<?php

namespace App\Http\Controllers;

class QuestController extends Controller
{
    public function index($name)
    {
        //$name
        return view('quest.index');
    }
}
