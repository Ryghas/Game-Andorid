<body bgcolor="#F0FFFF">
<?php
$mysqli = new mysqli('localhost', 'root', '', 'game');

echo '<table border="1">

<tr bgcolor="lighblue">
	<th width="50" bgcolor="#00FFFF">No</th>
	<th width="150" bgcolor="#00FFFF">Nama</th>
	<th width="100" bgcolor="#00FFFF">Score</th>
</tr>';

$no = 1;

$res = $mysqli->query("SELECT * from himpunan order by score DESC");

while($data = $res->fetch_array(MYSQLI_ASSOC)){

echo "<tr>

	<th >$no.</th>

	<th>$data[username]</th>

	<th>$data[score]</th>

</tr>";

$no++;

}

echo '</table>';
?>
</body>