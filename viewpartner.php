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
                    <h4>Expenses</h4>
                  </div>
                  <div class="col-lg-12">
              <a href="addpartner.php" class="btn btn-success" style="float:right">Back</a>
            </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                       
                          <tr>
                            <th>Action</th>
                            <th>Status</th>
                            <th>Person ID</th>
                            <th>Person Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            <th>Gender</th>
                            <th>Communication Method</th>
                            <th>Amount</th>
                            <th>Percentage</th>
                            <th>Address</th>
                            <th>Image</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM `partner`";
                          $run=mysqli_query($conn,$sql);
                          while($fet=mysqli_fetch_array($run)){
                              ?>
                              <tr>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary" data-toggle="dropdown" id="dmenu" >Action</button>

                                    <div class="dropdown-menu" aria-labelledby="dmenu">
                                        <a onclick="return confirm('Are you Sure');" class="dropdown-item btn btn-info btn-block" href="partnerdel.php?pid=<?php echo $fet['pid']; ?>">Delete</a>

                                        <a class="btn btn-info btn-block dropdown-item" href="partnerupdate.php?pid=<?php echo $fet['pid']; ?>">Update</a>

                                        <a class="btn btn-info btn-block dropdown-item" href="partnerprofile.php">View Profile</a>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $fet['pstatus']; ?></td>
                            <td><?php echo $fet['personid']; ?></td>
                            <td><?php echo $fet['pname']; ?></td>
                            <td><?php echo $fet['pemail']; ?></td>
                            <td><?php echo $fet['pno']; ?></td>
                            <td><?php echo $fet['pgen']; ?></td>
                            <td><?php echo $fet['commethod']; ?></td>
                            <td><?php echo $fet['p_amount']; ?></td>
                            <td><?php echo $fet['p_per']; ?></td>
                            <td><?php echo $fet['padd']; ?></td>
                            <td><?php echo $fet['pimg']; ?></td>
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