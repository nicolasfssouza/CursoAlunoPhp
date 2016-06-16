<?php
session_start();

if (isset($_GET['nome'])) {
	$_SESSION['lista_alunos'][] = $_GET['nome'];
}

if (isset($_SESSION['lista_alunos'])) {
	$lista_alunos = $_SESSION['lista_alunos'];
} else {
	$lista_alunos = array();
}
include "template.php";
?>