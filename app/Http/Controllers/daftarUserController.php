<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class daftarUser extends Controller
{
	public function index(){
		return make:view('content.daftarUser');
	}
    //
}
