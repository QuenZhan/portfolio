<?php 
function curPageURL(){
	$pageURL = 'http';
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}
$page="";		if(array_key_exists("page",$_GET))$page=$_GET["page"];

?>
<!DOCTYPE html>
<html lang='zh-TW'>
<head>
	<title>Jimbow 作品集</title>
	<link href='han.min.css' rel='stylesheet'/>
	<link href='layout.css' rel='stylesheet'/>
	<meta name="description" content="TNRTH作品集">
	<meta name="keywords" content="HTML5,CSS3,JavaScript,3D,autodesk maya,illustration,unity3d,game sprites,game design">
	<meta name="author" content="TRNTH">
	<meta property="og:url" content="<?php echo curPageURL() ?>" />
	<meta property="og:title" content="Jimbow 作品集" />
	<meta property="og:type" content="website" />
	<meta property="og:image" content="<?php echo curPageURL() ?>/data/cg/CG_ep1_0.jpg" />
	<meta property="og:description" content="個人作品集" />
	<meta property="og:site_name" content="PHOTOx1" />
	<style type="text/css">
	</style>
</head><body>
	<iefuck style="display:none">
		※本作品集頁面為IE以外瀏覽器專用，IE瀏覽器使用將會在2秒後跳轉至專用頁面；若沒有自動跳轉，請點擊<a href="portofolioWord.htm">這裡</a>
	<!--[if IE]> <script> (function() { 
		window.setTimeout('window.location="portofolioWord.htm"; ',2000);
		})(); </script> <![endif]-->

	</iefuck>
<div id="outerWrapper">
<?php if($page=="aCatalogue"
	||$page=="all"
	||$page==""
	):?>
	<article id="aCatalogue">
		<h1>總攬</h1>
		<h2>行前說明</h2>
		<table>
			<thead style="display:none">
				<tr>
					<th>icon
					<th>主題
					<th>描述
				</tr>
			</thead>
			<tbody>
				<tr><td><img border="0" src="http://1.bp.blogspot.com/-tRNQFt2AfEM/UbboUkCr-AI/AAAAAAAABbk/ZzOzOV7WFgc/s320/monsterHuntress.jpg" />
					<td><a href="?page=aPcGame">鯨魚案</a><td>PC動作遊戲，Unity3D
				</tr>
				<tr><td><img border="0" src="http://2.bp.blogspot.com/-C742jlTHhX0/UbrJe1pAswI/AAAAAAAABb0/Xf6ktleMgwc/s320/toylab.jpg" />
					<td><a href="?page=aApp">玩具實驗室</a><td>iPad 互動電子書。APP STAR高手爭霸戰第三名
				</tr>
				<tr><td><img src="http://2.bp.blogspot.com/-KpRc6LDiJwk/UG1Sl_ETndI/AAAAAAAAA44/MqZ63X9dF0o/s1600/dddd.jpg" alt="LovieIcon" />
					<td><a href="?page=aChwistle">白領地記事</a><td>PC動作遊戲，Unity3D
				</tr>
				<tr><td><img src="http://i201.photobucket.com/albums/aa286/adeathjohn/otherthing/logo_final.png" alt="mudhiPoolAvatar" />
					<td><a href="?page=aInsArt">虫池</a><td>互動投影裝置，GameMaker
				</tr>
				<tr><td><img src="data/icon00.jpg" alt="icons" />
					<td><a href="?page=aIllustration">插圖</a><td>2D電腦繪圖，Photoshop
				</tr>
				<tr><td><img src="data/icon02.jpg" alt="icons" />
					<td><a href="?page=aSprites">遊戲元件</a><td>2D電腦繪圖，Photoshop、AfterEffect、GifMovieGear、Eztoon
				</tr>
				<tr><td><img src="data/icon01.jpg" alt="icons" />
					<td><a href="?page=aModeling">3D模型</a><td>Autodesk Maya、DeepPain3D、Zbrush
				</tr>
				<tr><td><img src="data/icon03.jpg" alt="icons" />
					<td>網頁設計<td>本作品集以html5+css3+jQuery製成，Notepad++。
				</tr>
			</tbody>
		</table>
		<h2>更新履歷</h2>
		<dl>
			<dt><time>2014-01-16</time></dt>
				<dd>修改為php格式，減少瀏覽器負擔</dd>
				<dd>修改部分格式</dd>
				<dd>關閉 jQuery 捲動特效</dd>
		</dl>
	</article>
<?php endif;?>
<?php if($page=="aPcGame"||$page=="all"):?>
	<article id="aPcGame">
		<h1>愛なきバケモノハンター～負ければ触手に犯される～</h1>
		<a href="http://www.youtube.com/watch?v=x90VLVgjMfA"><img src="data/bigWhaleYoutube.jpg" alt="oops" /></a>
		<img src="data/bigWhale/b0001.jpg" alt="oops" />
		<img src="data/bigWhale/b0002.jpg" alt="oops" />
		<img src="data/bigWhale/b0003.jpg" alt="oops" />
		<img src="data/bigWhale/b0004.jpg" alt="oops" />
		<img src="data/bigWhale/b0005.jpg" alt="oops" />
		<img src="data/bigWhale/b0006.jpg" alt="oops" />
		<img src="data/bigWhale/b0007.jpg" alt="oops" />
		<p>團隊合作的商業作品。此專案中本人負責程式腳本、背景美術、粒子特效、介面、音效、角色動畫調整部份，使用引擎是unity3D。
		<p>※截圖為開發中畫面※
		<p>本作品在DLSite販賣：<a href="http://www.dlsite.com/maniax/work/=/product_id/RJ118890">連結</a><em>十八禁成人向</em>
	</article>
<?php endif;?>
<?php if($page=="aChwistle"||$page=="all"):?>
	<article id="aChwistle">
		<h1>白領地記事</h1>
		<img class="single" src="data/bbb-2.jpg" alt="oops" />
		<a href="http://youtu.be/gMLwQrQKxGs"><img src="data/cwhistleLovie/bbb-2.jpg" alt="oops" /></a>
		<img src="data/cwhistleLovie/b0001.jpg" alt="oops" />
		<img src="data/cwhistleLovie/b0002.jpg" alt="oops" />
		<img src="data/cwhistleLovie/b0003.jpg" alt="oops" />
		<img src="data/cwhistleLovie/b0004.jpg" alt="oops" />
		<img src="data/cwhistleLovie/b0005.jpg" alt="oops" />
		<p>畢業專題。美術程式音效各部份皆為獨立完成：包括粒子特效、角色動作、rigging、建模、貼圖。使用引擎是unity3D
	</article>
<?php endif;?>
<?php if($page=="aApp"||$page=="all"):?>
	<article id="aApp">
		<h1>APP電子書：玩具實驗室</h1>
		<img src="data/toy0001.png" alt="玩具實驗室截圖" />
		<img src="data/toy0002.png" alt="玩具實驗室截圖" />
		<img src="data/toy0003.png" alt="玩具實驗室截圖" />
		<img src="data/toy0004.png" alt="玩具實驗室截圖" />
		<ul>
			<li><a href="http://www.jtv.com.tw/AppStar/index_introduction.php?no=78">App Star 高手爭霸戰</a>活動網頁
			<li><a href="https://itunes.apple.com/tw/app/shi-yan-hao-hao-wan!/id507070651?mt=8">iTunes 下載頁面</a>
			<li><a href="http://youtu.be/_Tt_9HBSEQM">產品介紹影片</a>
		</ul>
		<p>在校期間參與學校的產學合作企劃，本人負責美術元件、角色動態設計、機關設計、畫面後製等部份。此作品獲得<span>App Star 高手爭霸戰</span>第三名。並且在iTunes上販售
		<p>使用引擎為cocos2D，但此專案本人只負責美術部份
	</article>
<?php endif;?>
<?php if($page=="aInsArt"||$page=="all"):?>
	<article id="aInsArt">
		<h1>互動裝置藝術：虫池</h1>
			<a href="http://youtu.be/6SNA6DufOTk" class="imgWrapper"><img src="data/mushipool/youtube.jpg" alt="oops" /></a>
			<img src="data/mushipool/logo_final.png" alt="oops" />
		<img src="data/mushipool/b0001.jpg" alt="oops" />
		<img src="data/mushipool/b0002.jpg" alt="oops" />
		<img src="data/mushipool/b0003.jpg" alt="oops" />
		<img src="data/mushipool/b0004.jpg" alt="oops" />
		<p><a href="http://trnth.blogspot.tw/2011/05/blog-post.html">詳細</a>，外部連結
		<p>在校期間投影互動藝術裝置的實驗作品，負責角色動態、元件繪製。使用引擎為Game Maker7
	</article>
<?php endif;?>
<?php if($page=="aIllustration"||$page=="all"):?>
	<article id="aIllustration">
		<h1>插圖</h1>
		<img src="data/cg/CG_ep1_0.jpg" alt="oops" />
		<img src="data/cg/CG_ep2_2_red_moonA.jpg" alt="oops" />
		<img src="data/cg/CG_ep2_8_aztec_karmio.jpg" alt="oops" />
		<img src="data/cg/20100712_mozarc_notitle.png" alt="oops" />
		<img src="data/cg/sucubus.jpg" alt="oops" offset="0 0.4" />
		<img src="data/cg/small_r18.jpg" alt="oops" offset="0 0.2" />
		<img src="data/cg/20100707_b_red_regular_800.jpg" alt="oops" />
		<img src="data/cg/ynmer.jpg" alt="oops" offset="0 0.2" />
		<img src="data/cg/20101012_fSeason.jpg" alt="oops" class="single" />
	</article>
<?php endif;?>
<?php if($page=="aModeling"||$page=="all"):?>
	<article id="aModeling">
		<h1>3D模型</h1>
		<p>熟悉Maya：建模、uv貼圖、rigging、角色動作、布料頭髮動態、nCloth、render</p>
		<a href="http://youtu.be/hRtLR4Z_0tg"><img src="data/modling/conutessYoutube.jpg" alt='oops' /></a>
		<img src="data/modling/banner.jpg" alt="oops" />
		<ul>
			<li><a href="http://trnth.blogspot.tw/2012/06/unity.html" >即時運算模型展示</a>外部連結
			<li><a href="http://trnth.blogspot.tw/2012/05/3d.html">製作過程回顧</a>外部連結
		</ul>
		<img src="data/modling/00.jpg" alt="oops" />
		<img src="data/modling/01.jpg" alt="oops" />
		<img src="data/modling/02.jpg" alt="oops" />
		<img src="data/modling/04.jpg" alt="oops" />
		<img src="data/modling/snap.jpg" alt="oops" />
		<hr />
		<a href="http://youtu.be/irz6nhurUxQ"><img src="data/modling/womanYoutube.jpg" alt='oops' /></a>
		<img src="data/modling/000.jpeg" alt="oops" />
		<img src="data/modling/004.jpeg" alt="oops" />
		<img src="data/modling/003.jpeg" alt="oops" />
		<img src="data/modling/001.jpeg" alt="oops" class="single" offset="0 0.35" />
		<hr />
		<img src="data/mainOnHourse_201111182118.jpg" alt="oops" />
		<img src="data/run360.gif" alt="oops" />
		<img src="data/horseRun.gif" alt="oops" />
	</article>
<?php endif;?>
<?php if($page=="aSprites"||$page=="all"):?>
	<article id="aSprites">
		<h1>遊戲元件</h1>
		<img src="data/cg/640px.gif" alt="oops" class="single" />
		<div class="column">
			<img src="data/sprites/20091109_b_f_400px.gif" alt="oops" />
		</div>
		<div class="column">
			<img src="data/sprites/bbb.gif" alt="oops" />
			<img src="data/sprites/bbb (1).gif" alt="oops" />
			<img src="data/sprites/20100606_b_chra_marisa.gif" alt="oops" />
			<img src="data/sprites/20100608_a_sakuya.gif" alt="oops" />
			<br>
			<img src="data/sprites/20080731-d.gif" alt="oops" />
		</div>
		<div>
			<img src="data/sprites/water_20101123_colored.gif" alt="oops" />
			<img src="data/sprites/20100506_b_allstar.gif" alt="oops" />
		</div>
	</article>
<?php endif;?>
	<header id="header">
		<center>
			<div>
				<h1>Jimbow 個人作品集</h1>
				<p></p>
				<address>
					<div>E-mail:adeathjohn AT gmail DOT com</div>
					<div><a href="http://trnth.blogspot.tw/">http://trnth.blogspot.tw/</a></div>
				</address>
			</div>
			<nav>
				<ul id="buttons">
					<li><a id="bCatalogue" href="?page=aCatalogue">總覽</a>
					<li><a id="bPcGame" href="?page=aPcGame">PC遊戲</a>
					<li><a id="bApp" href="?page=aApp">App電子書</a>
					<li><a id="bInsArt" href="?page=aInsArt">互動裝置</a>
					<li><a id="bIllustration" href="?page=aIllustration">2D插圖</a>
					<li><a id="bSprites" href="?page=aSprites">遊戲元件</a>
					<li><a id="bModeling" href="?page=aModeling">3D模型</a>
					<li><a id="bModeling" href="?page=all">展開</a>
					<!--
					<li><a href="#nogo">UI設計</a>
					-->
				</ul>
			</nav>
		</center>
	</header>
	<footer id="copyRight">
		<p>&#169;2013 TrntH, All Rights Reserved.</p>
	</footer>
</div>
<script src="jquery-1.10.1.min.js"></script>
<script src="script.js"></script>
</body>
</html>