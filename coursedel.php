<?php
include('./include/conn');

$id=$_GET['cid'];
$cdel="DELETE FROM course WHERE cid='$id'";
$crun=mysqli_query($conn,$crun);

if($crun){
    echo "<script> alert('Deleted') </script>";
    header('Refresh:1 , url=viewcourse.php');
}else{
    echo "<script> alert('Didnot Deleted') </script>";
}

?>