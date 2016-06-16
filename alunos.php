<?php
session_start();

if (isset($_GET['nome']) && $_GET['nome'] != '') {
	$aluno = array();

	$aluno['nome'] = $_GET['nome'];

	if (isset($_GET['email'])){
		$aluno['email'] = $_GET['email'];
	}else {
		$aluno['email'] = '';
	}
	if (isset($_GET['mae'])){
		$aluno['mae'] = $_GET['mae'];
	}else {
		$aluno['mae'] = '';
	}
	if (isset($_GET['endereco'])){
		$aluno['endereco'] = $_GET['endereco'];
	}else {
		$aluno['endereco'] = '';
	}
	$_SESSION['listaAlunos'] [] = $aluno;
}

if (isset($_SESSION['listaAlunos'])) {
	$listaAlunos = $_SESSION['listaAlunos'];
} else {
	$listaAlunos = array();
}
include "template.php";
?>