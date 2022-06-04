<?php 
    include 'dbconection.php';
    $conn = OpenCon();
    $sql = "DELETE FROM vlan WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($conn, $sql)) {
        header("Location: http://localhost:8080/proyecto/mostrar.php"); /* Redirect browser */
        exit();
    } else {
        echo "Error borrando regristro: " . mysqli_error($conn);
    }
    mysqli_close($conn);

?>
