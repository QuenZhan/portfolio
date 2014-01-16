// $("#outerWrapper>article").hide();
// $("article img,article iframe").wrap(function(){
// $("article>img:not(.banner)").wrap(function(){
$(document).ready(function(){
	$("article>img").wrap(function(){
		return '<a class="imgWrapper '+$(this).attr("class")+'" href="' + $(this).attr("src") + '" />';
	});
	$("article .imgWrapper").each(function(){
		jjj=$(this).children("img");
		// if(jjj.hasClass("fixed"))$(this).addClass("fi");
		if(jjj.attr("offset"))split=jjj.attr("offset").split(" ");
		else split=[0,0]
		// alert(split)
		jjj.css("width","auto");
		jjj.css({"top":(jjj.height()-jjj.offsetParent().height())*(-0.5+Number(split[1]))
			,"left":(jjj.width()-jjj.offsetParent().width())*(-0.5+Number(split[0]))
		});
	});
});
// $("#navAll").click(function(){
	// $("#outerWrapper>article").slideDown(400);
// });