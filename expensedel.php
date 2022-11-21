<?php
include('./include/conn.php');

$id=$_GET['e_id'];
$sql="DELETE FROM expense WHERE e_id='$id'";
$run=mysqli_query($conn,$sql);
if($run){
    ?>
<script> alert('Data Deleted'); </script>
    <?php
    header('location:viewexpense.php');
}else{
    echo "<script> alert('Data didnot Delete'); </script>";
}
?>