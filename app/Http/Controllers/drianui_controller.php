<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class drianui_controller extends Controller
{
    public function index()
    {
    	$table=\App\Models\drianui_model::all();
    	return view('/project', [
			"title"=>"DrianUI",
    		"description"=>"Selamat datang di website abal-abal.",
    		"table" => $table
    	]);
    }
}
