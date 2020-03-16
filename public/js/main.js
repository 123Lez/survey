var val = 0;
var percent = 0;
function firstquestion()
{
	if($('ul.checkbox-group.required :checkbox:checked').length < 1)
    {
    	$('#login').modal('show');
    }
    else
    {
		$.ajax({
			type:'GET',
			url:'nextquestion',
			headers: { '_token' : $("input[name='_token']").val() },
	        beforeSend:function()
	        {
	            $('.1stQ').text('Wait...');

	        },
	        success:function(data)
	        {
	        	val = Math.round((1/7)*100);
	        	window.setTimeout(function()
				{
					$('.part1').fadeTo(500, 0).slideUp(500, function(){
					$('.gauge-c').css("transform","rotate("+val*1.8+"deg)");
	   				$('#percent').text(val+"%");
				     $(this).remove();
					});

				  	$('.part2').fadeTo(0, 500).slideDown(500, function(){
				  	
				  	$(this).addClass('.part2');
				  	});
			  	},100);
				
	        }
		});

	}
	
	  
}
function secondquestion()
{
	if($('ul.radio-group.required :radio:checked').length < 1)
    {
    	$('#radio-error').modal('show');
    }
    else
    {
    	$.ajax({
			type:'GET',
			url:'nextquestion',
			headers: { '_token' : $("input[name='_token']").val() },
	        beforeSend:function()
	        {
	            $('.2ndQ').text('Wait...');

	        },
	        success:function(data)
	        {
				val = Math.round((2/7)*100);
				window.setTimeout(function()
				{
				  $('.part2').fadeTo(500, 0).slideUp(500, function(){
				  	$('.gauge-c').css("transform","rotate("+val*1.8+"deg)");
				   	$('#percent').text(val+"%");
				     $(this).remove();
					});

				  $('.part3').fadeTo(0, 500).slideDown(500, function(){
				  	
				  $(this).addClass('.part3');
				  });
				},100);
			}
		});
	}
}
function showTextbox()
{
	if($('.other').is(':checked'))
	{
		$('.other-textbox').css('display','block');
	}
}
function thirdquestion()
{
	if($('ul.radio-group.required :radio:checked').length < 1)
    {
    	$('#radio-error').modal('show');
    }
    else
    {
    	$.ajax({
			type:'GET',
			url:'nextquestion',
			headers: { '_token' : $("input[name='_token']").val() },
	        beforeSend:function()
	        {
	            $('.3rdQ').text('Wait...');

	        },
	        success:function(data)
	        {
    	
				val = Math.round((3/7)*100);
				window.setTimeout(function()
				{
				  $('.part3').fadeTo(500, 0).slideUp(500, function(){
				  	$('.gauge-c').css("transform","rotate("+val*1.8+"deg)");
				   	$('#percent').text(val+"%");
				     $(this).remove();
					});

				  $('.part4').fadeTo(0, 500).slideDown(500, function(){
				  	
				  $(this).addClass('.part4');
				  });
				},100);
			}
		});
	}
}
function forthquestion()
{
	if($('ul.radio-group.required :radio:checked').length < 1)
    {
    	$('#radio-error').modal('show');
    }
    else
    {
    	$.ajax({
			type:'GET',
			url:'nextquestion',
			headers: { '_token' : $("input[name='_token']").val() },
	        beforeSend:function()
	        {
	            $('.4thQ').text('Wait...');

	        },
	        success:function(data)
	        {
				val = Math.round((4/7)*100);
				window.setTimeout(function()
				{
				  $('.part4').fadeTo(500, 0).slideUp(500, function(){
				  	$('.gauge-c').css("transform","rotate("+val*1.8+"deg)");
				   	$('#percent').text(val+"%");
				     $(this).remove();
					});

				  $('.part5').fadeTo(0, 500).slideDown(500, function(){
				  	
				  $(this).addClass('.part5');
				  });
				},100);
			}
		});
	}
}
function fifthquestion()
{
	if($('ul.radio-group.required :radio:checked').length < 1)
    {
    	$('#radio-error').modal('show');
    }
    else
    {
    	$.ajax({
			type:'GET',
			url:'nextquestion',
			headers: { '_token' : $("input[name='_token']").val() },
	        beforeSend:function()
	        {
	            $('.5thQ').text('Wait...');

	        },
	        success:function(data)
	        {
				val = Math.round((5/7)*100);
				window.setTimeout(function()
				{
				  $('.part5').fadeTo(500, 0).slideUp(500, function(){
				  	$('.gauge-c').css("transform","rotate("+val*1.8+"deg)");
				   	$('#percent').text(val+"%");
				     $(this).remove();
					});

				  $('.part6').fadeTo(0, 500).slideDown(500, function(){
				  	
				  $(this).addClass('.part6');
				  });
				},100);
			}
		});
	}
}
function sixthquestion()
{
	if($('ul.radio-group.required :radio:checked').length < 1)
    {
    	$('#radio-error').modal('show');
    }
    else
    {
    	$.ajax({
			type:'GET',
			url:'nextquestion',
			headers: { '_token' : $("input[name='_token']").val() },
	        beforeSend:function()
	        {
	            $('.6thQ').text('Wait...');

	        },
	        success:function(data)
	        {
				val = Math.round((6/7)*100);
				window.setTimeout(function()
				{
				  $('.part6').fadeTo(500, 0).slideUp(500, function(){
				  	$('.gauge-c').css("transform","rotate("+val*1.8+"deg)");
				   	$('#percent').text(val+"%");
				     $(this).remove();
					});

				  $('.part7').fadeTo(0, 500).slideDown(500, function(){
				  	
				  $(this).addClass('.part7');
				  });
				},100);
			}
		});
	}
}
function seventhquestion()
{
	$.ajax({
			type:'GET',
			url:'nextquestion',
			headers: { '_token' : $("input[name='_token']").val() },
	        beforeSend:function()
	        {
	            $('.7thQ').text('Wait...');

	        },
	        success:function(data)
	        {
				val = Math.round((7/7)*100);
				window.setTimeout(function()
				{
				  $('.part7').fadeTo(500, 0).slideUp(500, function(){
				  	$('.gauge-c').css("transform","rotate("+val*1.8+"deg)");
				   	$('#percent').text(val+"%");
				     $(this).remove();
					});

				  $('.part8').fadeTo(0, 500).slideDown(500, function(){
				  	
				  $(this).addClass('.part8');
				  });
				},100);
			}
		});
}
function eighthquestion()
{
	if($('ul.radio-group.required :radio:checked').length < 1)
    {
    	$('#radio-error').modal('show');
    }
    else
    {
    	$.ajax({
			type:'GET',
			url:'nextquestion',
			headers: { '_token' : $("input[name='_token']").val() },
	        beforeSend:function()
	        {
	            $('.8thQ').text('Wait...');

	        },
	        success:function(data)
	        {
				// val = Math.round((5/7)*100);
				// window.setTimeout(function()
				// {
				//   $('.part5').fadeTo(500, 0).slideUp(500, function(){
				//   	$('.gauge-c').css("transform","rotate("+val*2+"deg)");
				//    	$('#percent').text(val+"%");
				//      $(this).remove();
				// 	});

				//   $('.part6').fadeTo(0, 500).slideDown(500, function(){
				  	
				//   $(this).addClass('.part6');
				//   });
				// },100);
				window.location.href='complete';
			}
		});
	}
}


// $(function(){
// 	var val = 0
// 	var decrease = 0 
// 	var incraese = 0 

// 	$('.gauge-container').hover(function()
// 	{
// 		clearInterval(decrease)
// 		increase = setInterval(function()
// 		{
// 		//hover on function
// 			if (val<100)
// 			{
// 				val += 1
// 				$('#percent').text(val+"%")		
// 			}//close if
// 		},
// 		10)
// 		//close settimeout
// 	},
// 	function()
// 	{
// 		clearInterval(increase)
// 		decrease = setInterval(function()
// 		{
// 		//hover on function
// 			if (val>0)
// 			{
// 				val -= 1
// 				$('#percent').text(val+"%")		
// 			}//close if
// 		},
// 		10)//close settimeout
// 	}

// 	)//close hover


// })//close $(function)