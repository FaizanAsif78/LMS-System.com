<?php
include('./include/conn.php');


if(empty($_SESSION['ademail'])){     

  header('location:index.php');
}




include('./include/header.php');
?>





<!-- Main Content -->
<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Student</h4>
                  </div>
                  <div class="col-lg-12">
              <a href="addstudent.php" class="btn btn-success" style="float:right">Back</a>
            </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                       
                          <tr>
                            <th>Action</th>
                            <th>Session</th>
                            <th>Teacher Name</th>
                            <th>Reference</th>
                            <th>Start Date</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Status</th>
                            <th>Address</th>
                            <th>IMG</th>
                            <th>Teacher Degree</th>
                            <th>Degree Name</th>
                            <th>Degree Status</th>
                            <th>Board University</th>
                            <th>Year</th>
                            <th>Total Fee</th>
                            <th>Pay Method</th>
                            <th>Paid Fee</th>
                            <th>Remaining Fee</th>
                            <th>Payment Term</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM student_lms";
                          $run=mysqli_query($conn,$sql);
                          while($fet=mysqli_fetch_array($run)){
                              ?>
                              <tr>
                                <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary" data-toggle="dropdown" id="dmenu">Action</button>

                                    <div class="dropdown-menu" aria-labelledby="dmenu">
                                        <a onclick="return confirm('Are you Sure')" class="dropdown-item btn btn-info btn-block" href="studentdel.php?s_id=<?php echo $fet['s_id']; ?>">Delete</a>

                                        <a class="dropdown-item btn btn-info btn-block" href="studentupdate.php?s_id=<?php echo $fet['s_id']; ?>">Update</a>

                                        <a class="btn btn-info btn-block dropdown-item" href="studentprofile.php">View Profile</a>
                                    </div>
                                </div>
                                </td>
                                <td><?php echo $fet['s_ses']; ?></td>
                                <td><?php echo $fet['t_name']; ?></td>
                                <td><?php echo $fet['ref']; ?></td>
                                <td><?php echo $fet['s_date']; ?></td>
                                <td><?php echo $fet['name']; ?></td>
                                <td><?php echo $fet['fname']; ?></td>
                                <td><?php echo $fet['email']; ?></td>
                                <td><?php echo $fet['phno']; ?></td>
                                <td><?php echo $fet['sgen']; ?></td>
                                <td><?php echo $fet['dob']; ?></td>
                                <td><?php echo $fet['s_status']; ?></td>
                                <td><?php echo $fet['s_add']; ?></td>
                                <td><?php echo $fet['img']; ?></td>
                                <td><?php echo $fet['t_deg']; ?></td>
                                <td><?php echo $fet['d_name']; ?></td>
                                <td><?php echo $fet['deg_status']; ?></td>
                                <td><?php echo $fet['uni']; ?></td>
                                <td><?php echo $fet['year']; ?></td>
                                <td><?php echo $fet['t_fee']; ?></td>
                                <td><?php echo $fet['pay_method']; ?></td>
                                <td><?php echo $fet['paid_fee']; ?></td>
                                <td><?php echo $fet['rem_fee']; ?></td>
                                <td><?php echo $fet['pay_term']; ?></td>
    
                                
                              </tr>
                              <?php
                          }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <?php
        include('./include/footer.php');
        ?>