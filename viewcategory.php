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
                    <h4>Category</h4>
                  </div>
                  <div class="col-lg-12">
              <a href="addcategory.php" class="btn btn-success" style="float:right">Back</a>
            </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                       
                          <tr>
                            <th>Action</th>
                            <th>Category Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM category";
                          $run=mysqli_query($conn,$sql);
                          while($fet1=mysqli_fetch_array($run)){
                            ?>
                            <tr>
                                <td>
                                <div class="drop-down">
                                    <button class="btn btn-primary" data-toggle="dropdown" id="dmenu">Action</button>

                                    <div class="dropdown-menu" aria-lablledby="dmenu">

                                    <a  onclick="return confirm('Are you Sure')" class="dropdown-item btn btn-info btn-block" href="categorydel.php?c_id=<?php echo $fet1['c_id']; ?>">Delete</a>

                                    <a class="dropdown-item btn btn-info btn-block" href="categoryupdate.php?c_id=<?php echo $fet1['c_id']; ?>">Update</a>
                                    </div>
                                </div>
                                </td>
                                <td><?php echo $fet1['cname']; ?></td>
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