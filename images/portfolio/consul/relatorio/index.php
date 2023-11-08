<?php 

$servidor = "177.70.2.62";
$user = "boxingday";
$senha = "boxingDay1530#";
$db = "boxingday";

$conexao = mysql_connect($servidor,$user,$senha) or die (mysql_error());
$dbc = mysql_select_db($db, $conexao) or die(mysql_error());

$query = mysql_query("SELECT * FROM entries") or die(mysql_error());
 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Estatística App Natal - Eudora</title>
</head>

<body>
	<div class="content">
        <h3>Diário</h3>
    
        <table width="80%" align="center" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Cpf</td>
                    <td>Telefone</td>
                </tr>
            </thead>
            <tbody>
                <?php while($res = mysql_fetch_object($query)): ?>
                    <tr>                        
                        <td><?php echo utf8_decode($res->fullname); ?><?php //echo date('d/m/Y', strtotime($data["data"])); ?></td>
                        <td><?php echo $res->email; ?><?php //echo $usuarios->usuarios; ?></td>
                        <td><?php echo $res->document; ?><?php //echo $envios->envios; ?></td>
                        <td><?php echo $res->phone; ?><?php //echo $totalunico; ?></td>                       
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</body>
</html>