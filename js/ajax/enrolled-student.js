
   $(function(){
	//showAllEnrolledStudent();

//function
function showAllEnrolledStudent(){
	$.ajax({
		type: 'ajax',
		url: 'ajax_enrolled_student',
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
							'<td>'+data[i].First_Name+'</td>'+
							'<td>'+data[i].Student_Number+'</td>'+
							'<td>'+data[i].Course+'</td>'+
							'<td>'+data[i].Gender+'</td>'+
							'<td>'+data[i].Nationality+'</td>'+
							'<td>'+data[i].Applied_Status+'</td>'+
							'<td>'+data[i].YearLevel+'</td>'+
							'<td>'+data[i].YearLevel+'</td>'+
						'</tr>';
			}
			$('#showdataa').html(html);
		},
		error: function(){
			alert('Could not get Data from Database');
		}
	});
}
});
 


