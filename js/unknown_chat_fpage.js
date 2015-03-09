$(document).ready(function(){

	
//form();
	auto_drop_bottom_to();
	 auto_drop_bottom_to_2();

	
	});
	function newchat()
{
		
		var r=confirm("Are you sure you want to leave this chat and start the new chat ");
		
		if(r==true)
		{
		window.location.href='choose_new_chat.php';
		}
}

	function endchat()
{
		var r=confirm("Are you sure you want to leave this chat and  get back to login page");
		
		if(r==true)
		{
		window.location.href='end_of_chat.php';
		}
}

		function form()
						{
							$("form"). on('submit', function(event)
							{
									event.preventDefault(); data= $(this).serialize();
									$.ajax({
												type: "POST", url:"insert_temporary_chat.php", data: data
											})
										auto_drop_bottom_to();
							});
							
						}
	//THis ONREADY function of the script it is run as soon as the page is loaded 				
	//THis function is used so that the  div='search_and_print' is automatically drop down to bottom of the division only one after the the timeout of 700 miolisecond with animation
	function auto_drop_bottom_to()
	{
			
							var  auto_drop_bottom=setTimeout(
							function()
							{
								//$('#search_and_print').scrollTop($("#search_and_print").height());
								$("#search_and_print").animate ({scrollTop : $("#search_and_print")[0].scrollHeight},600);
							},500);
						
							
		
	}
	
	//THis function is used so that the  div='search_and_print' is automatically drop down to bottom  after the time interval of the 15000 millisecond i.e 15sec
	function auto_drop_bottom_to_2()
	{
			
							var  auto_drop_bottom=setInterval(
							function()
							{
								//$('#search_and_print').scrollTop($("#search_and_print").height());
								$("#search_and_print").animate ({scrollTop : $("#search_and_print")[0].scrollHeight},100);
							},10000);
							
		
	}
	function textareaclear()
	{
		document.getElementById("text_id").value="type something";
	} 
	
	function submit()
	{
	auto_drop_bottom_to();
	textareaclear();
	}
			