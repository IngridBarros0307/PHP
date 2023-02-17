<?php include("models/conexao.php") ?>
<?php include("views/blades/header.php") ?>

<a href="#">Cadastrar</a>
<hr>
<input type="text" size="25"> <input type="Submit" value="Buscar">



<table border="1" width="500px">
    <tr>
        <td>Frase</td>
         <td>Editar</td>
          <td>Excluir</td>
    </tr>
      <tr>
        <td>Ingrid</td>
         <td><a href="#">Editar</a></td>
          <td><a href="#">Excluir</a></td>
    </tr>


<?php 
$query = mysqli_query($conexao, "SELECT * FROM alunos");
while($exibe = mysqli_fetch_array($query)){
    ?>
 <tr>
        <td><?php echo $exibe[1]?></td>
         <td><a href="#">Editar</a></td>
          <td><a href="controllers/deletar.php?id_aluno==<?php echo $exibe[0]?>">Excluir</a></td>
    </tr>

<?php } ?>

</table>
<?php include("views/blades/footer.php") ?>