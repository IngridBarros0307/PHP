<?php include("blades/header.php") ?>

<form action="../controllers/cadastrar.php" method="post">

    <label>Nome</label>
    <input type="text" name="alunoNome"><br>
    <label>Cidade</label>
    <input type="text" name="alunoCidade"><br>
    <label>Sexo</label>
    <input type="text" name="alunoSexo"><br>
    <input type="submit" value="Cadastrar">

</form>
    
<?php include("blades/footer.php") ?>