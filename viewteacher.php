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
                    <h4>Courses</h4>
                  </div>
                  <div class="col-lg-12">
              <a href="addteacher.php" class="btn btn-success" style="float:right">Back</a>
            </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                       
                          <tr>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Teacher Name</th>
                            <th>Father Name</th>
                            <th>Teacher Email</th>
                            <th>Password</th>
                            <th>Phone No</th>
                            <th>Gender</th>
                            <th>Teacher Post</th>
                            <th>Percentage Per Student</th>
                            <th>Salary Amount</th>
                            <th>Address</th>
                            <th>IMG</th>
                            <th>Teacher Degree</th>
                            <th>Degree Name</th>
                            <th>Degree Status</th>
                            <th>Board University</th>
                            <th>Year</th>
                            <th>Professional Field</th>
                            <th>Experience</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM teacher_lms";
                          $run=mysqli_query($conn,$sql);
                          while($fet=mysqli_fetch_array($run)){
                              ?>
                              <tr>
                                <td>
                                <div class="dropdown">
                                  <button class="btn btn-primary" data-toggle="dropdown" id="dmenu">Action</button>

                                  <div class="dropdown-menu" aria-labelledby="dmenu">
                                    <a onclick="return confirm('Are you Sure')" class="dropdown-item btn btn-info btn-block" href="teacherdel.php?t_id=<?php echo $fet['t_id']; ?>">Delete</a>

                                    <a class="dropdown-item btn btn-success btn-block" href="teacherupdate.php?t_id=<?php echo $fet['t_id']; ?>">Update</a>

                                    <a class="btn btn-info btn-block dropdown-item" href="teacherprofile.php">View Profile</a>
                                  </div>
                                </div>
                                </td>
                                <td><?php echo $fet['t_status']; ?></td>
                                <td><?php echo $fet['t_name']; ?></td>
                                <td><?php echo $fet['f_name']; ?></td>
                                <td><?php echo $fet['temail']; ?></td>
                                <td><?php echo $fet['tpass']; ?></td>
                                <td><?php echo $fet['phone']; ?></td>
                                <td><?php echo $fet['tgen']; ?></td>
                                <td><?php echo $fet['tpost']; ?></td>
                                <td><?php echo $fet['per_student']; ?></td>
                                <td><?php echo $fet['salary']; ?></td>
                                <td><?php echo $fet['tadd']; ?></td>
                                <td><?php echo $fet['timg']; ?></td>
                                <td><?php echo $fet['t_degree']; ?></td>
                                <td><?php echo $fet['degree_n']; ?></td>
                                <td><?php echo $fet['deg_status']; ?></td>
                                <td><?php echo $fet['b_university']; ?></td>
                                <td><?php echo $fet['year']; ?></td>
                                <td><?php echo $fet['prof_field']; ?></td>
                                <td><?php echo $fet['experience']; ?></td>
    
                                
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