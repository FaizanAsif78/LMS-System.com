<?php
include('./include/conn.php');

$id=$_GET['pid'];
$sql="SELECT * FROM `partner` WHERE pid='$id'";
$run=mysqli_query($conn,$run);
if($run){
    echo "<script> alert('Data Deleted') </script>";
    header('Refresh:1,url=viewpartner.php');
}else{
    ?>
<script> alert('Data didnot Delete') </script>
    <?php
}

?>