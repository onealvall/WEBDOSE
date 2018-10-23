<section class="content" style="background-color: #fff;">
	<div class="container-fluid">
		<div class="block-header">
			<h1></h1>
		</div><!-- Basic Example -->
		   <div class="row">
		       <div class="col-md-4">
			      <select class="form-control show-tick" data-live-search="true">
				      <option selected disabled>Select Room</option>
					  <?php foreach($this->data['Room']->result_array() as $row){?>
						<option><?php echo $row['Room']; ?> </option>
					  <?php }?>
                 </select>
				</div>
				<br><br>
			    <div class="col-md-12">
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


 