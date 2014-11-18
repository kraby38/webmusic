$(document).ready(function() 
{
	$(".close").css("display", "none");

	var isMenuOpen = false;

	$('.menu_btn').click(function()
	{
		if (isMenuOpen == false)
		{
		//alert('je suis dans le bon cas')
			$("#menu").clearQueue().animate({
				right : '0'
			})
			$("#page").clearQueue().animate({
				"margin-left" : '-290px'
			})
			
			$(this).fadeOut(200);
			$(".close").fadeIn(300);
			
			isMenuOpen = true;
		} 
	});
	
	$('.close').click(function()
	{
		if (isMenuOpen == true)
		{
			$("#menu").clearQueue().animate({
				right : '-240px'
			})
			$("#page").clearQueue().animate({
				"margin-left" : '0px'
			})
			
			$(this).fadeOut(200);
			$(".menu_btn").fadeIn(300);
			
			isMenuOpen = false;
		}
	});
});

