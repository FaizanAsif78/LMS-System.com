<?php
include('./include/conn.php');

if(empty($_SESSION)){
    header('location:index.php');
}


if(isset($_POST['sub'])){
  $session=mysqli_real_escape_string($conn,$_POST['s_ses']);
  $tname=mysqli_real_escape_string($conn,$_POST['tname']);
  $ref=mysqli_real_escape_string($conn,$_POST['ref']);
  $s_date=mysqli_real_escape_string($conn,$_POST['sdate']);
  $name=mysqli_real_escape_string($conn,$_POST['name']);
  $fname=mysqli_real_escape_string($conn,$_POST['fname']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $phone=mysqli_real_escape_string($conn,$_POST['phone']);
  $gen=mysqli_real_escape_string($conn,$_POST['gen']);
  $dob=mysqli_real_escape_string($conn,$_POST['dob']);
  $s_status=mysqli_real_escape_string($conn,$_POST['sta']);
  $add=mysqli_real_escape_string($conn,$_POST['sadd']);
  $img=$_FILES['img']['name'];
  $tdeg=mysqli_real_escape_string($conn,$_POST['t_degree']);
  $degname=mysqli_real_escape_string($conn,$_POST['degree_n']);
  $deg_sta=mysqli_real_escape_string($conn,$_POST['deg_status']);
  $uni=mysqli_real_escape_string($conn,$_POST['uni']);
  $year=mysqli_real_escape_string($conn,$_POST['year']);
  $t_fee=mysqli_real_escape_string($conn,$_POST['tfee']);
  $pay=mysqli_real_escape_string($conn,$_POST['pay']);
  $paid=mysqli_real_escape_string($conn,$_POST['paid']);
  $rem=mysqli_real_escape_string($conn,$_POST['rem']);
  $term=mysqli_real_escape_string($conn,$_POST['term']);

  $qury="INSERT INTO student_lms (s_ses,t_name,ref,s_date,`name`,fname,email,phno,sgen,dob,s_status,s_add,img,t_deg,d_name,deg_status,uni,`year`,t_fee,pay_method,paid_fee,rem_fee,pay_term) VALUES ('$session','$tname','$ref','$s_date','$name','$fname','$email','$phone','$gen','$dob','$s_status','$add','$img','$tdeg','$degname','$deg_sta','$uni','$year','$t_fee','$pay','$paid','$rem','$term')";
  $qurun=mysqli_query($conn,$qury);
  move_uploaded_file($_FILES['img']['tmp_name'],"userimg/".$img);
  if($qurun){
    ?>
<script> alert('Data Inserted'); </script>
    <?php
  }else{
    ?>
<script> alert('Data didnot Insert'); </script>
    <?php
  }
}






include('./include/header.php');
?>

<div class="main-content">
        <section class="section">
          <div class="section-body">

            <form method="POST" enctype='multipart/form-data'>
            <div class="card-header">
                    <h4>Student </h4>
                  </div>
                  
                  <div class="col-lg-12" style="margin-bottom:40px ">
              <a href="viewstudent.php" class="btn btn-info" style="float:right">View</a>
            </div> 

                <div class="row">

                <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Session</label> -->
                      <select name="s_ses" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Session</option>
                          <br>
                          <option value="Morning">Morning</option>
                          <br>
                          <option value="Evening">Evening</option>
                          <br>
                          <option value="Noon">Noon</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Teacher Name</label> -->
                      <select name="tname" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Teacher Name</option>
                          <?php  
                          $trr="SELECT * FROM teacher_lms";
                          $trrun=mysqli_query($conn,$trr);
                          while($fett1=mysqli_fetch_array($trrun)){
                              ?>
                                <option value="<?php echo $fett1['t_id']; ?>"><?php echo $fett1['t_name']; ?></option>
                              <?php
                          }
                          ?>
                          
                      </select>
                    </div>
                     

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Refrence</label>
                      <input type="text" oninput="alp(this)" name="ref"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Start Date</label>
                      <input type="date" name="sdate"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Name</label>
                      <input type="text" name="name" oninput="alp(this)" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Father Name</label>
                      <input type="text" name="fname" oninput="alp(this)" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Email</label>
                      <input type="text" name="email" oninput="eml(this)" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Phone NO</label>
                      <input type="text" name="phone" oninput="num(this)" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Gender</label> -->
                      <select name="gen" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Gender</option>
                          <br>
                          <option value="Male">Male</option>
                          <br>
                          <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Date of Birth</label>
                      <input type="text" name="dob" oninput="num(this)" class="form-control">
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Status</label> -->
                      <select name="sta" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Status</option>
                          <br>
                          <option value="Enrolled">Enrolled</option>
                          <option value="Continue">Continue</option>
                          <option value="Complete">Complete</option>
                          <option value="Freez">Freez</option>
                          <option value="Stuck Off">Stuck Off</option>
                      </select>
                    </div>


                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label>Address</label>
                      <textarea name="sadd" oninput="alp(this)" class="form-control"></textarea>
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Upload IMG</label>
                      <input type="file" name="img"  class="form-control file">
                    </div>



                    <div class="card-header col-12" style="margin-top:40px; margin-bottom:40px" >
                    <h4>Educational Information</h4>
                  </div>
                  
                    <div class="row">
                    

                  <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Teacher Degree Certificate</label> -->
                      <select name="t_degree" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Teacher Degree</option>
                          <?php
                          $trr1="SELECT * FROM teacher_lms";
                          $trrun1=mysqli_query($conn,$trr1);
                          while($fett2=mysqli_fetch_array($trrun1)){
                              ?>
                            <option value="<?php echo $fett2['t_id']; ?>"><?php echo $fett2['t_degree']; ?></option>
                              <?php
                          }
                          ?>
                      </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Degree Name</label>
                      <input type="text" name="degree_n" oninput="alp(this)" class="form-control">
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Degree Status</label> -->
                      <select name="deg_status" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Degree Status</option>
                          <br>
                          <option value="Continue">Continue</option>
                          <br>
                          <option value="Complete">Complete</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Board University</label>
                      <input type="text" name="uni" oninput="alp(this)" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Year</label>
                      <input type="text" name="year" oninput="num(this)" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Total Fee</label>
                      <input type="text" name="tfee" oninput="num(this)" class="form-control">
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <select name="pay" id="" class="form-control">
                          <option value="">Select Payment Method</option>
                          <br>
                          <option value="Full fee">Full fee</option>
                          <br>
                          <option value="Installments">Installments</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Paid Fee</label>
                      <input type="text" name="paid" oninput="num(this)" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Remaining Fee</label>
                      <input type="text" name="rem" oninput="num(this)" class="form-control">
                    </div>


                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <select name="term" id="" class="form-control">
                          <option value="">Select Pay Term</option>
                          <br>
                          <option value="7 Days">7 Days</option>
                          <option value="15 Days">15 Days</option>
                          <option value="30 Days">30 Days</option>
                          <option value="60 Days">60 Days</option>
                      </select>
                    </div>

                    
                    </div>
                    
                    <div class="form-group" style="margin-top:30px; margin-left:50px"> 
                      <input type="submit" name="sub" class="btn btn-success">
                    </div>

                    


                    </div>
                </div>
            </form>
            </div>
          </div>
        </section>
        <script src="./include/validation.js"></script>
        <?php
        include('./include/footer.php');
        ?>