<?php 
    include 'dbconection.php';

    $phparray = array();
    $vlan = array();
    $modelo = array();
    $color = array();
    $boca = array();
    $modo = array();
    $id = array();
    $data=json_decode($_POST['jsarray']);
    //print_r($data);
    $cont = count($data);
    $a = 0;
    echo "<br>";
       while ($a < $cont) {
            array_push($vlan, $data[$a]);
            $a++;
            array_push($modelo, $data[$a]);
            $a++;
            array_push($color, $data[$a]);
            $a++;
            array_push($boca, $data[$a]);
            $a++;
            array_push($modo, $data[$a]);
            $a++;
            array_push($id, $data[$a]);
            $a++;             
        }
    $conn = OpenCon();
    $cont2= count($vlan);
    $a=0;
    while ($a < $cont2) {
        mysqli_query($conn,"INSERT INTO vlan (vlan,modelo,color,boca,modo,id) VALUES ('". $vlan[$a]."','". $modelo[$a]."','". $color[$a]."','". $boca[$a]."','". $modo[$a]."','". $id[$a]."')");
        $a++;
    }
    CloseCon($conn);
    echo"Guardado correctamente";
    header("Location: http://192.168.46.215:8080/Proyecto-STI/proyecto.php"); /* Redirect browser */
    exit();
    ?>
