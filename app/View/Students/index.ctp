<h1>Listado de estudiantes </h1>

<?php echo $this->Html->link('Agregar Estudiante', array('action'=>'agregar')); ?>
<table>
	<tr>
		<th>Id</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Accioness</th>

	</tr>
<?php 
foreach ($estudiantes as $value) {
	?>
	<tr>
		<td><?= $value['Student']['id'];	?></td>
		<td><?= $value['Student']['nombre'];	?></td>
		<td><?= $value['Student']['last_name'];	?></td>
		<td><?= $this->Html->link('editar', array('action'=> 'editar',$value['Student']['id'] ));	?>&nbsp;
		<?= $this->Form->postLink('Elimando', 
										array('action'=> 'borrar',$value['Student']['id'] ),
										array('confirm'=> 'Estas de seguro de borrar a '.
										$value['Student']['nombre']
										)); ?></td>
		</td>
	</tr>

<?php	
}

 ?>
 
 </table>