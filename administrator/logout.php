<?php 
	session_start();

	//lepas semua variabel
	session_unset();

	//hilangkan semua sesi
	session_destroy();

	//arahkan ke halaman login.php

	header("location: login.php");
?>