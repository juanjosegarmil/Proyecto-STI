<?php 
    include 'dbconection.php';
    $conn = OpenCon();
    $sql = "SELECT * FROM vlan";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
<title>Borrar</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<table class="table">
	<tr>
	<td scope="col">Vlan</td>
	<td scope="col">Modelo</td>
	<td scope="col">Color</td>
	<td scope="col">Boca</td>
	<td scope="col">Modo</td>
	<td scope="col">Id</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
		if ($row['color'] == "#000000") {
			
		
	?>
	<tr style="background-color:<?php echo $row["color"];?>;color : red">
	<td><?php echo $row["vlan"]; ?></td>
	<td><?php echo $row["modelo"]; ?></td>
	<td><?php echo $row["color"]; ?></td>
	<td><?php echo $row["boca"]; ?></td>
	<td><?php echo $row["modo"]; ?></td>
	<td><a href="borrar.php?id=<?php echo $row["id"]; ?>">Borrar</a></td>
	</tr>
	<?php
	$i++;
		}else {
	?>
		<tr style="background-color:<?php echo $row["color"];?>">
	<td><?php echo $row["vlan"]; ?></td>
	<td><?php echo $row["modelo"]; ?></td>
	<td><?php echo $row["color"]; ?></td>
	<td><?php echo $row["boca"]; ?></td>
	<td><?php echo $row["modo"]; ?></td>
	<td><a href="borrar.php?id=<?php echo $row["id"]; ?>">Borrar</a></td>
	</tr>
	<?php
	$i++;
		}
	}
    mysqli_close($conn);
	?>
</table>
    <a a href="proyecto.php" class="btn btn-dark">Volver</a>
</body>
</html>