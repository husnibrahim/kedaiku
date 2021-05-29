<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$all_pekan = [
			[
			   'nama' => 'Seremban',
			   'gambar' => 'https://images.unsplash.com/photo-1570036340722-b301922be4b5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8bmVnZXJpJTIwc2VtYmlsYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',     
			   'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, saepe nisi hic modi nulla fugit impedit ut unde debitis atque labore culpa neque vel fuga voluptates suscipit ullam, incidunt non?'
			], [
			   'nama' => 'Gemas',
			   'gambar' => 'https://images.unsplash.com/photo-1612696964842-af32a6788bd1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MXx8bmVnZXJpJTIwc2VtYmlsYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',     
			   'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, saepe nisi hic modi nulla fugit impedit ut unde debitis atque labore culpa neque vel fuga voluptates suscipit ullam, incidunt non?'
		   ], [
			   'nama' => 'Kual Pilah',
			   'gambar' => 'https://images.unsplash.com/photo-1615870795127-1c13f1d92997?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTF8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',     
			   'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, saepe nisi hic modi nulla fugit impedit ut unde debitis atque labore culpa neque vel fuga voluptates suscipit ullam, incidunt non?'
		   ], [
			   'nama' => 'Juaseh',
			   'gambar' => 'https://images.unsplash.com/photo-1578928154540-a5bd2707133e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',     
			   'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, saepe nisi hic modi nulla fugit impedit ut unde debitis atque labore culpa neque vel fuga voluptates suscipit ullam, incidunt non?'
		   ], [
			   'nama' => 'Rembau',
			   'gambar' => 'https://images.unsplash.com/photo-1597805539244-3f0848b99ad7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60',     
			   'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, saepe nisi hic modi nulla fugit impedit ut unde debitis atque labore culpa neque vel fuga voluptates suscipit ullam, incidunt non?'
		   ], [
			   'nama' => 'Port Dickson',
			   'gambar' => 'https://images.unsplash.com/photo-1571828322495-345f43838c61?ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjh8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=60',     
			   'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Natus, saepe nisi hic modi nulla fugit impedit ut unde debitis atque labore culpa neque vel fuga voluptates suscipit ullam, incidunt non?'
		   ]
	   ];

	   return view('homepage', [ 'all_pekan' => $all_pekan ]);

	}
}
