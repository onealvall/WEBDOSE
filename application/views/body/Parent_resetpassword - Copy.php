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
                     
                       <form method="get" action="<?php echo site_url(); ?>/Admin/Parent_reset">
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
                            <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Parent name:</th>
                                         <th>Action</th>
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
                                         <form method="get" action="<?php echo site_url(); ?>/Admin/Parent_resetpassword">
                                              <input type="hidden"  name="p_id" value="<?php echo $row['p_account_id']; ?>">
                                              <button class="btn btn-info inline" name="submit" type="submit">Reset Password</button>
                                          </form>
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

  

  <div id="ResetPass" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Reset</h4>
      </div>
      <div class="modal-body">
        	Do you want to reset this password?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</div>