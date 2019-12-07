<?php 

class CursosController extends AppController
{
    public function index()
    {
    	$this->Curso->recursive=0;
    	$this->set('Cursos', $this->paginate());
    }
    public function agregarcurso()
    {
    	if ($this->request->is('post')) {
    		if ($this->Curso->save($this->request->data)) {
    			$this->Session->setFlash('Curso agregado');
    			$this->redirect(array('action'=>'index'));
    		}
    		

    	}
    	$teachers=$this->Curso->Teacher->find('list');
    	$students=$this->Curso->Student->find('list');
    	$this->set(compact('teachers','students'));
    }
}

 ?>