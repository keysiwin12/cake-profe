<h1>Editar Estudiante </h1>
<?php 
	echo $this->Form->create('Student');
	echo $this->Form->input('id',array('type'=>'hidden'));
	echo $this->Form->input('nombre');
	echo $this->Form->input('last_name');
	echo $this->Form->end('Editar estudiante');
 ?>