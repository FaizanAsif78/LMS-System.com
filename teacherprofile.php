<?php  
include('./include/conn.php');

$sql="SELECT * FROM teacher_lms";
$run=mysqli_query($conn,$sql);
$fet=mysqli_fetch_array($run);

include('./include/header.php');
?>




<div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row">
              <div class="col-12 ">
              <!-- col-md-12 col-lg-12 -->
               


                <div class="card col-3 text-center">
                    <img src="<?php echo "./userimg/".$fet['timg']; ?>" alt="Profile Image" style="border-radius:100%; border:grey 3px solid; margin:auto; width:100px; height:80px" class="card-img-top mt-5">
                    <div class="card-body">
                    <h5><?php echo $fet['t_name']; ?></h5>
                    <br><br>
                    <h6>Email :</h6>
                    <p><?php echo $fet['temail']; ?></p>
                   
                    <h6>Phone No :</h6>
                    <p><?php echo $fet['phone']; ?></p>
                </div>

                
                </div>                 
              </div>
              
            </div>
          </div>
        </section>
        <section class="section" style="margin-left:250px;margin-top:-412px">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card col-12">


                        <div class="row text-left">
                        <div class="card-header">
                            <h3>Additional Details</h3>
                        </div>

                            <!-- back button start -->
                         <div class="row">
                        <div class="col-12">
                        <button class="btn btn-info" href="viewteacher.php" style="margin-left:650px">Back</button>
                        </div>
                        </div>
                        <!-- back button end -->
                  
                    </div>
                   

                    <div class="row text-left">
                        <div class="card-body">
                        <h5>Gender</h5>
                        <?php echo $fet['tgen']; ?>
                        <br><br>
                        <h5>Field</h5>
                        <?php echo $fet['prof_field']; ?>
                        <br><br>
                        <h5>Experience</h5>
                        <?php echo $fet['experience']; ?>
                        <br><br>
                        <h5>University</h5>
                        <?php echo $fet['b_university']; ?>
                        </div> 



                        <div class="card-body">
                        <h5>Status</h5>
                        <?php echo $fet['t_status']; ?>
                        <br><br>
                        <h5>Salary</h5>
                        <?php echo $fet['salary']; ?>
                        <br><br>
                        <h5>Percentage per Student</h5>
                        <?php echo $fet['per_student']; ?>
                        </div>
                          

                    </div>
                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>





        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>







<?php
include('./include/footer.php');
?>