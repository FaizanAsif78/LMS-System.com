<?php
include('./include/conn.php');

if(empty($_SESSION)){
    header('location:index.php');
}


$id=$_GET['c_id'];
$sql1="SELECT * FROM category WHERE c_id='$id'";
$run1=mysqli_query($conn,$sql1);
$fet2=mysqli_fetch_array($run1);

if(isset($_POST['sub1'])){
    $c_name=mysqli_real_escape_string($conn,$_POST['c_name']);
    $c_date=date('Y-m-d');

    $sql="UPDATE category SET cname='$c_name'";
    $run=mysqli_query($conn,$sql);
    if($run){
        echo "<script> alert('Data Updated') </script>";
        header('Refresh:1 , url=viewcategory.php');
    }else{
        echo "<script> alert('Data Didnot Update') </script>";
    }
}


include('./include/header.php');
?>

<div class="main-content">
        <section class="section">
          <div class="section-body">

            <form method="POST">
            <div class="card-header">
                    <h4>Update Category   </h4>
                  </div>
                  
                  <div class="col-lg-12">
              <a href="viewcourse.php" class="btn btn-info" style="float:right">View</a>
            </div> 

                <div class="row">
                    <div class="col">
                      <div class="row">

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Category Name</label>
                      <input type="text" name="c_name" placeholder="Enter Category Name" class="form-control">
                    </div>

                    
                    <div class="form-group" style="margin-top:30px"> 
                      <input type="submit" name="sub1" class="btn btn-success">
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