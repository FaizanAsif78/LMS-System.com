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
                    <h4>Batch</h4>
                  </div>
                  <div class="col-lg-12">
              <a href="addbatch.php" class="btn btn-success" style="float:right">Back</a>
        
              
            </div>
                  <div class="card-body" id="print">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                        <thead>
                    
                          <tr>
                            <th>Action</th>
                            <th>Course Name</th>
                            <th>Batch Name</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $sql="SELECT * FROM batch b INNER JOIN course c ON b.cname=c.cid";
                          $run=mysqli_query($conn,$sql);
                          while($fet3=mysqli_fetch_array($run)){
                            ?>
                            <tr>
                              <td>
                              <div class="drop-down">
                                <button class="btn btn-primary" id="dmenu" data-toggle="dropdown">Action</button>

                                <div class="dropdown-menu" aria-labelledby="dmenu">
                                  <a  onclick="return confirm('Are you Sure')" class="dropdown-item btn btn-info btn-block" href="batchdel.php?bid=<?php echo $fet3['bid']; ?>">Delete</a>

                                  <a class="dropdown-item btn btn-info btn-block" href="batchupdate.php?bid=<?php echo $fet3['bid']; ?>">Update</a>

                                </div>
                                </td>
                              </div>
                              <td><?php echo $fet3['cname']; ?></td>
                              <td><?php echo $fet3['b_name']; ?></td>
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
        <button onclick="show('print')" class="btn btn-primary" style="float:right">Print</button>

        <script>
          function show(pr){
            var restorepage=document.body.innerHTML;
            var print=document.getElementbyID(pr).innerHTML;
            document.body.innerHTML=print;
            window.print();
            document.body.innerHTML=restorepage;
          }
        </script>
        <?php
        include('./include/footer.php');
        ?>