<?php
	session_start();
	unset($_SESSION['hr_username']);
	header("Location: ../");
?>