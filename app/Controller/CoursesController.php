<?php 

	/**
	* Cursos
	*/
	class CoursesController extends AppController
	{
		public $name = "Courses";
	
		public function index(){
			$this->paginate = array('limit' => 6);
	        $courses = $this->paginate('Course');
	        $this->set(compact('courses'));
		}

		public function add() {
			if ($this->data) {
	            if ($this->Course->save($this->data))
	                $this->Session->setFlash("Curso adicionado com sucesso!");
	            $this->data = array();
        	}
		}

		public function edit($id = null) {
	        if ($this->data) {
	            if ($this->Course->save($this->data))
	                $this->Session->setFlash("Curso editado com sucesso!");
	            $this->redirect(array('controller' => 'courses', 'action' => 'index'));
	        } else {
	            $this->data = $this->Course->read(null, $id);
	        }
	    }
		public function obs($id = null) {
	        if ($this->data) {
	            if ($this->Course->save($this->data))
	                $this->Session->setFlash("Curso editado com sucesso!");
	            $this->redirect(array('controller' => 'computers', 'action' => 'index'));
	        } else {
	            $this->data = $this->Course->read(null, $id);
	        }
	    }


	    public function delete($id = null) {
	        if ($id) {
	            if ($this->Course->delete($id))
	                $this->Session->setFlash("Curso excluido com sicesso!");
	            $this->redirect(array('controller' => 'Courses', 'action' => 'index'));
	        }
	    }
	}

?>