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
                    <h4>Query Information</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>University</th>
                            <th>Semester</th>
                            <th>Area</th>
                            <th>Station</th>
                            <th>Reference</th>
                            <th>Course Applied</th>
                            <th>Fee Package</th>
                            <th>Discount Fee Package</th>
                            <th>Gender</th>
                            <th>Contact 1</th>
                            <th>Contact 2</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM query";
                          $run=mysqli_query($conn,$sql);
                          while($fet=mysqli_fetch_array($run)){
                              ?>
                              <tr>
                                <td><?php echo $fet['qname']; ?></td>
                                <td><?php echo $fet['quni']; ?></td>
                                <td><?php echo $fet['qsem']; ?></td>
                                <td><?php echo $fet['qarea']; ?></td>
                                <td><?php echo $fet['qstat']; ?></td>
                                <td><?php echo $fet['qref']; ?></td>
                                <td><?php echo $fet['qcourse']; ?></td>
                                <td><?php echo $fet['qfee']; ?></td>
                                <td><?php echo $fet['qdisc']; ?></td>
                                <td><?php echo $fet['qgen']; ?></td>
                                <td><?php echo $fet['qcon1']; ?></td>
                                <td><?php echo $fet['qcon2']; ?></td>
                                <td><?php echo $fet['qadr']; ?></td>
                                <td><?php echo $fet['qdate']; ?></td>
                                <td><a href="./querydel.php?qid=<?php echo $fet['qid']; ?>" class="btn btn-danger" >Delete</a></td>
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