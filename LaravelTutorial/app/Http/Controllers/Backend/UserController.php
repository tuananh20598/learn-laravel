<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return 'List User';
    }

    public function create(){
        return view('backend.user.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
