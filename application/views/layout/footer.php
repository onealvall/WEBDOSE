 </section>

   <script src="<?php echo base_url(); ?>js/js/bootstrap.js"></script>  
   <script src="<?php echo base_url(); ?>js/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url(); ?>js/js/jquery-3.1.1.min.js"></script>


 

  
        <!-- Jquery Core Js -->
    <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
     <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url(); ?>plugins/bootstrap/js/bootstrap.js"></script> 
    <!-- Select Plugin Js -->
    <script src="<?php echo base_url(); ?>plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url(); ?>plugins/node-waves/waves.js"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url(); ?>plugins/jquery-countto/jquery.countTo.js"></script>	
    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url(); ?>plugins/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/morrisjs/morris.js"></script>
    <!-- ChartJs -->
    <script src="<?php echo base_url(); ?>plugins/chartjs/Chart.bundle.js"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url(); ?>plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <!-- Custom Js -->
    <script src="<?php echo base_url(); ?>js/pages/ui/dialogs.js"></script>
    <script src="<?php echo base_url(); ?>js/admin.js"></script>
    <script src="<?php echo base_url(); ?>plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    


    <!-- AJAX -->
	    <!--Parent Portal Search Student Module-->
	        <script src="<?php echo base_url(); ?>js/ajax/search-student.js"></script>
        <!--Reset Password Module-->
		    <script src="<?php echo base_url(); ?>js/ajax/parent_reset_password.js"></script>

        <!--Registrar Search Student Module-->
        <script src="<?php echo base_url(); ?>js/ajax/enrolled-student.js"></script>

         <script src="<?php echo base_url(); ?>js/ajax/feedback.js"></script>

          <script src="<?php echo base_url(); ?>js/pages/ui/modals.js"></script>



<script>
$('province').on('change', function() {
			var id = $(this).value;
            alert(this.value);
            /*
			$.ajax({
				type: 'ajax',
            method: 'get',
				url: 'showfeedback',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=p_name]').val(data.p_name);
					$('input[name=p_email]').val(data.p_email);
					$('textarea[name=feedback]').val(data.p_feedback);

				},
				error: function(){
					alert('Could not Edit Data');
				}
            });
            */
		});
</script>

  <script>
$(document).ready( function () {
    $('#test').DataTable();
} );
</script>



  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>



</body>

</html>