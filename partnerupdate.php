<?php
include('./include/conn.php');

if(empty($_SESSION)){
    header('location:index.php');
}

$id=$_GET['pid'];
$ssl="SELECT * FROM `partner` WHERE pid='$id'";
$ssrun=mysqli_query($conn,$ssl);
$sqry=mysqli_fetch_array($ssrun);

if(isset($_POST['sub'])){
    $pstatus=mysqli_real_escape_string($conn,$_POST['pstatus']);
    $personid=mysqli_real_escape_string($conn,$_POST['personid']);
    $pname=mysqli_real_escape_string($conn,$_POST['pname']);
    $pemail=mysqli_real_escape_string($conn,$_POST['pemail']);
    $pno=mysqli_real_escape_string($conn,$_POST['pno']);
    $pgen=mysqli_real_escape_string($conn,$_POST['pgen']);
    $commethod=mysqli_real_escape_string($conn,$_POST['commethod']);
    $p_amount=mysqli_real_escape_string($conn,$_POST['p_amount']);
    $p_per=mysqli_real_escape_string($conn,$_POST['p_per']);
    $padd=mysqli_real_escape_string($conn,$_POST['padd']);
    $pimg=$_FILES['pimg']['name'];

    $sql="UPDATE `partner` SET pstatus='$pstatus',personid='$personid',pname='$pname',pemail='$pemail',pno='$pno',pgen='$pgen',commethod='$commethod',p_amount='$p_amount',p_per='$p_per',padd='$padd'";    
    $srun=mysqli_query($conn,$sql);
    move_uploaded_file($_FILES["pimg"]["tmp_name"],"userimg/".$pimg);
    if($srun){
        ?>
 <script> alert('Data Updated') </script>
         <?php
header('Refresh:1,url=viewpartner.php');
    }else{
        ?>
 <script> alert('Data didnot Update') </script>
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
                    <h4>Partner</h4>
                  </div>
                  
                  <div class="col-lg-12" style="margin-bottom:40px ">
              <a href="#" class="btn btn-info" style="float:right">View</a>
            </div> 

                <div class="row">
                    <div class="col">
                      <div class="row">
                          <div class="col-lg-4">
                              <label for="">Status</label>
                              <br>
                              <input type="checkbox" name="pstatus" value="Active">Active
                          </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Person ID</label>
                      <input type="text" name="personid"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Person Name</label>
                      <input type="text" name="pname"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Person Email</label>
                      <input type="text" name="pemail"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Person Phone NO</label>
                      <input type="text" name="pno"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <!-- <label>Gender</label> -->
                      <select name="pgen" id="" class="form-control" style="margin-top:27px">
                          <option value="">Select Gender</option>
                          <br>
                          <option value="Male">Male</option>
                          <br>
                          <option value="Female">Female</option>
                      </select>
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Communication Method</label>
                      <input type="text" name="commethod"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Amount</label>
                      <input type="text" name="p_amount"  class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>Percentage</label>
                      <input type="text" name="p_per"  class="form-control">
                    </div>
                    

                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                      <label>Address</label>
                      <textarea name="padd" class="form-control"></textarea>
                    </div>

                    <div class="form-group col-lg-4 col-md-6 col-sm-6">
                      <label>IMG</label>
                      <input type="file" name="pimg"  class="form-control file">
                    </div>


                    
                    <div class="form-group" style="margin-top:120px"> 
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