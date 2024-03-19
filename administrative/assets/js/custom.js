function login()
{
	$(".error").html("loading...");
	form = $("#loginform");
	data = form.serialize();
	//
	$("button[type='submit']").text('loading');
	$("button[type='submit']").attr('disabled','true');
	//
	$.ajax({
		url:$(form).attr("action"),
		type:'post',
		data:data,
		success:function(msg)
		{
			if(msg=='')
			{
				$(".error").html('<label class="text-success"><i class="fa fa-check m-r-5"></i>Login successfully. Redirecting to...</label>');
				window.location="index.php";
			}
			else
			{
				$("button[type='submit']").text('Submit');
	            $("button[type='submit']").removeAttr('disabled');
				$(".error").html('<label class="text-danger"><i class="fa fa-times m-r-5"></i>Invalid username or password</label>');
				
			}
		}
	});
	return false;
}
function refreshtable()
{
	$("#data-grid").dataTable().fnDraw();
	$("#data-grid2").dataTable().fnDraw();
}
////======================================================================================================
function membersdata()
{
	var dataTable = $('#data-grid').DataTable( {
		"processing": true,
		"serverSide": true,
		"ajax":{
			url :"functions/members.php?do=show", // json datasource
			type: "post",  // method  , by default get
			error: function(){  // error handling
				$(".data-grid-error").html("");
				$("#data-grid").append('<tbody class="data-grid-error"><tr><th colspan="6" align="center">No data found in the server</th></tr></tbody>');
				$("#data-grid_processing").css("display","none");

			}
		}
	} );
}
//
function ed(id)
{
	$("#editdiv").html("<center>loading...</center>");
	$.ajax({
		url:'functions/letters.php?do=editform',
		type:'post',
		data:'id='+id,
		success:function(msg)
		{
			$("#editdiv").html(msg);
			$('.wysihtml5').wysihtml5({
				toolbar: {
						insertAnything:  function(locale, options) {
							
						}
					},
					html: true,
					color: true
			});
		}
	});
}
//
function deletemembers(id)
{
	x = confirm('Are you sure want to delete?');
	if(x==true)
	{
		$.ajax({
			url:'functions/members.php?do=delete',
			type:'post',
			data:'id='+id,
			success:function(msg)
			{
				if(msg==1)
				{
					refreshtable();
				}
				else
				{
					alert(msg);
				}
			}
	    });
	}
	else
	{
		
	}
}