<?php
include('./include/conn.php');

$id=$_GET['s_id'];
$del="DELETE FROM student_lms WHERE s_id='$id'";
$run=mysqli_query($conn,$del);
if($run){
    ?>
    <script> alert('Data Deleted'); </script>
    <?php
    header('Refresh:1,url=viewstudent.php');
}else{
    echo "<script> alert('Data didnot Delete'); </script>";
}
?>