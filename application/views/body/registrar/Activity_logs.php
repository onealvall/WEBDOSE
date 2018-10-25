<section class="content" style="background-color: #fff;">
	<div class="container-fluid">
		<div class="block-header">
			<h1>Action Logs</h1>
		</div><!-- Basic Example -->
		   <div class="row">
		   <form action="<?php echo base_url(); ?>index.php/Registrar/Activity_Logs" method="post">
		       <div class="col-md-10">
			         <select name="user" class="form-control show-tick" data-live-search="true">
                                <option>Search by User</option>
					     	<?php foreach($this->data['user']->result_array() as $row){ ?>
                               <option><?php echo $row['UserName'] ?></option>
					    	<?php }?>           
					  </select>
					  <br><br>
					  <div class="row"> 
			             	<div class="col-md-4">
				               <label>Date from:</label>
			                 	<input type="date" name="from" placeholder="Select Date From">
			             	</div>

				        	<div class="col-md-4">
				            	<label>Date to:</label>
			                	<input type="date" name="to" placeholder="Select Date From">
				            </div>
					  </div>
			    </div> 
				
				<div class="col-md-2">
				<br>
					<button type="submit" name="search_button"  class="btn btn-lg btn-danger">Search </button>
				</div>
				</form>
				</div>
			
				<div class="row">
				<br><br>
			    <div class="col-md-12">
			    <div class="table panel panel-danger" style="overflow-x:auto; overflow-y: auto; height: 500px;">
                                <table class="table table-bordered">
						<thead>

							<tr class="danger">
							    <th>#</th>
								<th>User</th>
								<th>Action Made</th>
								<th>Time of Action</th>
							</tr>

						</thead>
						<tbody>
						<?php
                              $count = 1;
							  foreach($this->data['get_table']->result_array() as $row) 
                         {?>
							<tr>
								<td><?php echo $count;  ?> </td>
								<td><?php echo $row['UserName']; ?> </td>
								<td><?php echo $row['ActionMade']; ?> </td>
								<td><?php echo $row['TimeofAction']; ?> </td>
							
							</tr>
							<?php  $count = $count + 1; }?>
						</tbody>
					</table>
				</div>
               </div>
			
		   </div>
	</div>
</section>


 