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
		<td><?php echo $value['Student']['id'];	?></td>
		<td><?php echo $value['Student']['nombre'];	?></td>
		<td><?php echo $value['Student']['last_name'];	?></td>
		<td><?php echo $this->Html->link('editando', array('action'=> 'editar',$value['Student']['id'] ));	?>&nbsp;
		<?php echo $this->Form->postLink('Elimando', 
										array('action'=> 'borrar',$value['Student']['id'] ),
										array('confirm'=> 'Realmente deseas borrar')); ?></td>
		</td>
	</tr>

<?php	
}

 ?>
 
 </table>