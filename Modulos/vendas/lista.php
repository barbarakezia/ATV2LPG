<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA VENDAS </h1>
<?php 
$vendas = array (
array ("Nome produto" => "Controle xbox one", "vendedor" => "Tiago", "cliente" => "Henrique", "preço" => 500,"id_produto" => 415645),
array ("Nome produto" => "Mouse Gamer", "vendedor" => "Tiago", "cliente" => "Jessica", "preço" => 120 ,"id_produto" => 418565),
array ("Nome produto" => "Bola de futboll", "vendedor" => "Mauro", "cliente" => "Elaine", "preço" => 50 ,"id_produto" =>456461),
array ("Nome produto" => "Sabão em pó", "vendedor" => "João", "cliente" => "Luana", "preço" => 5.05 ,"id_produto" => 987456),
array ("Nome produto" => "Chuteira", "vendedor" => "Mauro", "cliente" => "Tiago", "preço" => 150 ,"id_produto" => 517489)
);
?>

<table align = "center" border>
<tr>
<th align = "center">Nome produto </th>
<th align = "center">Vendedor</th>
<th align = "center">Cliente </th>
<th align = "center">Preço</th>
<th align = "center">ID</th>
</tr>

<?php
foreach($vendas as $vendas){

?>

<tr> 
<td align = "center"><?php echo $vendas['Nome produto']; ?> </td>
<td align = "center"><?php echo $vendas['vendedor']; ?> </td>
<td align = "center"><?php echo $vendas['cliente']; ?> </td>
<td align = "center"><?php echo $vendas['preço']; ?> </td>
<td align = "center"><?php echo $vendas['id_produto']; ?> </td>
</tr>

<?php }?>
</table>

<br/>
<a href = "?modulo=vendas&acao=adcionar"> Adcionar </a>




</body>
</html>