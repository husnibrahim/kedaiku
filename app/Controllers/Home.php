<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

	$my_model = new \App\Models\GambarModel();

	$result = [
		'list_of_listing' => $my_model->orderBy('id', 'desc')->paginate(3),
		'pager' => $my_model->pager,
	];
	//return view ('admin/l', ['list_of_listing' => $result]);
	return view ('/admin/listing', $result);
	}

}
