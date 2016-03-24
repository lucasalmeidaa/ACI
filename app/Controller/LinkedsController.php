<?php  

	/**
	* Links
	*/
	class LinkedsController extends AppController {
		
		
	    public $name = 'Linkeds';



		private function pegandoCurso() {
	        $courses = $this->Linked->Course->find('list', array('fields' => array('id', 'name')));
	        
	        $this->set(compact('courses'));
	    }

		private function pegandoComputer() {
	        $computers = $this->Linked->Computer->find('list', array('fields' => array('id', 'name')));
	        
	        $this->set(compact('computers'));
	    }
		
		public function index(){
			$this->paginate = array('limit' => 6);
	        $linkeds = $this->paginate('Linked');
	        $this->set(compact('linkeds'));
		}



	    public function add() {
	        if ($this->data) {
	            if ($this->Linked->save($this->data))
	                $this->Session->setFlash("Link adicionado com sucesso!");
	            $this->data = array();
	        }
        self::pegandoCurso();
        self::pegandoComputer();

	    }

	    public function delete($id = null) {
	        if ($id) {
	            if ($this->Linked->delete($id))
	                $this->Session->setFlash("Vinculo excluido com sicesso!");
	            $this->redirect(array('controller' => 'Linkeds', 'action' => 'index'));
	        }
	    }

	}

?>