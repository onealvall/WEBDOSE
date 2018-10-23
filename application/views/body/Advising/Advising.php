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
							<tr>
								<td>7:00 AM - 8:00 AM</td>
								<td>
							     	<div class="btn bg-red btn-block btn-xs">
								    	<h5>20130515</h5>
									    <h5>Oneal A. Vallecera</h5>
							      	</div>
								</td>
								<td>
							     	<div class="btn bg-red btn-block btn-xs">
									      <h5>20130515</h5>
									      <h5>Oneal A. Vallecera</h5>
							    	</div>
								</td>
								<td>
							     	<div class="btn bg-green btn-block btn-xs">
									    <h5>20130515</h5>
									    <h5>Oneal A. Vallecera</h5>
							    	</div>
								</td>
								<td class="">
									<p>Course Code</p>
									<p>Instructor</p>
								</td>
								<td class="SchedBorder">
									<p>Course Code</p>
									<p>Instructor</p>
								</td>
								<td class="SchedBorder">
									<p>Course Code</p>
									<p>Instructor</p>
								</td>
								<td class="SchedBorder">
									<p>Course Code</p>
									<p>Instructor</p>
								</td>
							</tr>
					
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