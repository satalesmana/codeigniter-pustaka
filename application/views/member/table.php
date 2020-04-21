<table border=1;>
	<tr>
		<td>NIM</td>
		<td>NAMA</td>
	</tr>
	<?php foreach($data as $row){ ?>
		<tr>
			<td><?php echo $row->nim; ?></td>
			<td><?php echo $row->nama; ?></td>
		</tr>
	<?php } ?>
</table>