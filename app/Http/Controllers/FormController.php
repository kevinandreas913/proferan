<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function pemasukkan(){
        return view('/form/pemasukkan');
    }
}