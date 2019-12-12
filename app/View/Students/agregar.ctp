<h1>Pagina para agregar estudiantes</h1>

<?php 
	echo $this->Form->create('Student');
	echo $this->Form->input('nombre');
	echo $this->Form->input('last_name',array('label'=>'Apellido'));
	echo $this->Form->end('Guardar estudiante');
 ?>

