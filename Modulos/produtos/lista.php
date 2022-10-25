<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA PRODUTOS </h1>
<?php 

$produtos = array (
array ("Nome" => "Controle xbox one", "Quantidade" => 10 , "Categoria" => "Eletronicos", "Preço" => 500.00 , "id_produto" => 415645 ),
array ("Nome" => "Mouse Gamer", "Quantidade" => 50 , "Categoria" => "Eletronicos", "Preço" => 120.00 , "id_produto" => 418565 ),
array ("Nome" => "Bola de Futbool", "Quantidade" => 40 , "Categoria" => "Esporte", "Preço" => 50 , "id_produto" => 456461 ),
array ("Nome" => "Sabão em Pó", "Quantidade" => 40 , "Categoria" => "Limpeza", "Preço" => 5.05 , "id_produto" => 987456 ),
array ("Nome" => "Chuteira", "Quantidade" => 20 , "Categoria" => "Esporte", "Preço" => 150.00 , "id_produto" => 517489 )
);
?>

<table align = "center" border>
<tr> 
<th align = "center">Nome</th>
<th align = "center">Quantidade</th>
<th align = "center">Categoria</th>
<th align = "center">Preço</th>
<th align = "center">ID</th>
</tr>

<?php
foreach($produtos as $produtos){

?>

<tr> 
<td align = "center"><?php echo $produtos['Nome']; ?></th>
<td align = "center"><?php echo $produtos['Quantidade']; ?></th>
<td align = "center"><?php echo $produtos['Categoria']; ?></th>
<td align = "center"><?php echo $produtos['Preço']; ?></th>
<td align = "center"><?php echo $produtos['id_produto']; ?></th>
</tr>


<?php } ?>
</table>

<br/><a href  = "?modulo=produtos&acao=adcionar"> Adcionar</a>


</body>
</html>