<?php  
    include 'dbconection.php';
    $comandos = fopen("comandos.txt", "w") or die("Unable to open file!");
    $conn = OpenCon();

    $sql = "SELECT boca FROM vlan where modo = 'trunk' and modelo = 'juniper'";
    $result = $conn->query($sql);
    
    while($row = mysqli_fetch_array($result)) {
	fwrite($comandos, "configure;delete interfaces ge-0/0/". $row["boca"]."");
	fwrite($comandos, "\n");
        fwrite($comandos, "configure;set interfaces ge-0/0/". $row["boca"]." unit 0 family ethernet-switching port-mode trunk"); 
        fwrite($comandos, "\n");
    }

    $sql = "SELECT DISTINCT vlan FROM vlan where modelo = 'juniper'";
    $result = $conn->query($sql);
    
    while($row = mysqli_fetch_array($result)) {
        
        fwrite($comandos, "configure;delete vlans vlan". $row["vlan"]."");
        fwrite($comandos, "\n");
        fwrite($comandos, "configure;set vlans vlan". $row["vlan"].""); 
        fwrite($comandos, "\n");
    }

    $sql = "SELECT boca,vlan FROM vlan where modo = 'access' and modelo = 'juniper'";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)) {
        fwrite($comandos, "configure;delete interfaces ge-0/0/". $row["boca"]."");
	fwrite($comandos, "\n");
        fwrite($comandos, "configure;set interfaces ge-0/0/". $row["boca"]." unit 0 family ethernet-switching vlan members  vlan". $row["vlan"]."");
        fwrite($comandos, "\n");
    }
    fwrite($comandos,"configure;commit");
    fclose($comandos);
    CloseCon($conn);
    shell_exec('./script.sh');
    echo "Grabado correctamente";
?>
