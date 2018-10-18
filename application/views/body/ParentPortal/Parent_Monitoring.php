 
 <section class="content">
        <div class="container-fluid">
          
        <div class="block-header">
                <h1>List of Parent Register</h1>
            </div>
            <!-- Basic Example -->
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>
                                Number of Parent Register: <?php echo $Parent_counts; ?>
                            </h2>
                        </div>
                        <div class="body">

                        
                     <form action="<?php echo base_url(); ?>index.php/Admin/Parent_Monitoring" class="form-line" method="post">
                            <div class="row clearfix">
                                  <div class="col-md-8">
                                    <input type="text" class="form-control" name="s_n" placeholder="Search">
                                  </div>
                                 <div class="col-md-4">
                                  <button class="btn btn-info inline" name="submit" type="submit">Search</button>
                                 </div>
                             </div>
                    </form>

                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr class="danger">
                                            <th>#</th>
                                            <th>Parent name:</th>
                                            <th>Parent email:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    <?php 
                                    $count = 1;
                                    foreach ($this->$data['parent'] as $row) {
                                     ?>
                                          <tr>
                                            <td><?php echo $count;  ?></td>
                                            <td><?php echo $row->p_fname; ?> <?php echo $row->p_mname; ?> <?php echo $row->p_lname; ?></td>
                                            <td><?php echo $row->p_email; ?></td>
                                        </tr>
                       
                                    <?php
                                           $count = $count + 1;
                                                                         }
                                     ?>
                                  
                                    </tbody>
                                </table>
                            </div>  

                             <div class="text-center">  
                          <?php
	                       echo  $this->pagination->create_links();
	                       ?>
                        </div>       

                        </div>
                    </div>
                </div>





                </div>
             </div>


          