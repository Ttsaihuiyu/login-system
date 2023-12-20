<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>

	<title>My website</title>
	<style type="text/css">
	body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
}
	.background {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-size: cover;
		background-repeat: no-repeat;
		z-index: -1;
	}
	.button{
		position: absolute;
		top: 20%;
		left: 47%;
		padding:15px 32px;
		text-decoration: none;
		display: inline-block;
		font-size: 16px; 
		margin: 4px 2px; 
		background-color: #b87708; 
		color: white; 
	}
	#goboard {
		background-image: url('GOBOARD.jpg');
	}

	#goboard1 {
		background-image: url('GOBOARD1.jpg');
		opacity: 0;
	}
	h1 {
		text-align: center;
		padding: 20px;
		background-color: #333;
		color: #fff;
	}
	p{
		text-align: left;
		font-size: 20px;
		width: 20%;
		padding: 20px;
		background-color: #1b1a1a;
		color: #fff;
	}
	@keyframes zoomIn {
		from {
			transform: scale(0);
		}
		to {
			transform: scale(1);
		}
	}

	#welcome {
		animation: zoomIn 2s;
	}

	.but{
			background-color: #b87708; 
			color: white; 
			padding: 15px 32px; 
			text-align: center; 
			text-decoration: none;
			display: inline-block;
			font-size: 16px; 
			margin: 4px 2px; 
			position:absolute;
			top:13%;
			left:46%;
	}
	.social-icon.facebook{
		position: fixed;
		right: 20px;
		bottom: 20px;
		margin-left: 10px;
		width: 30px;
		height: 30px;
	}
	.social-icon.instagram{
		position: fixed;
		right:60px;
		bottom: 20px;
		margin-left: 10px;
		width: 30px;
		height: 30px;
	}
	@keyframes fadeInOut {
		0% {opacity: 1;}
		100% {opacity: 1;}
	}

	.fadeInOut {
		animation-name: fadeInOut;
		animation-duration: 8s;
	}
	 
</style>
</head>
<body>

	 
    <button class="button" onclick="window.location.href='logout.php'">登出</button>
	<div id="goboard" class="background"></div>
    <div id="goboard1" class="background"></div>
    <h1 id="welcome">歡迎來到圍棋教學首頁！</h1>
    <p id="welcome">01157035 蔡惠宇</p>
    <p id="welcome">01157007 邱顯成</p>
    <input type="button" id="but" class="but" value="進入選單" onclick="location.href='https://ttsaihuiyu.github.io/go-board-final-project.github.io/MENU/%E9%81%B8%E5%96%AE.html'">
    <a href="https://www.instagram.com/kevin_go_0103/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" target="_blank">
        <img src="instagram-icon.png" alt="Instagram" class="social-icon instagram">
    </a>
    <a href="https://www.facebook.com/profile.php?id=100009899467259" target="_blank" >
        <img src="facebook-icon.png" alt="Facebook" class="social-icon facebook">
    </a>
    
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
	<script>

	window.onload = function() {
    setInterval(function() {
        document.getElementById('goboard').classList.toggle('fadeInOut');
        document.getElementById('goboard1').classList.toggle('fadeInOut');
    }, 4000);
    document.querySelector('.hamburger').addEventListener('click', function() {
        var sidebar = document.querySelector('.sidebar');
        var width = getComputedStyle(sidebar).width;
        if (width === '0px') {
            sidebar.style.width = '250px';
        } else {
            sidebar.style.width = '0px';
        }
    });
	};
	</script>
</body>
</html>