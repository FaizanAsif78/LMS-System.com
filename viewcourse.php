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
              <a href="addcourse.php" class="btn btn-success" style="float:right">Back</a>
            </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                       
                          <tr>
                            <th>Action</th>
                            <th>Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM course";
                          $run=mysqli_query($conn,$sql);
                          while($fet=mysqli_fetch_array($run)){
                              ?>
                              <tr>
                                <td>
                                <div class="dropdown">
                                  <button class="btn btn-primary" data-toggle="dropdown" id="dmenu">Action</button>

                                  <div class="dropdown-menu" aria-labelledby="dmenu">
                                    <a onclick="return confirm('Are you Sure')" class="dropdown-item btn btn-info btn-block" href="coursedel.php?cid=<?php echo $fet['cid']; ?>">Delete</a>

                                    <a class="dropdown-item btn btn-success btn-block" href="courseupdate.php?cid=<?php echo $fet['cid']; ?>">Update</a>
                                  </div>
                                </div>
                                </td>
                                <td><?php echo $fet['acourse']; ?></td>
    
                                
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