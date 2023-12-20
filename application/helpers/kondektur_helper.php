<?php

function berhasil($msg)
{
	return '<div class="alert alert-success alert-dismissible fade show" role="alert">'.$msg.'</div>';
}

function gagal($msg)
{
	return '<div class="alert alert-danger alert-dismissible fade show" role="alert">'.$msg.'</div>';
}