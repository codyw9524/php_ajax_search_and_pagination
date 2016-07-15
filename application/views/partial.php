<div class='table_div'>
	<ul id="page_links">
<?php
	$count = 1;
	for($i = 0; $i < count($parsed); $i = $i + 4)
	{ ?>
		<li>
			<input type='hidden' name='page_number' value=''>
			<button type="submit" class="btn btn-link" value="<?= $count ?>"><?= $count ?></button>
		</li>
<?php
	$count++;	
	} ?>
	</ul>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Leads ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Registered On</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>

<?php
	foreach ($leads as $lead) 
	{  ?>
		<tr>
			<td><?=$lead['id']?></td>
			<td><?=$lead['first_name']?></td>
			<td><?=$lead['last_name']?></td>
			<td><?=date("M d, Y", strtotime($lead['created_at']))?></td>
			<td><?=$lead['email']?></td>
		</tr>
<?php
	}  ?>
		</tbody>
	</table>
</div>
