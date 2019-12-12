<h1>Index de profesores</h1>
<table>
	<tr>
		<th><?php echo $this->Paginator->sort('id') ?></th>
		<th><?php echo $this->Paginator->sort('nombre') ?></th>
		<th><?php echo $this->Paginator->sort('apellido') ?></th>
		<th><?php echo $this->Paginator->sort('Cv') ?></th>
		<th><?php echo 'Aciones' ?></th>

	</tr>
	<?php foreach ($Profesores as $value) { ?>
		<tr>
			<td><?=  $value['Teacher']['id'] ?></td>
			<td><?= $value['Teacher']['nombre'] ?></td>
			<td><?=  $value['Teacher']['apellido'] ?></td>
			<td><?= $value['Teacher']['cv'] ?></td>
			<td><?= $this->Html->link('editar', array('action'=> 'editar',$value['Teacher']['id'] ));?>&nbsp;</td>
		</tr>
	<?php } ?>
</table>

