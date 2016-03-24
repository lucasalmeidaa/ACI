<?php 

	/**
	*  Notas
	*/
	class NotesController extends AppController
	{
   	 public $name = 'Notes';

	   	 public function index(){
			$this->paginate = array('limit' => 1);
	        $notes = $this->paginate('Note');
	        $this->set(compact('notes'));
		}
		
		public function edit($id = null) {
        if ($this->data) {
            if ($this->Note->save($this->data))
                $this->Session->setFlash("Nota editado com sucesso!");
            $this->redirect(array('controller' => 'notes', 'action' => 'index'));
	        } else {
	            $this->data = $this->Note->read(null, $id);
	        }
	    }
	}

?>