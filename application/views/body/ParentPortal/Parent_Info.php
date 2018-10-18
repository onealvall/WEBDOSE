 <section class="content">
        <div class="container-fluid">
          
        <div class="block-header">
                <h1</h1>
            </div>

            <!-- Basic Example -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                            Parent Information
                            </h2>
                        </div>
                        <div class="body">
                     
                        <form method="get" action="<?php echo site_url(); ?>/Admin/Parent_Info">
                            <div class="row clearfix">
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="sn" placeholder="Enter Student Student">
                                  </div>
                                 <div class="col-md-4">
                                  <button class="btn btn-info inline" name="submit" type="submit">Search</button>
                                 </div>
                             </div>
                         </form>
                         <?php  foreach($parent_info as $row){ ?>
                       

                     <div class="row clearfix">
                            <div class="col-sm-6">
                               <span class="modal-sn">Student Number:<span> <span class="modal-st"> <?php echo $row['Student_Number']; ?><span>
                            </div>
                            <div class="col-sm-6">
                                 <span class="modal-sn"> Student Name:<span>  <span class="modal-st"><?php echo $row['Last_Name'].' , '.$row['First_Name'].' '.$row['Middle_Name'];  ?><span
                            </div>
                    </div> 


                  <form method="get" action="<?php echo site_url(); ?>/Admin/Parent_updateinfo">     
                  <input type="hidden"  name="sn" value="<?php echo $row['Student_Number']; ?>">
               <div class="row clearfix">
                                <div class="col-sm-6">
                                <h3>
                                <span class="label label-danger">Parent Status:</span>
                                    <select class="form-control show-tick">
                                        <option value=""><?php echo $row['Parents_Status']; ?></option>
                                        <?php  foreach($parentstatus as $row1){ ?>
                                          <option value="10">10</option>
                                        <?php } ?>
                                    </select>
                                 </h3> 
                                </div>
                            </div>
                       

                  
                        <h4 class="card-inside-title">Father Information..</h4>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                   <h4>
                                        <span class="label label-danger">Father Name</span> 
                                        <input type="text" class="form-control" name="father_name"  value="<?php echo $row['Father_Name']; ?>" />
                                   </h4>
                                </div>
                                
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Occupation</span> 
                                         <input type="text" class="form-control" name="father_occ" value="<?php echo $row['Father_Occupation']; ?>"  />
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Contact Number</span> 
                                         <input type="text" class="form-control"  name="father_no" value="<?php echo $row['Father_Contact']; ?>" />
                                    </h4> 
                                </div>
                            </div>
                            <div class="row clearfix">
                               <div class="col-sm-5">
                                    <h4> 
                                         <span class="label label-danger">Address</span> 
                                         <input type="text" class="form-control" name="father_address" value="<?php echo $row['Father_Address']; ?>" />
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Email Address</span> 
                                         <input type="text" class="form-control" name="father_email" value="<?php echo $row['Father_Email']; ?>"  />
                                    </h4> 
                                </div>
                            </div>
                        
                            <h4 class="card-inside-title">Mother Information..</h4>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                   <h4>
                                        <span class="label label-danger">Mother Name</span> 
                                        <input type="text" class="form-control" name="mother_name"  value="<?php echo $row['Mother_Name']; ?>" />
                                   </h4>
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Occupation</span> 
                                         <input type="text" class="form-control" name="mother_occ" value="<?php echo $row['Mother_Occupation']; ?>" />
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Contact Number</span> 
                                         <input type="text" class="form-control" name="mother_no" value="<?php echo $row['Mother_Contact']; ?>" />
                                    </h4> 
                                </div>
                            </div>


                            <div class="row clearfix">
                               <div class="col-sm-5">
                                    <h4> 
                                         <span class="label label-danger">Address</span> 
                                         <input type="text" class="form-control" name="mother_address" value="<?php echo $row['Mother_Address']; ?>"/>
                                    </h4> 
                                </div>
                             
                                <div class="col-sm-4">
                                    <h4> 
                                       <span class="label label-danger"> Email Address</span> 
                                         <input type="text" class="form-control" name="mother_email" value="<?php echo $row['Mother_Email']; ?>" />
                                    </h4>
                                  </div>
                               </div>
                             
                           
                        </div>
                    <?php }  ?>

                   </form>


                       

           <div class="row clearfix js-sweetalert">
                                    <button class="btn btn-info inline" data-type="confirm"  name="submit" type="submit">Update</button>
                                </div>
                            </div> 


  