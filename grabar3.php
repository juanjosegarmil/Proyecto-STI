<?php
    include 'dbconection.php';
    $comandos = fopen("comandos3.txt", "w") or die("Unable to open file!");
    $conn = OpenCon();

    $sql = "SELECT boca FROM vlan where modo = 'trunk' and modelo = 'hp'";
    $result = $conn->query($sql);

    while($row = mysqli_fetch_array($result)) {
        fwrite($comandos, "system-view;interfaces ge 0/0/". $row["boca"].";port link-type trunk");
        fwrite($comandos, "\n");
    }

    $sql = "SELECT DISTINCT vlan FROM vlan where modelo = 'hp'";
    $result = $conn->query($sql);

    while($row = mysqli_fetch_array($result)) {
        fwrite($comandos, "system-view;no vlan ". $row["vlan"]."");
        fwrite($comandos, "\n");
        fwrite($comandos, "system-view;vlan ". $row["vlan"]."");
        fwrite($comandos, "\n");
    }

    $sql = "SELECT boca,vlan FROM vlan where modo = 'access' and modelo = 'hp'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
	fwrite($comandos, "system-view;no vlan ". $row["vlan"]." tagged a". $row["boca"]."");
	fwrite($comandos, "\n");
        fwrite($comandos, "system-view;interfaces ge 0/0/". $row["boca"].";port link-type access;quit;vlan ". $row["vlan"]." tagged a". $row["boca"]."");
        fwrite($comandos, "\n");
    }
    fwrite($comandos,"system-view;commit");
    fclose($comandos);
    CloseCon($conn);
    shell_exec('./script3.sh');
    echo "Grabado correctamente";
?>
