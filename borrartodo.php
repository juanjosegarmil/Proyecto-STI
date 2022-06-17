<?php 
    include 'dbconection.php';
    $conn = OpenCon();
    $sql = "DELETE FROM vlan";
    if (mysqli_query($conn, $sql)) {
        header("Location: http://192.168.46.215:8080/Proyecto-STI/mostrar.php"); /* Redirect browser */
        exit();
    } else {
        echo "Error borrando regristro: " . mysqli_error($conn);
    }
    mysqli_close($conn);

?>
