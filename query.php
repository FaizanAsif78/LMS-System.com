<?php

include('./include/conn.php');


if(empty($_SESSION['ademail'])){

  header('location:index.php');
}



if(isset($_POST['sub'])){
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $uni=mysqli_real_escape_string($conn,$_POST['uni']);
  $semester=mysqli_real_escape_string($conn,$_POST['sem']);
  $area=mysqli_real_escape_string($conn,$_POST['area']);
  $station=mysqli_real_escape_string($conn,$_POST['stat']);
  $refrence=mysqli_real_escape_string($conn,$_POST['ref']);
  $course=mysqli_real_escape_string($conn,$_POST['course']);
  $feep=mysqli_real_escape_string($conn,$_POST['feep']);
  $feedis=mysqli_real_escape_string($conn,$_POST['feedis']);
  $gen=mysqli_real_escape_string($conn,$_POST['gen']);
  $con1=mysqli_real_escape_string($conn,$_POST['con1']);
  $con2=mysqli_real_escape_string($conn,$_POST['con2']);
  $qadr=mysqli_real_escape_string($conn,$_POST['adr']);
  $date=date('Y-m-d');

  $sql="INSERT INTO `query` (qname,quni,qsem,qarea,qstat,qref,qcourse,qfee,qdisc,qgen,qcon1,qcon2,qadr,qdate) VALUES('$name','$uni','$semester','$area','$station','$refrence','$course','$feep','$feedis','$gen','$con1','$con2','$qadr','$date')";
  $run=mysqli_query($conn,$sql);
  if($run){
    ?>
<script>alert('Data Inserted')</script>
    <?php
  }else{
    ?>
<script>alert('Data didnot Insert')</script>
    <?php
  }
}






include('./include/header.php');
?>


<div class="main-content">
        <section class="section">
          <div class="section-body">
              <div class="card-header">
              <h2>Faculty Registration</h2>
              </div>
            <form method="POST">
            <div class="card-header mt-5">
                    <h4>Query Information   </h4>
                  </div>
                <div class="row">
                    <div class="col">
                      <div class="row">

                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>NAME</label>
                      <input type="text" name="name" placeholder="Enter Student Name" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>UNIVERSITY</label>
                      <input type="text" name="uni" placeholder="Enter University" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>SEMESTER</label>
                      <input type="text" name="sem" placeholder="Enter Semester" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>AREA</label>
                      <input type="text" name="area" placeholder="Enter Area" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>STATION</label>
                      <input type="text" name="stat" placeholder="Enter Station" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>REFERENCE</label>
                      <input type="text" name="ref" placeholder="Enter Reference" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>COURSE APPLIED</label>
                      <input type="text" name="course" placeholder="Course Applied" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>FEE PACKAGE</label>
                      <input type="text" name="feep" placeholder="Fee Package" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>DISCOUNT FEE PACKAGE</label>
                      <input type="text" name="feedis" placeholder="Fee Package" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Select Gender</label>
                        <select name="gen">
                        <option value="">Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        </select>
                        
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>CONTACT NO 1</label>
                      <input type="text" name="con1" placeholder="Contact 1" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>CONTACT NO 2</label>
                      <input type="text" name="con2" placeholder="Contact 2" class="form-control">
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label>Address</label>
                      <input type="text" name="adr" placeholder="Address" class="form-control">
                    </div>

                    <div class="form-group "> 
                      <input type="submit" name="sub" class="btn btn-success">
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