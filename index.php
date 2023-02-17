<?php include("models/conexao.php") ?>
<?php include("views/blades/header.php") ?>

<a href="views/cadastro.php">Cadastrar</a>
<hr>
<input type="text" size="58px"><input type="submit" value="Buscar">
<table border="1" width="500px">
    <tr>
        <td><b>Frase</b></td>
        <td><b>Editar</b></td>
        <td><b>Excluir</b></td>
    </tr>

<?php 
$query = mysqli_query($conexao, "SELECT * FROM alunos ORDER BY codigo DESC");
while($exibe = mysqli_fetch_array($query)){
?>

    <tr>
        <td><?php echo $exibe[1] ?></td>
        <td><a href="">Editar</a></td>
        <td><a href="controllers/deletar.php?id_aluno=<?php echo $exibe[0] ?>">Excluir</a></td>
    </tr>

<?php } ?>

</table>


<?php include("views/blades/footer.php") ?>