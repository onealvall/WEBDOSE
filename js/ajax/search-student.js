
   $(function(){
	showAllStudent();


	
	$('#btnSave').click(function(){
		var url = $('#myFormEdit').attr('action');
		var data = $('#myFormEdit').serialize();
		//validate form
		var FatherName        = $('input[name=Father_Name]');
		var FatherOccupation  = $('input[name=Father_Occupation]');
		var FatherNo          = $('input[name=Father_no]');
		var FatherAdd         = $('input[name=Father_Address]');
		var FatherEmailAdd    = $('input[name=Father_EmailAddress]');

		var MotherName        = $('input[name=Mother_Name]');
		var MotherOccupation  = $('input[name=Mother_Occupation]');
		var MotherNo          = $('input[name=Mother_No]');
		var MotherAdd         = $('input[name=Mother_Address]');
		var MotherEmailAdd    = $('input[name=Mother_EmailAddress]');
		var result = '';

			if(FatherName.val()==''){
				FatherName.parent().parent().addClass('has-error');
			}else{
				FatherName.parent().parent().removeClass('has-error');
				result +='1';
			}
			if(FatherOccupation.val()==''){
				FatherOccupation.parent().parent().addClass('has-error');
			}else{
				FatherOccupation.parent().parent().removeClass('has-error');
				result +='2';
			}
			if(FatherNo.val()==''){
				FatherNo.parent().parent().addClass('has-error');
			}else{
				FatherNo.parent().parent().removeClass('has-error');
				result +='3';
			}
			if(FatherAdd.val()==''){
				FatherAdd.parent().parent().addClass('has-error');
			}else{
				FatherAdd.parent().parent().removeClass('has-error');
				result +='4';
			}
			if(FatherEmailAdd.val()==''){
				FatherEmailAdd.parent().parent().addClass('has-error');
			}else{
				FatherEmailAdd.parent().parent().removeClass('has-error');
				result +='5';
			}

			

			if(MotherName.val()==''){
				MotherName.parent().parent().addClass('has-error');
			}else{
				MotherName.parent().parent().removeClass('has-error');
				result +='6';
			}

			if(MotherOccupation.val()==''){
				MotherOccupation.parent().parent().addClass('has-error');
			}else{
				MotherOccupation.parent().parent().removeClass('has-error');
				result +='7';
			}

			if(MotherNo.val()==''){
				MotherNo.parent().parent().addClass('has-error');
			}else{
				MotherNo.parent().parent().removeClass('has-error');
				result +='8';
			}

			if(MotherAdd.val()==''){
				MotherAdd.parent().parent().addClass('has-error');
			}else{
				MotherAdd.parent().parent().removeClass('has-error');
				result +='9';
			}

			if(MotherEmailAdd.val()==''){
				MotherEmailAdd.parent().parent().addClass('has-error');
			}else{
				MotherEmailAdd.parent().parent().removeClass('has-error');
				result +='10';
			}




		if(result=='12345678910'){
			$.ajax({
				type: 'ajax',
				method: 'post',
				url: url,
				data: data,
				async: false,
				dataType: 'json',
				success: function(response){
					if(response.success){
						$('#largeModalEdit').modal('hide');
						$('#myFormEdit')[0].reset();
						if(response.type=='add'){
							var type = 'added'
						}else if(response.type=='update'){
							var type ="updated"
						}
						$('.alert-success').html('Parent Information '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
						showAllEmployee();
					}else{
						alert('No Changes');
						$('#largeModalEdit').modal('hide');
					}
				},
				error: function(){
					alert('Could not add data');
				}
			});
		}
	});

//show button
$('#showdata').on('click', '.item-show', function(){
			var id = $(this).attr('data');
			$('#largeModalShow').modal('show');
			$('#largeModalShow').find('.modal-title').text('Parent Information');
			$('#myFormShow').attr('action', 'ajax_student');
			$.ajax({
				type: 'ajax',
				method: 'get',
				url: 'edit_Student',
				data: {id: id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=Student_Name]').val(data.First_Name  +data.Last_Name);
					$('input[name=Student_Number]').val(data.Student_Number);

					$('input[name=Father_Name]').val(data.Father_Name);
					$('input[name=Father_Occupation]').val(data.Father_Occupation);
					$('input[name=Father_no]').val(data.Father_Contact);
					$('input[name=Father_Address]').val(data.Father_Address);
					$('input[name=Father_EmailAddress]').val(data.Father_Name);

				    $('input[name=Mother_Name]').val(data.Mother_Name);
					$('input[name=Mother_Occupation]').val(data.Mother_Occupation);
					$('input[name=Mother_No]').val(data.Mother_Contact);
					$('input[name=Mother_Address]').val(data.Mother_Address);
					$('input[name=Mother_EmailAddress]').val(data.Mother_Name);
				},
				error: function(){
					alert('Could not Edit Data');
				}
			});
		});


//edit button
$('#showdata').on('click', '.item-edit', function(){
	var id = $(this).attr('data');
	$('#largeModalEdit').modal('show');
	$('#largeModalEdit').find('.modal-title').text('Update Parent Information');
	$('#myFormEdit').attr('action', 'update_Student');
	$.ajax({
		type: 'ajax',
		method: 'get',
		url: 'edit_Student',
		data: {id: id},
		async: false,
		dataType: 'json',
		success: function(data){
			$('input[name=Student_Name]').val(data.First_Name  +data.Last_Name);
			$('input[name=Student_Number]').val(data.Student_Number);

			$('input[name=Father_Name]').val(data.Father_Name);
			$('input[name=Father_Occupation]').val(data.Father_Occupation);
			$('input[name=Father_no]').val(data.Father_Contact);
			$('input[name=Father_Address]').val(data.Father_Address);
			$('input[name=Father_EmailAddress]').val(data.Father_Name);

			$('input[name=Mother_Name]').val(data.Mother_Name);
			$('input[name=Mother_Occupation]').val(data.Mother_Occupation);
			$('input[name=Mother_No]').val(data.Mother_Contact);
			$('input[name=Mother_Address]').val(data.Mother_Address);
			$('input[name=Mother_EmailAddress]').val(data.Mother_Name);

			$('input[name=txtId]').val(data.Student_Number);
		},
		error: function(){
			alert('Could not Edit Data');
		}
	});
});



//function
function showAllStudent(){
	$.ajax({
		type: 'ajax',
		url: 'ajax_student',
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
							'<td>'+data[i].Student_Number+'</td>'+
							'<td>'+data[i].First_Name+'</td>'+
							'<td>'+data[i].Course+'</td>'+
							'<td>'+
								'<a href="javascript:;" class="btn btn-danger item-edit" data="'+data[i].Student_Number+'">Update Parent Info </a>'+
							'</td>'+
						'</tr>';
			}
			$('#showdata').html(html);
		},
		error: function(){
			alert('Could not get Data from Database');
		}
	});
}
});
 


