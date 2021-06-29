<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class Caccueil extends Controller
{
	public function index()
	{
$data['title'] = "La transat Jacques Vabre ";
$data['heading'] = "la transat Jacques Vabre";
$page['contenu'] = view('v_acceuil', $data);
		return view('Commun/v_template', $page);
		
	}
}
