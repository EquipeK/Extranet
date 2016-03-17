
<table class="table">
	<thead>
		<tr>
			<th>ID</th>
			<th>label</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($departments as $department) : ?>
			<tr>
				<td><?= $department->id_department ?></td>
				<td><?= $department->label_department ?></td>
			</tr>	
		<?php endforeach; ?>	
	</tbody>
</table>