<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class About extends BaseController
{
	public function index()
	{
		$data['title'] = "About System";
		return view('Content/About', $data); 
	}
}
