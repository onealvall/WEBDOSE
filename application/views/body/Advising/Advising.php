dddd <section class="content">
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
                            Parent Assign Students
                            </h2>
                        </div>
                        <div class="body">
                     
                       <form method="get" action="<?php echo site_url(); ?>/Admin/Parent_asignstudent">
                            <div class="row clearfix">
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="data" placeholder="Enter Parent Lastname">
                                  </div>
                                 <div class="col-md-4">
                                  <button class="btn btn-info inline" name="submit" type="submit">Search</button>
                                 </div>
                             </div>
                         </form>


                       <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="danger">
                                        <th style="width: 10%">#</th>
                                        <th style="width: 40%">Parent name:</th>
                                         <th style="width: 50%">Action</th>
                                     </tr>
                                 </thead>
                                <tbody>
                                 <?php 
                                     $count = 1;
                                     foreach($assignstudent as $row){
                                  ?>                
                                          <tr>
                                            <td><?php echo $count;  ?></td>
                                            <td><?php echo $row['p_fname'].' , '.$row['p_lname'];  ?></td>

                            <td>
                            <div class="form-line">
                            <form action="<?php echo base_url(); ?>index.php/Admin/Student_Assign" method="post">
                                 <input type="hidden" name="parent_id" value="<?php echo $row['p_account_id']?>">
                                  <input type="hidden" name="parent_fname" value="<?php echo $row['p_fname']?>">
                                 <input type="hidden" name="parent_lname" value="<?php echo $row['p_lname']?>">
                                 <button class="btn btn-sm btn-info inline">Assign</button>
                                 </form>  
                                  <form action="<?php echo base_url(); ?>index.php/Admin/Student_Unassign" method="post">
                                         <input type="hidden" name="parent_id" value="<?php echo $row['p_account_id']?>">
                                         <input type="hidden" name="parent_fname" value="<?php echo $row['p_fname']?>">
                                         <input type="hidden" name="parent_lname" value="<?php echo $row['p_lname']?>">
                                      <button class="btn btn-sm btn-info inline">Unassign</button>
                                     </form>
                            </div>               
                                  </td>

                                        </tr>
                               <?php
                                    $count = $count + 1;
                                                         }
                             ?>
                         </tbody>
                     </table>
                </div>        

            
                    </div>
                </div>
            </div>
                       
                       
</div>
</section>


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           