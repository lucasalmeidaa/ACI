<?php 

/**
* Coputadores
*/
class ComputersController extends AppController
{
    public $name = 'Computers';
	
	public function index(){
		$this->paginate = array('limit' => 6);
        $computers = $this->paginate('Computer');
        $this->set(compact('computers'));
	}

    public function add() {
        if ($this->data) {
            if ($this->Computer->save($this->data))
                $this->Session->setFlash("Computador adicionado com sucesso!");
            $this->data = array();
        }
    }

	public function edit($id = null) {
        if ($this->data) {
            if ($this->Computer->save($this->data))
                $this->Session->setFlash("Computador editado com sucesso!");
            $this->redirect(array('controller' => 'computers', 'action' => 'index'));
        } else {
            $this->data = $this->Computer->read(null, $id);
        }
    }
	public function obs($id = null) {
        if ($this->data) {
            if ($this->Computer->save($this->data))
                $this->Session->setFlash("Computador editado com sucesso!");
            $this->redirect(array('controller' => 'computers', 'action' => 'index'));
        } else {
            $this->data = $this->Computer->read(null, $id);
        }
    }

    public function delete($id = null) {
        if ($id) {
            if ($this->Computer->delete($id))
                $this->Session->setFlash("Computador excluido com sicesso!");
            $this->redirect(array('controller' => 'Computers', 'action' => 'index'));
        }
    }

    public function disponibilidade(){
        $this->paginate = array('limit' => 4);
        $computers = $this->paginate('Computer');
        $this->set(compact('computers'));
    }



    public function toggle($id = null) {

        if ($this->data) {
            if ($this->Computer->save($this->data))
                $this->Session->setFlash("Computador marcado com sucesso!");
            $this->redirect(array('controller' => 'computers', 'action' => 'disponibilidade'));
        } else {
            $this->data = $this->Computer->read(null, $id);
        }
    }
	
}

 ?>