<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h1>Managed Schedule</h1>
		</div><!-- Basic Example -->
		   <div class="row" style="background-color: #fff;">
		       <div class="col-md-3">
				 <div class="SBorder">
					<h4>Semester:<span class="Beld">  Second</span></h4>
					<h4>School Year:<span class="Beld"> 2018-2019</span></h4>
				</div>
				<br>
			   <div class="text-center">
			      <button class="btn-lg btn btn-success"  data-toggle="modal" data-target="#largeModal"> Check Schedule </button>
				</div>
				<br>
				<div class="SBorder">
					<div class="input-group">
						<div class="form-line">
							<input class="form-control" disabled  placeholder="Schedule Code" type="text" value="">
						</div>
						<div class="form-line">
							<input class="form-control" placeholder="Course Code" type="text" value="">
						</div>
						<div class="form-line">
							<input class="form-control" placeholder="Title" type="text" value="">
						</div>
	
						   <select class="form-control show-tick"  data-live-search="true">
						               <option selected disabled>Select a Section Please</option>
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                             </select>
					
						
						      <select class="form-control show-tick"  data-live-search="true">
						               <option selected disabled>Select a Instructor Please</option>
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                             </select>
							
							 <button class="btn btn-danger btn-lg btn-block waves-effect" type="button">Total Students<span class="badge">40</span></button>
		                
					</div>
				</div><br>

				<div class="text-center">
			      <button class="btn-lg btn btn-success"  data-toggle="modal" data-target="#AddSched"> Add Schedule </button>
				</div>
			   </div>
			   <div class="col-md-9">
			   <div class="table panel panel-danger" style="overflow-x:auto;">
					<table class="table table-bordered">
						<thead>
							<tr class="danger">
								<th>Time</th>
								<th class="text-center">M</th>
								<th class="text-center">T</th>
								<th class="text-center">W</th>
								<th class="text-center">TH</th>
								<th class="text-center">F</th>
								<th class="text-center">S</th>
								<th class="text-center">A</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($this->data['time']->result_array() as $row){?>
							<tr>
								<td><?php echo $row['Schedule_Time']; ?> </td>
							</tr>
							<?php }?>
						
					
						</tbody>
					</table>
				</div>
			   </div>
		      
			  			
		   </div>
	</div>
</section>


 <!-- Large Size -->
 <div class="modal fade" id="largeModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="largeModalLabel"></h4>
                        </div>
                        <div class="modal-body">
					     	<div class="table panel panel-danger" style="overflow-x:auto;">
				         	    <table class="table table-bordered">
					            	<thead>
										<tr class="danger">
											<th>Sched Code</th>
											<th>Course Code</th>
											<th>Course Title</th>
											<th>Lecture</th>
											<th>Day Display</th>
											<th>Room</th>
											<th>Day Display 2</th>
											<th>Room 2</th>
											<th>Section</th>
											<th>Lec Unit</th>
											<th>Lab Unit</th>
											<th>Total Slot</th>
											<th>Instructor Name</th>
										</tr>
					         	</thead>
					       	<tbody>
							    <tr>
								   <td></td>
								   <td></td>
								   <td></td>
								   <td></td>
								   <td></td>
								   <td></td>
								   <td></td>
								   <td></td>
								   <td></td>
								   <td></td>
						    	</tr>
						
						</tbody>
					</table>
				</div>
                           
                        </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>
                </div>
            </div>


  <div class="modal fade" id="AddSched" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="defaultModalLabel">Add Schedule</h4>
                        </div>
                        <div class="modal-body">
						   <div class="SBorder">
						   <select class="form-control show-tick"  data-live-search="true">
						               <option selected disabled>Select Start Time</option>
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                             </select>
					
						
						      <select class="form-control show-tick"  data-live-search="true">
						               <option selected disabled>Select End Time</option>
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
							 </select>
							 <br><br>
							 <div class="text-center">
							 <div class="form-group">
                                    <input type="radio" name="gender" id="" class="with-gap">
                                    <label for="male">M</label>

                                    <input type="radio" name="gender" id="" class="with-gap">
									<label for="female" class="m-l-20">T</label>
									
									<input type="radio" name="gender" id="" class="with-gap">
									<label for="female" class="m-l-20">W</label>
									
									<input type="radio" name="gender" id="" class="with-gap">
									<label for="female" class="m-l-20">TH</label>
									
									<input type="radio" name="gender" id="" class="with-gap">
									<label for="female" class="m-l-20">F</label>
									
									<input type="radio" name="gender" id="" class="with-gap">
									<label for="female" class="m-l-20">S</label>
									
									<input type="radio" name="gender" id="" class="with-gap">
                                    <label for="female" class="m-l-20">A</label>
                                </div>
				            	</div>
							</div><br>
							
							<select class="form-control show-tick"  data-live-search="true">
						               <option selected disabled>Select a Room</option>
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                             </select>
					
						
						      <select class="form-control show-tick"  data-live-search="true">
						               <option selected disabled>Select Instructor</option>
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
							 </select>
							
                           
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-link waves-effect">SAVE </button>
                            <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>

 