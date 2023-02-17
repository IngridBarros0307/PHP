
<?php include("blades/footer.php") ?>

<form action="../controllers/cadastrar.php" method="post">

<label>Nome</label>
<input type="text" name="alunoNome">

<label>Cidade</label>
<input type="text" name="alunoCidade">


<label>Sexo</label>
<input type="text" name="alunoSexo">

<input type="submit" value="Cadatrar">

</form>

<?php include("blades/header.php"); ?>
