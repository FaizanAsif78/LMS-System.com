<?php
include('./include/conn.php');
if(empty($_SESSION)){
    header('location:index.php');
}

if(isset($_POST['sub1'])){
    $cname=mysqli_real_escape_string($conn,$_POST['cname']);
    $bname=mysqli_real_escape_string($conn,$_POST['bname']);

    $sel="SELECT * FROM batch";
    $srun=mysqli_query($conn,$sel);
    $sfet=mysqli_fetch_array($srun);
    if($sfet['b_name']==$bname){
        echo "<script> alert('Data already existed') </script>";
    }else{
        $sql="INSERT INTO batch (cname,b_name) VALUES ('$cname','$bname')";
        $run1=mysqli_query($conn,$sql);
        if($run1){
            echo "<script> alert('Data Inserted') </script>";
        }else{
            echo "<script> alert('Data Didnot Insert') </script>";
        }
    }
}



include('./include/header.php');
?>




<div class="main-content">
        <section class="section">
          <div class="section-body">

            <form method="POST">
            <div class="card-header">
                    <h4>Batch</h4>
                  </div>
                  
                  <div class="col-lg-12">
              <a href="viewbatch.php" class="btn btn-info" style="float:right">View</a>
            </div> 

                <div class="row">
                    <div class="col">
                      <div class="row">

                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Course Name</label>
                      <select name="cname" class="form-control" >
                          <option value="">Select Course</option>
                          <?php
                          $select="SELECT * FROM course";
                          $selrun=mysqli_query($conn,$select);
                          while($fetch=mysqli_fetch_array($selrun)){
                              ?>
                            <option value="<?php echo $fetch['cid']; ?>"><?php echo $fetch['acourse']; ?></option>
                              <?php
                          }
                          ?>
                      </select>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-6">
                      <label>Batch Name</label>
                      <input type="text" oninput="num(this)" name="bname" placeholder="Enter Batch Name" class="form-control">
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