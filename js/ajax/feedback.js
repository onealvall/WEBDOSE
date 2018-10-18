
   $(function(){
	showAllFeedback();



//show button
$('#showfeedback').on('click', '.item-show', function(){
			var id = $(this).attr('data');
			$('#largeModalFeedback').modal('show');
			$('#largeModalFeedback').find('.modal-title').text('Parent Feedback');
			$('#myFormFeedback').attr('action', 'ajax_feedback');
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
		});




//function
function showAllFeedback(){
	$.ajax({
		type: 'ajax',
		url: 'ajax_feedback',
		async: false,
		dataType: 'json',
		success: function(data){
			var html = '';
			var i;
			var x = 0;
			for(i=0; i<data.length; i++){
			   x++;
				html
				 +='<tr>'+
							'<td>'+x+'</td>'+
							'<td>'+data[i].p_name+'</td>'+
							'<td>'+data[i].p_email+'</td>'+
							'<td>'+data[i].feedback_date+'</td>'+
							'<td>'+
								'<a href="javascript:;" class="btn btn-danger item-show" data="'+data[i].feedback_id+'">View Feedback</a>'+
							'</td>'+
						'</tr>';
			}
			$('#showfeedback').html(html);
		},
		error: function(){
			alert('Could not get Data from Database');
		}
	});
}
});
 


