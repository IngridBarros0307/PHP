<?php

include("../models/conexao.php");

$varAlunoNome =  $_POST["alunoNome"];
$varAlunoCidade =  $_POST["alunoCidade"];
$varAlunoNome =  $_POST["alunoSexo"];

mysqli_query($conexao,"INSERT INTO alunos (nome,cidade,sexo) VALUES('$varAlunoNome',$varAlunoCidade','$varalunoSexo',)");

header("location:../index.php");

?>