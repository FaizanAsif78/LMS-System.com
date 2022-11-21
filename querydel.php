<?php
include('./include/conn');

$id=$_GET['qid'];
$dele="DELETE FROM query WHERE qid=$id";
$drun=mysqli_query($conn,$dele);

if($drun){
    ?>
<script> alert('Deleted') </script>
    <?php
header('Refresh:1, url=viewquery.php');
}else{
    ?>
<script> alert('Didnot Deleted') </script>
    <?php
}
?>