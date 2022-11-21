<?php
include('./include/conn.php');

$id=$_GET['t_id'];
$sql="SELECT * FROM teacher_lms WHERE t_id='$id'";
$run=mysqli_query($conn,$sql);
if($run){
    ?>
<script> alert('Data Deleted'); </script>
    <?php
header('Refresh:1,url=viewteacher.php');
}else{
    ?>
<script> alert('Data didnot Delete'); </script>
    <?php
}
?>