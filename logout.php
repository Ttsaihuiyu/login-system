<?php

session_start();

if(isset($_SESSION['user_id']))
{
	unset($_SESSION['user_id']);

}

header("Location: https://ttsaihuiyu.github.io/go-board-final-project.github.io/%E9%A6%96%E9%A0%81/%E5%9C%8D%E6%A3%8B.HTML");
die;