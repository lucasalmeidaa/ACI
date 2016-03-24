<?php  

	/**
	* Links
	*/
	class ReportsController extends AppController {
		
		
	    public $name = 'Reports';

	    public function index(){
	    	$this->paginate = array('limit' => 6);
	        $reports = $this->paginate('Report');
	        $this->set(compact('reports')); 	
	    }

	    public function add(){	    	
	        if ($this->data) {
	            if ($this->Report->save($this->data))
	                $this->Session->setFlash("Relatório gerado com sucesso!");
	            $this->data = array();
	        }
	    }
	}


?>