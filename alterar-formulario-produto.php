

<?php include("cabecalho.php");
include ("conecta.php");
include("BD-categoria.php");
include("BD-produto.php");

$id = $_POST['id'];
$produto = buscaProduto($conexao,$id);
$categorias = ListaCategorias($conexao);
//operador ternário
$usado = $produto ['usado']? "checked='checked'" : ""; //si for usado iqual a true retorna checked se não retorna ""
?>

<h2 class="fa fa fa-edit titulo" > Alterando o Produto</h2> 		
	  	 
<form  action="altera-produto.php" method="POST"></br>
	<div class="form-row"> 
		 <!-- esconde o id - hidden -->
		 <div>
		 	<input   type="hidden" name="id" value="<?=$produto['id'] ?>"></br>
		 </div>	

		</div>	
		
		<table class="table">
			<?php include("produto-formulario-base.php") ?>

		</table></br>	

	     <!-- botão Alterar e Cancelar -->

		<div class="form-group col-sm-12">
				<button class="btn btn-primary" type="submit">Alterar</button> 
				<a href="produto-formulario.php" method="POST" type="button" class="btn btn-info" >Cancelar</a>
		</div></br>	
		<div  > 
					
			
						
		</div></br> 
</form>	  
<!-- Criação da Lista de Formulário  - pegando do Form produto-lista.php     -->

<table ></br>
	
		<?php 

			include("produto-lista.php");


		?>

</table>
	   	
<?php include("rodape.php"); ?>

</html>	 

