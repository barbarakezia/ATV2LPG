<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA CATEGORIAS </h1>






<?php 

$Categorias = array(
array("Categoria" => "Eletronico", "Produto" => "Controle xbox one", "id_produto" => 415645, "Preço" => 500, "Quantidade" => 10   ),
array("Categoria" => "Eletronico", "Produto" => "Mouse Gamer", "id_produto" => 418565, "Preço" => 120, "Quantidade" => 50   ),
array("Categoria" => "Esporte", "Produto" => "Bola de Futbool", "id_produto" => 456461, "Preço" => 50, "Quantidade" => 40   ),
array("Categoria" => "Limpeza", "Produto" => "sabão em pó", "id_produto" => 987456, "Preço" => 5.50, "Quantidade" => 40  ),
array("Categoria" => "esporte", "Produto" => "chuteira", "id_produto" => 517489, "Preço" => 150, "Quantidade" => 20   )
);
?>
<table border align = "center">
<tr>
<th> Categoria </th>
<th> Produto </th>
<th> ID</th>
<th> Preço </th>
<th> Quantidade </th>
</tr>


<?php
foreach ($Categorias as $Categorias){
	
?>


<tr> 
<td ALIGN = "center"> <?php echo $Categorias['Categoria']; ?>  </td>
<td ALIGN = "center"> <?php echo $Categorias['Produto']; ?> </td>
<td ALIGN = "center"> <?php echo $Categorias['id_produto'];?></td>
<td ALIGN = "center"> <?php echo $Categorias['Preço'];?></td>
<td ALIGN = "center"> <?php echo $Categorias['Quantidade'];?></td>

</tr>







<?php } ?>
</table>

<br/><a href  = "?modulo=categorias&acao=adcionar"> Adcionar</a>



</body>
</html>