
<?php include_once'cabecalho.php'; ?>
<script>
    function excluir(id) {
        if(confirm('Deseja realmente excluir')){
            location.href='excluir.php?id='+id;
        }
    }

</script>
<h4>Consulta por Nome</h4>
<form action="consultar.php" method="get">
  Nome:<br/>
  <input type="text"
  placeholder="Digite o nome para buscar"
  name="nome" required />
  <br/><br/>
  <input type="submit" value="Buscar"/>

</form>
<?php
if(isset($_GET["nome"])){
// pegar o campo nome da tela
$nome = $_GET["nome"];

// abrir a conexão com o banco
include_once'./conexao.php';

// montar a instrução sql para buscar a informação
$sql = "select * from cliente where nome like'".$nome."%'";

// mysql_query() -> executa a instrução no banco
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
?>
<table class="table">
    <tr>
        <td>Nome do Autor/Usuário</td>
        <td>Email</td>
        <td>Nome da Obra</td>
        <td>Tamanho da Obra</td>
        <td>Redes Sociais</td>
        <td>Sinopse da Obra</td>
        <td>Senha</td>
        <td>Data de Cadastro</td>
        <td>Editar</td>
        <td>Excluir</td>
        
    </tr>
    <?php
while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row["nome"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["nomeobra"]; ?></td>
        <td><?php echo $row["tamanho"]; ?></td>
        <td><?php echo $row["redessociais"]; ?></td>
        <td><?php echo $row["sinopse"]; ?></td>
        <td><?php echo $row["senha"]; ?></td>
        <td><?php echo $row["dtcadastro"]; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $row["idcliente"]; ?>)"> 
           <img src="./img/editar.jpg"/> </a> </td>
        </td>
         <td>
            <a href="#" onclick="excluir(<?php echo $row['idcliente']; ?>)">
               <img src="./img/excluir.jfif"/>
            </a> 
        </td> 
    </tr>
    <?php
    }
    }else{
        echo" Não existe cliente com este nome.";
    }
    }
    include_once'./rodape.php';
?>
