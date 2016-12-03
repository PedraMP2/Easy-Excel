<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" lang="fa"><title>آسان اکسل</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="اکسل , آموزش اکسل , آموزش آسان اکسل , آسان اکسل , مایکروسافت اکسل , آموزش رایگان اکسل, excel, easy excel">
        <meta name="describtion" content="آموزش کامل و آسان مایکروسافت اکسل">
        <meta name="robots" content="index,follow">
        <meta name="author" content="pedramp22@gmail.com">
        <meta name="copyright" content="reserved">
        <link rel="shortcut icon" type="image/x-icon" href="faveicon.png">		
        <link href="estyla/emainStyla.css" rel="stylesheet" type="text/css" />
        <link href="estyla/ethema.css" rel="stylesheet" type="text/css" />
        <script src="tscripa/jquery-1.10.2.min.js"></script>
        <style>
        @font-face { 
        font-family: "BLotus"; 
        src: url('tfona/BLotus.ttf'); 
        } 
        @font-face { 
        font-family: "BLotusBold"; 
        font-weight: bold; 
        src: url('tfona/BLotusBold.ttf');
         }
         @font-face { 
        font-family: "BTitr"; 
        src: url('tfona/BTitr.ttf'); 
        } 
        @font-face { 
        font-family: "BTitrBold"; 
        font-weight: bold; 
        src: url('tfona/BTitrBold.ttf');
         }
		 body {
			 background-image: url('eimaga/bg.png');
			 background-repeat: repeat;
		 }
         </style>
	</head>
    <body>
        <div class="header theme">
	<div class="topbar">
    	<div class="logo">
        	<img class="logo" src="eimaga/logo.png" />
        </div>
		<div class="nav">
            <ul>
                <a href=""><li class="active" >خانه<span class="triangle"></span></li></a>
                <a href=""><li>معرفی</li></a>
                <a href=""><li>مقدمات</li></a>
                <a href=""><li>توابع</li></a>
                <a href=""><li>آنالیز داده</li></a>
                <a href=""><li>VBA</li></a>
                <a href=""><li>مثال ها</li></a>
                <a href=""><li>درباره ما</li></a>                
            </ul>
		</div>
	</div>
    <script>
		$('.nav > ul > a> li').hover(function(){
			$(this).css('background','white');
			$(this).css('color','#207245');						
			})
		$(".nav > ul > a > li").mouseleave(function(){		 
			 $(".nav > ul > a > li").css('background','transparent');
			 $(".nav > ul > a > li").css('color','white');
		 })
		
	</script>
</div>
      
        <div class="container">
			<?php
            include('esida.php');
            ?><?php
            include('tcontena.php');
            ?>
            <div class="clear"></div>
        </div>
    <footer></footer>
    </body>
</html>