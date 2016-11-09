$(document).ready(function(){
	var temp = "";
	var tempCard = "";
	var id = 0;
	var time=30;
	$(".card").on("click", function (){
		$(".card").children(".front").removeClass("activeRotate");
		$(".card").children(".back").removeClass("activeRotate");
		$(this).children(".front").toggleClass("activeRotate");
		$(this).children(".back").toggleClass("activeRotate");
		if (id % 2 == 0) {
			temp = $(this).children(".front").children("img").attr("src");
			tempCard = $(this);
			id++;
		} else {
			if (temp == $(this).children(".front").children("img").attr("src")) {
				tempCard.css("display", "none");
				$(this).css("display", "none");
				id++;
			} else {
				temp = "";
				tempCard = "";
				id++;
			}
		}	
	})
});