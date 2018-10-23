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
                             Registrar Report Module
                            </h2>
                        </div>
                     <div class="body">
                   
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                             <label class="text-red" for="HED">HIGHER EDUCATION </label>
                        
                            </div>
                           </div>

                     <div class="col-md-6">
                     <form method="post" action="<?php echo base_url(); ?>index.php/Admin/test">
                <button class="btn btn-lg btn-danger pull-right" type="submit" name="export" value="Export" ><i class="material-icons">print</i> Export</button>
                 </form>   

                       </div>
                       </div>
                       </div>
                 <form action="<?php echo base_url(); ?>index.php/Admin/reportenrollstudents" method="post">
                 <div class="row">  
                        <div class="col-md-6">
                           <div class="form-group">
                                       <select   class="form-control show-tick" data-live-search="true"  id="ES" class="danger" name="School_year" required>
                                           <?php foreach($this->data['Get_YEAR']->result_array() as $row)  {?>
                                           <option><?php echo $row['schoolyear']; ?></option>
                                           <?php }?>
                                      </select>
                                     <br>
                            
                                    <select class="form-control show-tick" data-live-search="true"   id="ES" name="Sem" class="danger" required>
                                            <?php foreach($this->data['Get_SEM']->result_array() as $row)  {?> 
                                            <option><?php echo $row['Semester']; ?></option>  
                                            <?php }?>
                                         </select>                                       
                                       <br>
                                        
                                <select class="form-control show-tick" data-live-search="true" id="ES" class="danger" name="Gender">
                                            <option  disabled selected>Select Gender</option> 
                                            <?php foreach($this->data['Get_Gender']->result_array() as $row)  {?>
                                            <option><?php echo $row['Gender']; ?></option>
                                            <?php }?>
                                    </select>
                                          <br>
                                     
                                    <select   class="form-control show-tick" data-live-search="true" id="ES" class="danger" name="National">
                                          <option  disabled selected>Select Nationality</option>
                                       
                                            <?php foreach($this->data['Get_Nationality']->result_array() as $row)  {?>
                                             <option><?php echo $row['Nationality']; ?></option>
                                            <?php }?>
                                    </select>
                                            <br>

                        
                                    <select  class="form-control show-tick" data-live-search="true" name="province">
                                          <option  disabled selected>Select Province</option>
                                            <?php foreach($this->data['GetSProvince']->result_array() as $row)  {?>
                                             <option value='<?php echo $row['provCode']; ?>'><?php echo $row['provDesc']; ?></option>
                                            <?php }?>
                                    </select>
                                        <br>
                                        <select  class="form-control show-tick" data-live-search="true"  name="municipality">
                                            <option  disabled selected>Select Municipality</option>
                                         
                                             <option></option>
                                         
                                         </select> 
                                         <br>
                                   
                                    <select class="form-control show-tick" data-live-search="true" name="barangay">
                                          <option  disabled selected>Select Barangay</option>
                                            <?php foreach($this->data['GetSBarangay']->result_array() as $row)  {?>
                                             <option><?php echo $row['']; ?></option>
                                            <?php }?>
                                    </select>


                        

                                 
                            </div>
                     </div>

                      <div class="col-md-6">
                           <div class="form-group">
                            
                                    <select style="width: 100%;" name="Program" id="ES" class="form-control show-tick" data-live-search="true" >
                                        <option  disabled selected>Select Program</option>
                                        <?php foreach($this->data['Get_Couse']->result_array() as $row)  {?>
                                        <option><?php echo $row['Course']; ?></option>
                                        <?php }?>
                                    </select>
                                 <br>
                                  <select id="ES" class="form-control show-tick" data-live-search="true"  name="mjr">
                                      <option  disabled selected>Select Program Major</option>
                                       <?php foreach( $this->data['Get_Major']->result_array() as $row)  {?>
                                       <option value="<?php echo $row['ID']; ?>"><?php echo $row['Program_Major']; ?></option>
                                       <?php }?>
                                   </select>
                               <br>
                                    <select  id="ES" class="form-control show-tick" data-live-search="true" name="Section">
                                       <option  disabled selected>Select Section</option>
                                        <?php foreach($this->data['GetSection_Names']->result_array() as $row)  {?>
                                        <option><?php echo $row['Section_Name']; ?></option>
                                        <?php }?>
                                    </select>
                                   
                                    <br>
                                     <select  id="ES" class="form-control show-tick" data-live-search="true" name="Yearlevel">
                                         <option  disabled selected>Select Year Level</option>
                                         <?php foreach($this->data['Get_YearLevels']->result_array() as $row)  {?>
                                        <option><?php echo $row['Year_Level']; ?></option>
                          <?php }?>
                                    </select>               

                            <br>
                                       <select  id="ES" class="form-control show-tick" data-live-search="true"  name="highschool">
                                             <option  disabled selected>Select Highschool</option>
                                              <?php foreach($this->data['GetHS']->result_array()  as $row)  {?>
                                              <option><?php echo $row['Secondary_School_Name']; ?></option>
                                               <?php }?>
                                         </select>           
                                             
                            </div>
                            </div>   
                    </div>
                        
                           
            <div class="row">                    
                <div class="col-md-6">
                     <div class="text-center">
                            <button type="submit" name="search_button" class="btn btn-lg btn-danger"><i class="material-icons">search</i> Search </button>
                       </div> 
                   </div> 
           
                 <div class="col-md-6">
                        <button class="btn btn-primary btn-lg btn-block waves-effect" type="button">Male <span class="badge">0</span></button>
                        <button class="btn bg-pink btn-lg btn-block waves-effect" type="button">Female <span class="badge">0</span></button>       
                   </div> 
             </div>
                  
                   </form>
                 

                        <div class="table panel panel-danger" style="overflow-x:auto; overflow-y: auto; height: 500px;">
                                <table class="table table-bordered" style="width: 2500px;">
                            
                                    <thead>
                                        <tr class="danger">
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Student Number</th>
                                            <th>Course</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Applied Status</th>
                                            <th>Year</th>
                                            <th>Contact Number</th>
                                            <th>High School</th>
                                            <th>Curiculum</th>
                                            <th>Birthday</th>
                                            <th>Nationality</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                     $count = 1;
                                     foreach($this->$data['GetStudent']->result() as $row) 
                                      {?>
                                       <tr>
                                          <td><?php echo $count;  ?></td>
                                          <td><?php echo $row->Last_Name;  ?>,&nbsp;&nbsp; <?php echo $row->First_Name; ?> &nbsp;&nbsp;<?php echo $row->Middle_Name; ?></td>
                                          <td><?php echo $row->Student_Number;  ?></td>
                                          <td><?php echo $row->Course;  ?></td>
                                          <td><?php echo $row->Gender;  ?></td>
                                          <td><?php echo $row->Address_No; ?> <?php echo $row->Address_Street; ?>  <?php echo $row->Address_Barangay; ?> <?php echo $row->Address_City; ?></td>
                                          <td><?php echo $row->Applied_Status;  ?></td>
                                          <td><?php echo $row->YearLevel;  ?></td>
                                          <td><?php echo $row->CP_No;  ?></td>
                                          <td><?php echo $row->Secondary_School_Name;  ?></td>
                                          <td><?php echo $row->Course; ?>:<?php echo $row->AdmittedSY; ?>:<?php echo $row->Program_Majors; ?></td>
                                          <td><?php echo $row->Birth_Date;  ?></td>
                                          <td><?php echo $row->Nationality;  ?></td>
                                       </tr>
                                 

                                     <?php  $count = $count + 1; }?>
                                    </tbody>
                                </table>

                             
                               </div>   

                            <div class="text-center" style="display: none;">  
                          <?php
	                       echo  $this->pagination->create_links();
	                       ?>
                        </div>       

                        </div><!-- card -->
                    </div><!-- col-lg-12 -->
                </div><!-- row clearfix -->


                </div><!-- container-fluid-->
             </div><!--content -->


          
