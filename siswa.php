<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$siswa = new Siswa();
$data = $siswa->readAllSiswa();

?>

<table border="1">
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>NATIONALITY</th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['nationality']?></td>
		<td>
			<a href="dsiswa.php?a=<?php echo $a['id_siswa']?>">
				Detail
			</a>	
		</td>
		<td>
			<a href="usiswa.php?a=<?php echo $a['id_siswa']?>">
				Edit
			</a>	
		</td>
		<td> 
			<a href="delsiswa.php?a=<?php echo $a['id_siswa']?>"> 
				Delete 
			</a>
		</td>
	</tr>
	<?php endforeach?>
</table>