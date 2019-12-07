<?php 
	/**
	 * summary
	 */
	class StudentsController extends AppController
	{
	    public $helpers = array('Html','Form');
	    public $components = array('Session');


	    public function index()
	    {
	    	$this->set('estudiantes', $this->Student->find('all'));
	    	//$estudiante=$this->Student->find('all');
	    	//$this->set('estudiantes',$this->Student->find('all'));

	    	//$this->set('estudiantes', $this->Student->findById(2));
	    }
	    public function agregar()
	    {
	    	if ($this->request->is('post') ) {
	    		if ($this->Student->save($this->request->data)) {
	    			$this->Session-> setFlash('Estudiante Guardado');
	    			$this->redirect (array('action'=>'index'));
	    		}
	    	}

	    	//$this->Student->save($this->request->data);
	    	
	    }

	    public function editar($id=null) {
	    	$this->Student->id=$id;
	    	if ($this->request->is('get')) {
	    		$this->request->data = $this->Student->read();
	    	}else if ($this->Student->save($this->request->data)) {
	    		$this->Session-> setFlash('Estudiante '. $this->request->data['Student']['nombre'] .'  Guardado');
	    		$this->redirect (array('action'=>'index'));
	    	}else {
	    		$this->Session-> setFlash('Estudiante NO Guardado');
	    	}
		}

		public function borrar($id=null)
		{
			if ($this->request->is('get')) {
				echo "Hacker es malo ";
			}else if ($this->Student->delete($id)) {
				$this->Session-> setFlash('Estudiante Eliminado');
				$this->redirect (array('action'=>'index'));
			}
		}

	}
 ?>