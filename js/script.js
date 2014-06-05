$(document).ready(function() {
	$(".motRP").hide();
	$(".motGA").hide();
	$(".more-info").hide();
	//Sélectionner la langue
	$('#selectRP').on('click',function(){
		$("li").removeClass("selectedLanguage");
		$("#selectGA").removeClass("active");
		$(this).addClass("active");
	
		$("#a").addClass("selectedLanguage");
		$("#æ").addClass("selectedLanguage");
		$("#ɒ").addClass("selectedLanguage");
		$("#ɔ").addClass("selectedLanguage");
		$("#ə").addClass("selectedLanguage");
		$("#ɪ").addClass("selectedLanguage");
		$("#e").addClass("selectedLanguage");
		$("#ɛ").addClass("selectedLanguage");

		$(".motGA").addClass("unselectedLanguage");
		$(".motRP").removeClass("unselectedLanguage");
	});

	$('#selectGA').on('click',function(){
		$("li").removeClass("selectedLanguage");
		$("#selectRP").removeClass("active");
		$(this).addClass("active");
		

		$("#i").addClass("selectedLanguage");
		$("#æ").addClass("selectedLanguage");
		$("#ɒ").addClass("selectedLanguage");
		$("#ɔ").addClass("selectedLanguage");
		$("#ə").addClass("selectedLanguage");
		$("#ɪ").addClass("selectedLanguage");
		$("#e").addClass("selectedLanguage");
		$("#ɛ").addClass("selectedLanguage");
		$("#ä").addClass("selectedLanguage");

		$(".motGA").removeClass("unselectedLanguage");
		$(".motRP").addClass("unselectedLanguage");
	});

	$("li").on("click",function(){
		var div = $(this).children("div");
		if ($("#selectRP").hasClass("active")) {
			$(".motGA").hide();
			$(".motRP").hide();
			div.children(".motRP").show();
			div.children(".motGA").show();
			
		}
		else if ($("#selectGA").hasClass("active")) {
			$(".motGA").hide();
			$(".motRP").hide();
			div.children(".motRP").show();
			div.children(".motGA").show();
			
		}
	});

	$("button.see-more").on("click",function(){
		var idDiv = "."+$(this).attr('data-target-id');
		if ($(this).children('span').hasClass('glyphicon-chevron-down')) {
			$(this).children('span').removeClass('glyphicon-chevron-down');
			$(this).children('span').addClass('glyphicon-chevron-up');
			$(idDiv).show();
		}
		else {
			$(this).children('span').addClass('glyphicon-chevron-down');
			$(this).children('span').removeClass('glyphicon-chevron-up');
			$(idDiv).hide();	
		}

	})
});