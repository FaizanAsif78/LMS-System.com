<?php

include('./include/conn.php');


if(empty($_SESSION['ademail'])){

  header('location:index.php');
}
if(isset($_POST['sub'])){
    $c_name=mysqli_real_escape_String($conn,$_POST['c_name']);
    $edate=mysqli_real_escape_String($conn,$_POST['edate']);
    $taxdrop=mysqli_real_escape_String($conn,$_POST['taxdrop']);
    $tper=mysqli_real_escape_String($conn,$_POST['tper']);
    $tamount=mysqli_real_escape_String($conn,$_POST['tamount']);
    $img=$_FILES['IMG']['name'];
    $enote=mysqli_real_escape_String($conn,$_POST['enote']);
    $pamount=mysqli_real_escape_String($conn,$_POST['pamount']);
    $pmethod=mysqli_real_escape_String($conn,$_POST['pmethod']);
    $pnote=mysqli_real_escape_String($conn,$_POST['pnote']);

    $sqlq="INSERT INTO expense (c_name,tax,tper,tamount,IMG,enote,pamount,pmethod,pnote) VALUES ('$c_name','$taxdrop','$tper','$tamount','$img','$enote','$pamount','$pmethod','$pnote')";
    $qrun=mysqli_query($conn,$sqlq);
    move_uploaded_file($_FILES['IMG']['tmp_name'],"img/".$img);
    if($qrun){
      echo "<script> alert('Data Inserted') </script>";
    }else{
      echo "<script> alert('Data Didnot Insert') </script>";
    }
}




include('./include/header.php');
?>


<div class="main-content">
        <section class="section">
          <div class="section-body">
              
            <form method="POST" enctype='multipart/form-data'>
            <div class="card-header mt-5">
                    <h4>Add Expense   </h4>
                  </div>
                  <div class="row">
                    <div class="col-12" >
                      <a href="viewexpense.php" class="btn btn-info" style="float:right; margin-right:50px; margin-top:10px; margin-bottom:10px;">View</a>
                    </div>
                  </div>
                <div class="row">
                    <div class="col">
                      <div class="row">

                      <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Category Name</label>
                      <select name="c_name" class="form-control">
                        <option value="">Select Category</option>
                        <?php 
                        $squry="SELECT * FROM category";
                        $sqrun=mysqli_query($conn,$squry);
                        while($sfet=mysqli_fetch_array($sqrun)){
                          ?>
                            <option value="<?php echo $sfet['c_id']; ?>"> <?php echo $sfet['cname']; ?> </option>
                          <?php
                        }
                        ?>
                      </select>
                    </div>
                          

                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Date</label>
                      <input type="date" name="edate" placeholder="Select Date" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Select Tax drop-down</label>
                      
                      <select name="taxdrop" id="" class="form-control">
                          <option value="">Select Tax drop-down</option>
                          <option value="Property Tax">Property Tax</option>
                          <option value="Direct Tax">Direct Tax</option>
                          <option value="Income Tax">Income Tax</option>
                      </select>
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Tax Percentage</label>
                      <input type="text" oninput="num2(this)" name="tper" placeholder="Enter Tax percentage" class="form-control">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Total amount</label>
                      <input type="text" oninput="num(this)" name="tamount" placeholder="Enter Total Amount " class="form-control">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Insert Image</label>
                      <input type="file" name="IMG" placeholder="Insert Image" class="form-control file">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Expense Note</label>
                      <input type="text" oninput="alp(this)" name="enote" placeholder="Enter Expense Note" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Paid Amount</label>
                      <input type="text" name="pamount" oninput="num(this)" placeholder="Enter Paid Amount" class="form-control">
                    </div>
                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Permanent Method</label>
                      <!-- <input type="text" name="pmethod" oninput="alp(this)" placeholder="Enter Permanent Method" class="form-control"> -->

                        <select id="access" name="pmethod" oninput="alp(this)" onclick="show()" class="form-control">
                          <option value="">Select Permanent Method</option>
                          <option value="fixed11">Fixed</option>
                          <option value="percent11">Percentage</option>
                        </select>

                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-6" style="display:none;" id="custom1">
                      <label>Fixed</label>
                      <input type="text" name="fixed"  placeholder="Enter Fixed" class="form-control">
                    </div>

                    <div class="form-group col-lg-4 col-md-4 col-sm-6" style="display:none;" id="custom2">
                      <label>Percentage</label>
                      <input type="text" name="percent"  placeholder="Enter Percentage" class="form-control">
                    </div>



                    <div class="form-group col-lg-4 col-md-4 col-sm-6">
                      <label>Payment Note</label>
                      <input type="text" name="pnote" oninput="alp(this)" placeholder="Enter Payment Note" class="form-control">
                    </div>
                    

                    <div class="form-group "> 
                      <input type="submit" name="sub" class="btn btn-success">
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
        <script>
         
          

           function show(){ 
            var main=document.getElementbyID('access');
            var show1=document.getElementbyID('custom1');
            var show2=document.getElementbyID('custom2');

            if(main.value=='fixed11'){
              show1.style.display=block;
            }else{
              show1.style.display=none;
            }

            if(main.value=='perecent11'){
              show2.style.display=block;
            }else{
              show2.style.display=none;
            }
          }
        </script>