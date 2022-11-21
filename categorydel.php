<?php
include('./include/conn.php');

$id=$_GET['c_id'];
$qury="DELETE FROM category WHERE c_id='$id'";
$qrun=mysqli_query($conn,$qury);
if($qrun){
    echo "<script> alert('Deleted') </script>";
}else{
    ?>
<script> alert('Didnot Delete') </script>
    <?php
}

?>