<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\template;

class TemplatesController extends Controller
{
     public function index() {

     	$templates = Template::latest()->get();

		return view ('templates.index', compact('templates'));
    }


    public function show($id) {

        $template = Template::find($id);
		return view ('templates.show',compact('template'));
    }


    public function create() {
		 return view ('templates.create');
     }


     public function store() {

		// return view ('templates.store');
		//dd(request()->all());

     	$this->validate(request(), [
     		'title' => 'required',
     		'body'  => 'required'
     	]);

		Template::create(request()->all());

		return redirect('/');
     }

     

}
