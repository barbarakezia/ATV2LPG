<html>

<head>


</head>
<body>
<h1 align = "center"> TABELA VENDEDORES </h1>
<?php
$vendedores = array (
array ("Nome" => "Tiago", "CPF" => 78524159635, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "SIM" ),
array ("Nome" => "João", "CPF" => 11527748652, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "SIM" ),
array ("Nome" => "Mauro", "CPF" => 5588741230, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "SIM" ),
array ("Nome" => "Fernanda", "CPF" => 10448965211, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "NÃO" ),
array ("Nome" => "Fernando", "CPF" => 55419638521, "Contato" => 96999999999, "Email" => "exemplo@gmail.com" ,"Ativo" => "NÃO" )

);
?>

<table align = "center" border>
<tr>
<th align = "center">Nome </th>
<th align = "center">CPF </th>
<th align = "center">Contato </th>
<th align = "center">Email </th>
<th align = "center">Ativo </th>
</tr>

<?php
foreach($vendedores as $vendedores){
?>

<tr> 
<td align = "center"><?php echo $vendedores['Nome']; ?> </td>
<td align = "center"><?php echo $vendedores['CPF']; ?> </td>
<td align = "center"><?php echo $vendedores['Contato']; ?> </td>
<td align = "center"><?php echo $vendedores['Email']; ?> </td>
<td align = "center"><?php echo $vendedores['Ativo']; ?> </td>
</tr>

<?php }?>
</table>

<br/><a href  = "?modulo=vendedores&acao=adcionar"> Adcionar</a>


</body>
</html>