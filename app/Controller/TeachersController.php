<?php 
/**
 * summary
 */
class TeachersController extends AppController
{
    public function index()
    {
    	$this->Teacher->recursive=0;
    	$this->set('Profesores',$this->paginate());
    }
    public function agregarprofesor()
    {
    	if ($this->request->is('post')) {
    		if ($this->Teacher->save($this->request->data)) {
    			$this->Session->setFlash('docente guardado');
    			$this->redirect(array('action'=>'index'));
    		}
    	}
	}
	
	public function editar($id=nul) {
	    	$this->Teacher->id=$id;
	    	if ($this->request->is('get')) {
	    		$this->request->data = $this->Teacher->read();
	    	}else if ($this->Teacher->save($this->request->data)) {
	    		$this->Session-> setFlash('Profesor '. $this->request->data['Teacher']['nombre'] .'  Editado');
	    		$this->redirect (array('action'=>'index'));
	    	}else {
	    		$this->Session-> setFlash('Profesor NO Guardado');
	    	}
	}
}
 ?>