<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\training;


class TrainingController extends Controller
{
    public function index() {

		return view ('training.index');
    }


 	public function show() {

        //$training = Training::find($id);
		return view ('training.show');
    }

}
