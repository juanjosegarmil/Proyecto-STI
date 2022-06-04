<?php
    include 'dbconection.php';
    $comandos = fopen("comandos2.txt", "w") or die("Unable to open file!");
    $conn = OpenCon();

    $sql = "SELECT boca FROM vlan where modo = 'trunk' and modelo = 'huawei'";
    $result = $conn->query($sql);

    while($row = mysqli_fetch_array($result)) {
        fwrite($comandos, "system-view;clear configuration ge 0/0/". $row["boca"]."");
        fwrite($comandos, "\n");
        fwrite($comandos, "system-view;interfaces ge 0/0/". $row["boca"].";port link-type trunk;port trunk allow-pass vlan all");
        fwrite($comandos, "\n");
    }

    $sql = "SELECT DISTINCT vlan FROM vlan where modelo = 'huawei'";
    $result = $conn->query($sql);

    while($row = mysqli_fetch_array($result)) {

        fwrite($comandos, "system-view;undo vlan ". $row["vlan"]."");
        fwrite($comandos, "\n");
        fwrite($comandos, "system-view;vlan batch ". $row["vlan"]."");
        fwrite($comandos, "\n");
    }

    $sql = "SELECT boca,vlan FROM vlan where modo = 'access' and modelo = 'huawei'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
        fwrite($comandos, "system-view;clear configuration ge 0/0/". $row["boca"]."");
        fwrite($comandos, "\n");
        fwrite($comandos, "system-view;interfaces ge 0/0/". $row["boca"].";port link-type access;port default vlan ". $row["vlan"]."");
        fwrite($comandos, "\n");
    }
    fwrite($comandos,"system-view;commit");
    fclose($comandos);
    CloseCon($conn);
    shell_exec('./script2.sh');
    echo "Grabado correctamente";
?>
