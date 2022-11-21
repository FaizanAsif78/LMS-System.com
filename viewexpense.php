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
              <a href="addexpense.php" class="btn btn-success" style="float:right">Back</a>
            </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                       
                          <tr>
                            <th>Action</th>
                            <th>Category Name</th>
                            <th>Application Tax</th>
                            <th>Tax percentage</th>
                            <th>Total Amount</th>
                            <th>Document</th>
                            <th>Experience Note</th>
                            <th>Paid Amount</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM expense";
                          $run=mysqli_query($conn,$sql);
                          while($fet=mysqli_fetch_array($run)){
                              ?>
                              <tr>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary" data-toggle="dropdown" id="dmenu">Action</button>
                                    <div class="dropdown-menu" aria-labelledby="dmenu">
                                        <a onclick="return confirm('Are you sure');" class="btn btn-info btn-block dropdown-item" href="expensedel.php?e_id=<?php echo $fet['e_id']; ?>">Delete</a>
                                        <a class="dropdown-item btn btn-info btn-block" href="expenseupdate.php?e_id=<?php echo $fet['e_id']; ?>">Update</a>
                                    </div>

                                </div>
                            </td>
                            <td><?php echo $fet['c_name']; ?></td>
                            <td><?php echo $fet['tax']; ?></td>
                            <td><?php echo $fet['tper']; ?></td>
                            <td><?php echo $fet['tamount']; ?></td>
                            <td><?php echo $fet['IMG']; ?></td>
                            <td><?php echo $fet['enote']; ?></td>
                            <td><?php echo $fet['pamount']; ?></td>
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