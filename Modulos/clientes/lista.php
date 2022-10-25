<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA CLIENTES </h1>
<?php
$clientes = array (
array ("Nome" => "Tiago", "CPF" => 54021054213 , "Contato" => 96999999999, "Cidade" => "Macapa" ,"Bairro" => "Congos" ),
array ("Nome" => "Henrique", "CPF" => 58536574194 , "Contato" => 96999999999, "Cidade" => "Macapa" ,"Bairro" => "Macapaba" ),
array ("Nome" => "Luana", "CPF" => 78520416958 , "Contato" => 96999999999, "Cidade" => "Santana" ,"Bairro" => "Paraiso" ),
array ("Nome" => "Elaine", "CPF" => 64165826145 , "Contato" => 96999999999, "Cidade" => "Santana" ,"Bairro" => "Provedor" ),
array ("Nome" => "Jessica", "CPF" => 88524416957 , "Contato" => 96999999999, "Cidade" => "Santana" ,"Bairro" => "Centro" )
);
?>
<table align = "center" border>
<tr>
<th align = "center">Nome </th>
<th align = "center">CPF </th>
<th align = "center">Contato </th>
<th align = "center">Cidade </th>
<th align = "center">Bairro </th>
</tr>

<?php 
foreach($clientes as $clientes){
?>

<tr> 
<td align = "center"><?php echo $clientes['Nome']; ?> </td>
<td align = "center"><?php echo $clientes['CPF']; ?> </td>
<td align = "center"><?php echo $clientes['Contato']; ?> </td>
<td align = "center"><?php echo $clientes['Cidade']; ?> </td>
<td align = "center"><?php echo $clientes['Bairro']; ?> </td>
</tr>

<?php }?>

</table>



<br/><a href  = "?modulo=clientes&acao=adcionar"> Adcionar</a>


</body>
</html>