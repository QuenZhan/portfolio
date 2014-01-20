$(document).ready(function(){
	ua=navigator.userAgent.toLowerCase();
	switch(ua){
	default:
		articleWrap($("article>img"))
	}
	function articleWrap(elem){
		elem.wrap(function(){
				return '<a class="imgWrapper '+$(this).attr("class")+'" href="' + $(this).attr("src") + '" />';
			}).one('load', function() {
				jjj=$(this)
				if(jjj.attr("offset"))split=jjj.attr("offset").split(" ");
				else split=[0,0]
				jjj.css("width","auto");
				jjj.css({"top":(jjj.height()-jjj.offsetParent().height())*(-0.5+Number(split[1]))
					,"left":(jjj.width()-jjj.offsetParent().width())*(-0.5+Number(split[0]))
				});
			}).each(function(){
			  if(this.complete) $(this).load();
			});
	}
	// function getNav(){
		// xmlhttp.onreadystatechange=function(){
			// if (xmlhttp.readyState==4 && xmlhttp.status==200){
				// $("#outerWrapper").prepend(xmlhttp.responseText);
			// }
		// }
		// xmlhttp.open("GET","navigator.php",true);
		// xmlhttp.send();
	// }
	function getArticle(index){
		xmlhttp.onreadystatechange=function(){
			if (xmlhttp.readyState==4 && xmlhttp.status==200){
				articleWrap($("#outerWrapper").prepend(xmlhttp.responseText)
					.find("article>img"));
			}
		}
		xmlhttp.open("GET","articles.php?a="+index,true);
		// xmlhttp.open("GET","foo.php?a="+index,true);
		xmlhttp.send();
	}
	var xmlhttp;
	var isAnimation=false;
	if (window.XMLHttpRequest){// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	}else{// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	} 
})