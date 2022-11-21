<?php
include('./include/conn.php');

if(empty($_SESSION)){
    header('location:index.php');
}
$id=$_GET['t_id'];
$sls="SELECT * FROM teacher_lms WHERE t_id='$id'";
$rrrrn=mysqli_query($conn,$sls);
$fett=mysqli_fetch_array($rrrrn);

if(isset($_POST['sub'])){
    $status=mysqli_real_escape_String($conn,$_POST['t_status']);
    $tname=mysqli_real_escape_String($conn,$_POST['t_name']);
    $fname=mysqli_real_escape_String($conn,$_POST['f_name']);
    $email=mysqli_real_escape_String($conn,$_POST['temail']);
    $password=mysqli_real_escape_String($conn,$_POST['tpass']);
    $phone=mysqli_real_escape_String($conn,$_POST['phone']);
    $gender=mysqli_real_escape_String($conn,$_POST['tgen']);
    $tpost=mysqli_real_escape_String($conn,$_POST['tpost']);
    $percentage=mysqli_real_escape_String($conn,$_POST['per_student']);
    $salary=mysqli_real_escape_String($conn,$_POST['salary']);
    $tadd=mysqli_real_escape_String($conn,$_POST['tadd']);
    $img=$_FILES['timg']['name'];
    $tdeg=mysqli_real_escape_String($conn,$_POST['t_degree']);
    $deg_name=mysqli_real_escape_String($conn,$_POST['degree_n']);
    $dstatus=mysqli_real_escape_String($conn,$_POST['deg_status']);
    $university=mysqli_real_escape_String($conn,$_POST['b_university']);
    $year=mysqli_real_escape_String($conn,$_POST['year']);
    $pro_field=mysqli_real_escape_String($conn,$_POST['prof_field']);
    $exp=mysqli_real_escape_String($conn,$_POST['experience']);

    $sql="UPDATE teacher_lms SET t_status='$status',t_name='$tname',f_name='$fname',temail='$email',tpass='$password',phone='$phone',tgen='$gender',tpost='$tpost',per_student='$percentage',salary='$salary',tadd='$tadd',timg='$img',t_degree='$tdeg',degree_n='$deg_name',deg_status='$dstatus',b_university='$university',`year`='$year',prof_field='$pro_field',experience'$exp' WHERE t_id='$id'";
    $run=mysqli_query($conn,$sql);
    move_uploaded_file($_FILES['timg']['tmp_name'],"userimg/".$img);
    if($run){
        ?>
<script> alert('Data Updated'); </script>
        <?php
    }else{
        echo "<script> alert('Data didnot Update'); </script>";
    }
}








include('./include/header.php');
?>

<div class="main-content">
        <section class="section">
          <div class="section-body">

            <form method="POST" enctype='multipart/form-data'>
            <div class="card-header">
                    <h4>Partner</h4>
                  </div>
                  
                  <div class="col-lg-12" style="margin-bottom:40px ">
              <a href="viewpartner.php" class="btn btn-info" style="float:right">View</a>
            </div> 

                <div class="row">
                    
                    <div class="col-lg-4">
                        <label for="">Status</label>
                              <br>
                        <input type="checkbox" name="t_status" value="Active">Active
                    </div> 

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Teacher Name</label>
                      <input type="text" name="t_name"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Father Name</label>
                      <input type="text" name="f_name"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Teacher Email</label>
                      <input type="text" name="temail"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Password</label>
                      <input type="text" name="tpass"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Phone NO</label>
                      <input type="text" name="phone"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Gender</label>
                      <select name="tgen" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Gender</option>
                          <br>
                          <option value="Male">Male</option>
                          <br>
                          <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Teacher Post</label>
                      <select name="tpost" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Teacher Post</option>
                          <br>
                          <option value="Contract">Contract</option>
                          <br>
                          <option value="Permanent">Permanent</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Percentage Per Student</label>
                      <input type="text" name="per_student"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Salary Amount</label>
                      <input type="text" name="salary"  class="form-control">
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label>Address</label>
                      <textarea name="tadd" class="form-control"></textarea>
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Upload IMG</label>
                      <input type="file" name="timg"  class="form-control file">
                    </div>



                    <div class="card-header col-12" style="margin-top:40px; margin-bottom:40px" >
                    <h4>Educational Information</h4>
                  </div>
                  
                    <div class="row">
                    

                  <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Teacher Degree Certificate</label> -->
                      <select name="t_degree" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Teacher Degree</option>
                          <br>
                          <option value="Intermediate">Intermediate</option>
                          <br>
                          <option value="FA">FA</option>
                          <br>
                          <option value="BA">BA</option>
                          <br>
                          <option value="MSC">MSC</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Degree Name</label>
                      <input type="text" name="degree_n"  class="form-control">
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Degree Status</label> -->
                      <select name="deg_status" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Degree Status</option>
                          <br>
                          <option value="Yes">Yes</option>
                          <br>
                          <option value="No">No</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Board University</label>
                      <input type="text" name="b_university"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Year</label>
                      <input type="text" name="year"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Professional Field</label>
                      <input type="text" name="prof_field"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Experience</label>
                      <input type="text" name="experience"  class="form-control">
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
        <?php
        include('./include/footer.php');
        ?>