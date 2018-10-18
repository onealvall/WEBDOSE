 <section class="content">
    <div class="container-fluid">
          
        <div class="block-header">
                <h2></h2>
        </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                               Search Student
                            </h2>
                        </div>
                     <div class="body">
                     <div class="alert alert-success" style="display:none;" >
                                 Parent Information Updated Successfull.
                            </div>

                        <div class="table-responsive">
                                <table class="table table-bordered" id="test">
                                    <thead>
                                        <tr class="danger">
                                            <th>#</th>
                                            <th>Student Number:</th>
                                            <th>Name:</th>
                                            <th>Course:</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showdata">
                                  
                                    </tbody>
                                </table>
                         </div> 
                         <div class="text-center">  
                          <?php
	                       echo  $this->pagination->create_links();
	                       ?>
                        </div>

                        </div><!-- card -->
                    </div><!-- col-lg-12 -->
                </div><!-- row clearfix -->


                </div><!-- container-fluid-->
             </div><!--content -->


          

          
            <!-- Large Size Disabled-->
            
            
            <div  id="largeModalShow" class="modal fade"  tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-red">
                            <h4 class="modal-title">
                            </h4>
                        </div>
        
                        <div class="modal-body">
                        <div class="row clearfix">
                                <div class="col-sm-6">
                                   <h4>
                                        <span class="label label-danger">Student Name</span> 
                                        <input type="text" name="Student_Name" value="wew" class="form-control"  disabled />
                                   </h4>
                                </div>
                                
                                <div class="col-sm-6">
                                    <h4> 
                                         <span class="label label-danger">Student Number</span> 
                                         <input type="text" name="Student_Number" class="form-control" placeholder="" disabled />
                                    </h4> 
                                </div>
                        </div>
                        <form id="myFormShow" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="test1" value="0">
                        <h3><span class="label label-danger">Parent Status:</span> Married</h3>
                        <h4 class="card-inside-title">Father Information..</h4>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                   <h4>
                                        <span class="label label-danger">Father Name</span> 
                                        <input type="text" name="Father_Nameee" value="wew" class="form-control"  disabled />
                                   </h4>
                                </div>
                                
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Occupation</span> 
                                         <input type="text" name="Father_Occupation" class="form-control" placeholder="" disabled />
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Contact Number</span> 
                                         <input type="text" name="Father_no" class="form-control" placeholder="" disabled />
                                    </h4> 
                                </div>
                            </div>
                            <div class="row clearfix">
                               <div class="col-sm-5">
                                    <h4> 
                                         <span class="label label-danger">Address</span> 
                                         <input type="text"  name="Father_Address" class="form-control" placeholder="" disabled/>
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Email Address</span> 
                                         <input type="text" name="Father_EmailAddress"  class="form-control" placeholder="" disabled />
                                    </h4> 
                                </div>

                                
                            </div>
                        
                            <h4 class="card-inside-title">Mother Information..</h4>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                   <h4>
                                        <span class="label label-danger">Mother Name</span> 
                                        <input type="text" name="Mother_Name" class="form-control" placeholder="" disabled />
                                   </h4>
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Occupation</span> 
                                         <input type="text"  name="Mother_Occupation" class="form-control" placeholder="Chef"  disabled/>
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Contact Number</span> 
                                         <input type="text" name="Mother_No" class="form-control" placeholder="090909093"  disabled/>
                                    </h4> 
                                </div>
                            </div>


                            <div class="row clearfix">
                               <div class="col-sm-5">
                                    <h4> 
                                         <span class="label label-danger">Address</span> 
                                         <input type="text" name="Mother_Address" class="form-control" placeholder="Blk.10 Lot 28 Addas Salinas 1 Bacoor, Cavite" disabled />
                                    </h4> 
                                </div>
                             
                                <div class="col-sm-4">
                                    <h4> 
                                       <span class="label label-danger"> Email Address</span> 
                                         <input type="text" name="Mother_EmailAddress" class="form-control" placeholder="Rebecca@yahoo.com" disabled />
                                    </h4>
                                  </div>
                                
                            </div>
                        </div>

                        </form>
                    </div>
                        <div class="modal-footer">
                           
                        </div>
                      
                    </div>
                </div>
            </div>


    <!-- Large Size -->
            
            
    <div  id="largeModalEdit" class="modal fade"  tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-red">
                            <h4 class="modal-title">
                            </h4>
                        </div>
        
                        <div class="modal-body">
                        <div class="row clearfix">
                                <div class="col-sm-6">
                                   <h4>
                                        <span class="label label-danger">Student Name</span> 
                                        <input type="text" name="Student_Name" value="wew" class="form-control"  disabled />
                                   </h4>
                                </div>
                                
                                <div class="col-sm-6">
                                    <h4> 
                                         <span class="label label-danger">Student Number</span> 
                                         <input type="text" name="Student_Number" class="form-control" placeholder="" disabled  />
                                    </h4> 
                                </div>
                        </div>
                        <form id="myFormEdit" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                        <h3><span class="label label-danger">Parent Status:</span> Married</h3>
                        <h4 class="card-inside-title">Father Information..</h4>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                   <h4>
                                        <span class="label label-danger">Father Name</span> 
                                        <input type="text" name="Father_Name" class="form-control"  />
                                   </h4>
                                </div>
                                
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Occupation</span> 
                                         <input type="text" name="Father_Occupation" class="form-control" />
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Contact Number</span> 
                                         <input type="text" name="Father_no" class="form-control" />
                                    </h4> 
                                </div>
                            </div>
                            <div class="row clearfix">
                               <div class="col-sm-5">
                                    <h4> 
                                         <span class="label label-danger">Address</span> 
                                         <input type="text"  name="Father_Address" class="form-control" placeholder="" />
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Email Address</span> 
                                         <input type="text" name="Father_EmailAddress"  class="form-control" placeholder=""  />
                                    </h4> 
                                </div>

                                  
                            </div>
                        
                            <h4 class="card-inside-title">Mother Information..</h4>
                            <div class="row clearfix">
                                <div class="col-sm-4">
                                   <h4>
                                        <span class="label label-danger">Mother Name</span> 
                                        <input type="text" name="Mother_Name" class="form-control" />
                                   </h4>
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Occupation</span> 
                                         <input type="text"  name="Mother_Occupation" class="form-control"  />
                                    </h4> 
                                </div>
                                <div class="col-sm-4">
                                    <h4> 
                                         <span class="label label-danger">Contact Number</span> 
                                         <input type="text" name="Mother_No" class="form-control"  />
                                    </h4> 
                                </div>
                            </div>


                            <div class="row clearfix">
                               <div class="col-sm-5">
                                    <h4> 
                                         <span class="label label-danger">Address</span> 
                                         <input type="text" name="Mother_Address" class="form-control"  />
                                    </h4> 
                                </div>
                             
                                <div class="col-sm-4">
                                    <h4> 
                                       <span class="label label-danger"> Email Address</span> 
                                         <input type="text" name="Mother_EmailAddress" class="form-control"   />
                                    </h4>
                                  </div>
                                  </form>
                                  
                            </div>
                        </div>

                         <div class="modal-footer">
                            <button type="button" class="btn btn-info"  data-dismiss="modal">CLOSE</button>
                            <button type="button"  id="btnSave" class="btn btn-info" onclick="return confirm('Do you want to update this record?');">SAVE</button>
                        </div>
                    
                    </div> 
                 </div>
                </div>
            </div>
           