<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Top King Health</title>
	<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	 <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	 <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	
</head>
<body>
<div class="container" id="landing">
	<div class="header">
		<div class="logo">
			<img width="100px" height="100px" src="clearlogo.png">
		</div>
		<div class="title">
			<h1 id="title">尊王养生</h1>
		</div>	
		<!-- <audio autoplay>
		  <source src="topkingmusic.wav" type="audio/wav">
		 		Your browser does not support the audio element.
		</audio> -->
	</div>
	<div class="navbar navbar-default">
        <ul class="nav nav-pills">
        	<li class><a href="#">養生的開端</a></li>
	  		<li class><a href="#">走进我们</a></li>
	       	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">療愈系列<b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">伯爵養生系列三日</a></li>
	              <li><a href="#">尊爵療癒系列四天</a></li>
	              <li><a href="#">靈芝膠原白净化調理</a></li>
	            </ul>
	      	</li>
	      	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">产品展馆<b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">療愈系列功能性設備</a></li>
	              <li><a href="#">滋养再生系列</a></li>
	              <li><a href="#">机能食品系列</a></li>
				  <li><a href="#">美容美颜系列</a></li>
	            </ul>
	     	</li>
	     	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">自然養生園地<b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">blue</a></li>
	              <li><a href="#">yellow</a></li>
	              <li><a href="#">green</a></li>
	            </ul>
	      	</li>
	        <li><a href="#">互动园区</a></li>
	        <li><a href="#">客服中心</a></li>
	       	<li><a href="#">加入我們</a></li>
		</ul>
	</div>
	<div class="lead">
		<p>尊王國際養生集團致力於預防保健，投入各項臨床研擬，已研發出一系列具功能性有效的, 可信賴的 <a href="#">療癒系列</a> 服務, <a href="#">養生保健產品</a>及<a href="#">資訊分享</a>,能照護大眾身體『序』的運作正常健康, 為全人類服務.</p>
	</div>
	<div class="intro">
		<h2 id="intro">營養吸收的『序』完整</h2>
		<h2 id="intro2">消化功能的『序』良好</h2>
		<h2 id="intro3">解毒能力的『序』夠強</h2>
		<h2 id="intro4">代謝廢物的『序』徹底</h2>
		<h2 id="intro5">能量產生的『序』充足</h2>
		<h2 id="intro6">循環系統的『序』暢通</h2>
		<h2 id="intro7">器官運作的『序』正常</h2>
		<h2 id="intro8">細胞傳輸訊息的『序』順暢</h2>
		<h2 id="intro9">這就是真正養生的開端</h2>
	</div>
	
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$("#title").hide();
		$("#title").show("slide", 5000);

		$("#intro").hide();
		$("#intro2").hide();
		$("#intro3").hide();
		$("#intro4").hide();
		$("#intro5").hide();
		$("#intro6").hide();
		$("#intro7").hide();
		$("#intro8").hide();
		$("#intro9").hide();
	
		$("#intro").show("slide", 1500, 
			function(){$("#intro2").show("slide", 1500,
				function(){$("#intro3").show("slide", 1500,
					function(){$("#intro4").show("slide", 1500,
						function(){$("#intro5").show("slide", 1500,
							function(){$("#intro6").show("slide", 1500,
								function(){$("#intro7").show("slide", 1500,
									function(){$("#intro8").show("slide", 1500,
										function(){$("#intro9").show("slide", 1500);
										});
									});
								});
							});
						});
					});
				});
		});	


		// list = function(num){
		// 	num.eq(0).show("slide", 5000, function(){
		// 		(num=num.slice(1)).length && hidenext(num);
		// 	})
		// 	$("num").show("slide", 5000);
		// }
	});
</script>
</body>