<?php

namespace App\Http\Controllers;
use App\Mail\email;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function showIndex()
    {
        return view('index');
    }
}