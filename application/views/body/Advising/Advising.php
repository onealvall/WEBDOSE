<section class="content" style="background-color: #fff;">
	<div class="container-fluid">
		<div class="block-header">
			<h1></h1>
		</div><!-- Basic Example -->
		<div class="row">
			<div class="col-md-3">
				<div class="input-group">
					<span class="input-group-addon"><i class="material-icons">person</i></span>
					<div class="form-line">
						<input class="form-control date" placeholder="Student Number" type="text">
					</div>
				</div>
				<div class="SBorder">
					<div class="input-group">
						<div class="form-line">
							<input class="form-control date" disabled placeholder="Programs" type="text" value="">
						</div>
						<div class="form-line">
							<input class="form-control date" disabled placeholder="Major" type="text" value="">
						</div>
					</div>
				</div><br>
				<div class="">
					<label>School Year:</label> <span>2018-2019</span><br>
					<label>Semester:</label> <span>Second</span>
				</div><br>
				<div class="SBorder">
					<select class="form-control show-tick" data-live-search="true" name="">
						<option disabled selected>
							Select Curicullum
						</option>
						<option>
						</option>
					</select><br>
					<br>
					<select class="form-control show-tick" data-live-search="true" name="">
						<option disabled selected>
							Select Section
						</option>
						<option>
						</option>
					</select><br>
					<br>
					<div class="text-center">
						<div class="form-group">
							<input class="with-gap" id="male" name="block" type="radio"> <label for="male">Block</label> <input class="with-gap" id="female" name="open" type="radio"> <label class="m-l-20" for="female">Open</label>
						</div>
					</div>
				</div><br>
				<div class="text-center">
					<button class="btn btn-danger" data-toggle="modal" data-target="#largeModal">Add Schedule</button>
					<button class="btn btn-danger" onclick="displaySched(201720071, '<?php echo site_url().'/Advising/get_sched_list'; ?>', '<?php echo site_url().'/Advising/get_time'; ?>')" data-target="#largeModal">checker</button>
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
							
							<?php
								foreach ($this->data['time'] as $time) 
								{
									# code...
									
									
									
								
							?>
								<tr>
									<td><?php echo $time['Schedule_Time']; ?></td>
									<?php 
									$array_day = array('M', 'T', 'W', 'H', 'F', 'SA', 'SU');
									foreach ($array_day as $value) 
									{
										# code...
									
									?>
										<td id="<?php echo $time['Time_From']; ?>_<?php echo $value; ?>"></td>
									<?php 
									}
									?>

								</tr>	
							<?php
									
								}
							?>
					
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
                            <h4 class="modal-title" id="largeModalLabel">Add Schedule</h4>
                        </div>
                        <div class="modal-body">
							<br> <br>
							<div class="row">
								<div class="col-md-6">
						         	<select class="form-control show-tick" data-live-search="true" name="">
					                	<option disabled selected>
						               	Select Schedule Code
					            	   </option>
					                 </select><br>
								 </div>
								 <div class="col-md-6">
						         	<select class="form-control show-tick" data-live-search="true" name="">
					                	<option disabled selected>
						               	Course Code
					            	   </option>
					                 </select><br>
						     	</div>
							</div>
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


<script type="text/javascript" src="<?php echo base_url(); ?>js/advising.js"></script>