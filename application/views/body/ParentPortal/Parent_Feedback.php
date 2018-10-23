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
                              Parent Feedback
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
                                            <th>Parent Name:</th>
                                            <th>Parent Email:</th>
                                            <th>Date:</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="showfeedback">
                                  
                                    </tbody>
                                </table>
                         </div> 
                         <div class="text-center">  
                        
                        </div>

                        </div><!-- card -->
                    </div><!-- col-lg-12 -->
                </div><!-- row clearfix -->


                </div><!-- container-fluid-->
             </div><!--content -->


          
            
            
    <div  id="largeModalFeedback" class="modal fade"  tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-red">
                            <h4 class="modal-title">
                            </h4>
                        </div>
        
                        <div class="modal-body">
                    
                        <form id="myFormFeedback" action="" method="post" class="form-horizontal">
                        <input type="hidden" name="txtId" value="0">
                        <div class="row clearfix">
                                <div class="col-sm-6">
                                   <h4>
                                        <span class="label label-danger">Parent Name:</span> 
                                        <input type="text" name="p_name" class="form-control" disabled />
                                   </h4>
                                </div>
                                
                                <div class="col-sm-6">
                                    <h4> 
                                         <span class="label label-danger">Parent Email:</span> 
                                         <input type="text" name="p_email" class="form-control" disabled />
                                    </h4> 
                                </div>
                                <h4> 
                                <span class="label label-danger">Parent Feedback:</span> 
                                <h4> 
                        <textarea rows="4" class="form-control no-resize" name="feedback" placeholder="d" disabled></textarea>
                       
                        </form>
                                  

                         <div class="modal-footer">
                            <button type="button" class="btn btn-info"  data-dismiss="modal">CLOSE</button>
                        </div>
                    
                    </div> 
                 </div>
                </div>
            </div>
           