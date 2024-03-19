//$(document).ready(function(){
	
function getAutoSuggest() {	

	$(document).click(function(){
		$("#suggestionsList").fadeOut('slow');
		$('#suggestions').fadeOut();
	});
	//$("#joint_customer").focus();
	var offset = $("#joint_customer").offset();
	var width = $("#joint_customer").width()-2;
	$("#suggestionsList").css("left",offset.left); 
	$("#suggestionsList").css("width",'100%');
	//$("#joint_customer").keyup(function(event){
	$("#joint_customer").live('keyup',function(event){
		 //alert(event.keyCode);
		 var keyword = $("#joint_customer").val();
		 var auto_suggest_url = 'ajax/autosuggest_users.php';
		 if(keyword.length)
		 {
			 if(event.keyCode != 40 && event.keyCode != 38 && event.keyCode != 13)
			 {
				 $("#loading").css("visibility","visible");
				 $.ajax({
				   type: "POST",
				   url: auto_suggest_url,
				   data: "data="+keyword,
				   success: function(msg){	
					if(msg != 0) {
					  $('#suggestions').fadeIn();
					  $("#suggestionsList").fadeIn("slow").html(msg);
					} else {
					  $('#suggestions').fadeIn();
					  $("#suggestionsList").fadeIn("slow");	
					  $("#suggestionsList").html('<div style="text-align:left;">No Matches Found</div>');
					}
					$("#loading").css("visibility","hidden");
				   }
				 });
			 } else  {
				switch (event.keyCode)
				{
				 case 40:
				 {
					  found = 0;
					  $("#suggestionsList li").each(function(){
						 if($(this).attr("class") == "selected")
							found = 1;
					  });
					  if(found == 1)
					  {
						var sel = $("#suggestionsList li[class='selected']");
						sel.next().addClass("selected");
						sel.removeClass("selected");
					  }
					  else
						$("#suggestionsList li:first").addClass("selected");
					 }
				 break;
				 case 38:
				 {
					  found = 0;
					  $("#suggestionsList li").each(function(){
						 if($(this).attr("class") == "selected")
							found = 1;
					  });
					  if(found == 1)
					  {
						var sel = $("#suggestionsList li[class='selected']");
						sel.prev().addClass("selected");
						sel.removeClass("selected");
					  }
					  else
						$("#suggestionsList li:last").addClass("selected");
				 }
				 break;
				 case 13:
					$("#suggestionsList").fadeOut("slow");
					$('#suggestions').fadeOut();
					$("#joint_customer").val($("#suggestionsList li[class='selected'] a").text());
					var user_id = $("#suggestionsList li[class='selected']").attr('id')
					$('#joint_customer_id').val(user_id);				
				 break;
				}
			 }
		 } else {
			$("#suggestionsList").fadeOut("slow");
			$('#suggestions').fadeOut();
		 }
	});
	$("#suggestionsList").mouseover(function(){
		$(this).find("li a:first-child").mouseover(function () {
			  $(this).parent().addClass("selected");
		});
		$(this).find("li a:first-child").mouseout(function () {
			  $(this).parent().removeClass("selected");
		});
		$(this).find("li a:first-child").click(function () {
			  $("#joint_customer").val($(this).text());
			  $("#suggestionsList").fadeOut("slow");
			  $('#suggestions').fadeOut();
			  var user_id = $(this).parent().attr('id');
			  $('#joint_customer_id').val(user_id);
		});
	});
}
//});