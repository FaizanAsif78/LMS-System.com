<?php
include('./include/conn.php');
$id=$_GET['bid'];
$bdel="DELETE FROM batch WHERE bid='$id'";
$brun=mysqli_query($conn,$bdel);
if($brun){
    ?>
<script> alert('Data Deleted') </script>
    <?php
    header('Refresh:1, url=viewbatch.php');
}else{
    ?>
<script> alert('Data Didnot Delete') </script>
    <?php
}


?>