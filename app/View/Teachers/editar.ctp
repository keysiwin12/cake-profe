<h1>editar profesor</h1>

<?php echo $this->Form->create('Teacher'); 
	echo $this->Form->input('id',array('type'=>'hidden'));
	echo $this->Form->input('nombre');
	echo $this->Form->input('apellido');
	echo $this->Form->input('cv');
	echo $this->Form->end('Editar profesor') ;
?>