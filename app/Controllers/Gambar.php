<?php

namespace App\Controllers;

class Gambar extends BaseController
{

	function __construct() {
		$this->session = \Config\Services::session();
	}

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
    
    function edit($id) {
		$my_model = new \App\Models\GambarModel();
	 	$result = $my_model->find($id);

		helper('form');
		return view ('/admin/edit', ['data' => $result]);
	}

	function edit_data($id)
	{
		$my_model = new \App\Models\GambarModel();

		$data = [
			'name' => $this->request->getPost('name'),
			'description' => $this->request->getPost('description')
		];

		$photo_path	 = $this->request->getFile('photo_path');

		// Grab the file by name given in HTML form
		if (strlen($photo_path)>0)
		{
			// Generate a new secure name
			$new_photo_path = $photo_path->getRandomName();

			// Move the file to it's new home
			$photo_path->move('img/', $new_photo_path);

			$data['photo_path'] = $new_photo_path;
		}

		$my_model->update($id, $data);

		$_SESSION['success'] = true;
		$this->session->markAsFlashdata('success');
		return redirect()->to('/gambar/edit/' . $id);
	}
	function add() {
		helper('form');
		return view ('/admin/add');
	}

	function delete($id){

		$my_model = new \App\Models\GambarModel();
		$my_model->delete($id);

		$_SESSION['delete_success'] = true;
		$this->session->markAsFlashdata('delete_success');

		return redirect()->back();
	}
	function save_new_data()
	{
		$my_model = new \App\Models\GambarModel();

		$data = [
			'name' => $this->request->getPost('name'),
			'description' => $this->request->getPost('description')
		];

		$photo_path	 = $this->request->getFile('photo_path');

		// Grab the file by name given in HTML form
		if ($photo_path)
		{
			// Generate a new secure name
			$new_photo_path = $photo_path->getRandomName();

			// Move the file to it's new home
			$photo_path->move('img/', $new_photo_path);

			$data['photo_path'] = $new_photo_path;
		}

		// dd($data);
		$my_model->insert($data);

		$_SESSION['success'] = true;
		$this->session->markAsFlashdata('success');
		return redirect()->to('/gambar');
	}

}
