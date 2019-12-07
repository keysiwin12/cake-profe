<h1>Vista de index curso</h1>
<table>
	<tr>
		<th><?php echo $this->Paginator->sort('id'); ?></th>
		<th><?php echo $this->Paginator->sort('name'); ?></th>
		<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
		<th><?php echo $this->Paginator->sort('profesor'); ?></th>
	</tr>
	<?php foreach ($Cursos as $value) { ?>
	<tr>
		<td><?php echo  $value['Curso']['id']?></td>
		<td><?php echo  $value['Curso']['name']?></td>
		<td><?php echo  $value['Curso']['descripcion']?></td>
		<?php $nombreprofesor= $value['Teacher']['nombre']; ?>
		<td><?php echo  
						$this->Html->link($nombreprofesor, array('controller'=>'teachers', 
						'action'=>'index')); ?></td>
	</tr>
	<?php } ?>
</table>