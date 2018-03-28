<?php
	class EmployesController extends AppController {
		public function index(){
			$scaffold;
			//debug($this->Employe->find('all'));
			die("page index d'employe");
		}

		public function add($nom){
			$this->Employe->save(array(
				'nom' => $nom,
				'prenom' => 'monprenom',
				'date_naissance' => '2002-12-25'
			));
			die("Fin de l'ajout Employe");
		}

		public function modify($id){
			$this->Employe->save(array(
				'id' => $id,
				'nom' => 'fake',
				'prenom' => 'monprenom',
				'date_naissance' => '1900-12-25'
			));			
			die("Fin de la modification Employe");
		}

		public function supprime_id($id){
			$this->Employe->delete($id);		
			die("Fin de la suppression Employe");
		}

		public function supprime_nom($nom){
			$this->Employe->deleteAll(array('nom LIKE'=>$nom));
			die("Fin de la suppression Employe");
		}


	}
?>