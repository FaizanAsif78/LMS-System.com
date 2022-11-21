<?php
include('./include/conn.php');

if(empty($_SESSION['ademail'])){

  header('location:index.php');
}

$id=$_GET['cid'];
$sql1="SELECT * FROM course WHERE cid='$id'";
$run1=mysqli_query($conn,$sql1);
$fetch=mysqli_fetch_array($run1);

if(isset($_POST['sub'])){
    $acourse=mysqli_real_escape_string($conn,$_POST['acourse']);

    $sql="UPDATE course SET acourse='$acourse'";
    $run=mysqli_query($conn,$sql);
    if($run){
        echo "<script> alert('Updated') </script>";
        header('Refresh:1, url=viewcourse.php');
    }else{
        echo "<script> alert('Didnot Update') </script>";
    }
}



include('./include/header.php');
?>

<div class="main-content">
        <section class="section">
          <div class="section-body">
              <div class="card-header">
              <h2>Add Course</h2>
              </div>
            <form method="POST">
            
               <!-- <div class="row mt-5 mb-5 ">
                <button type="button" class="btn btn-success"> <a href="viewcourse.php">View Course</a></button>
               </div> -->
                    <div class="col">
                      <div class="row">

                    <div class="form-group col-lg-5 col-md-5 col-sm-5">
                      <label>NAME</label>
                      <input type="text" name="acourse" placeholder="Enter Your Course" class="form-control">
                    </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row mt-4 "> 
                    <input type="submit" class="btn btn-success" name="sub">
                    </div>
                    </div> 
                    


                    </div>
                </div>
            </form>
            </div>
          </div>
        </section>
        <?php
        include('./include/footer.php');
        ?>