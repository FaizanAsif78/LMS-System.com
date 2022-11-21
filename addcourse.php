<?php
include('./include/conn.php');

if(empty($_SESSION['ademail'])){

  header('location:index.php');
}

if(isset($_POST['sub1'])){
    $acourse=mysqli_real_escape_string($conn,$_POST['acourse']);

    $sql="INSERT INTO course (acourse) VALUES ('$acourse')";
    $run=mysqli_query($conn,$sql);
    if($run){
        echo "<script> alert('Inserted') </script>";
    }else{
        echo "<script> alert('Didnot Inserted') </script>";
    }
}



include('./include/header.php');
?>

<div class="main-content">
        <section class="section">
          <div class="section-body">

            <form method="POST">
            <div class="card-header">
                    <h4>Courses   </h4>
                  </div>
                  
                  <div class="col-lg-12">
              <a href="viewcourse.php" class="btn btn-info" style="float:right">View</a>
            </div> 

                <div class="row">
                    <div class="col">
                      <div class="row">

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>NAME</label>
                      <input type="text" oninput="alp(this)" name="acourse" placeholder="Enter Course Name" class="form-control">
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