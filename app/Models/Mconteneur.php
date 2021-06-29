<?php

namespace App\Models;

use CodeIgniter\Model;

class Mconteneur extends Model
{	
	protected $table = 'bateau';
	protected $primaryKey = 'idClasse';	
	protected $returnType= 'array';
	
	public function getAll(){
		$requete = $this->select('idClasse, nomClasse, typeCoque, dateDepart');
		// return $requete->findAll();
		return $requete->paginate(10);
	}
	
	public function getDetail($prmId){
	$requete = $this->select('*')
	->where(['Id' => $prmId]);
	return $requete->findAll();
	}
}

