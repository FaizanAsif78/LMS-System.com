<?php
include('./include/conn.php');

if(empty($_SESSION)){
    header('location:index.php');
}

if(isset($_POST['sub1'])){
    $c_name=mysqli_real_escape_string($conn,$_POST['c_name']);
    $c_date=date('Y-m-d');

    $sql="INSERT INTO category (cname,c_date) VALUES ('$c_name','$c_date')";
    $run=mysqli_query($conn,$sql);
    if($run){
        echo "<script> alert('Data Inserted') </script>";
    }else{
        echo "<script> alert('Data Didnot Insert') </script>";
    }
}


include('./include/header.php');
?>

<div class="main-content">
        <section class="section">
          <div class="section-body">

            <form method="POST">
            <div class="card-header">
                    <h4>Category   </h4>
                  </div>
                  
                  <div class="col-lg-12">
              <a href="viewcategory.php" class="btn btn-info" style="float:right">View</a>
            </div> 

                <div class="row">
                    <div class="col">
                      <div class="row">

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Category Name</label>
                      <input type="text" name="c_name" oninput="alp(this)" placeholder="Enter Category Name" class="form-control">
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
        <script src="./include/validation.js" ></script>
        <?php
        include('./include/footer.php');
        ?>