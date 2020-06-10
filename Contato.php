<?php 
	require_once 'header.php';
?>
<H1><center><font color="#000000">CONTATO DOS CRIADORES</center></H1>
<?php 
	$CRIADORES = array (

				'0' => array(
						'nome'=> '',
						'e-mail'=> ''),
				'1' => array(
						'nome'=> 'LUCAS',
						'e-mail'=> 'lucas.silva2937@etec.sp.gov.br'),
				'2' => array(
						'nome'=> 'WALISSON',
						'e-mail'=> 'walisson.moraes@etec.sp.gov.br'),
				'3' => array(
						'nome'=> 'WALLACE',
						'e-mail'=> 'wallace.rodrigues6@etec.sp.gov.br'),
				'4' => array(
						'nome'=> 'WILL',
						'e-mail'=> 'will.alves@etec.sp.gov.br'),
	);

?>

<?php foreach ($CRIADORES as $chave => $valor) { ?>
	<li>
	<a href="<?php echo 'Contato.php?CRIADORES=' . $chave;?>" >
		<!-- TITULO DO LINK-->
		<h2><center><font color="#737373"><?php echo $valor['nome']; ?></font></center></h2>
	</a>
	</li>
<?php } ?>

<h2><center><font color="#000000">
NOME: 
</font></center></h2>

<h2><center><font color="#737373">
<?php echo $CRIADORES[$_GET['CRIADORES']]['nome']; ?>
</font></center></h2>

<h2><center><font color="#000000">
E-MAIL:
</font></center></h2>

<h2><center><font color="#737373">
<?php echo $CRIADORES[$_GET['CRIADORES']]['e-mail']; ?>
</font></center></h2>

<?php 
	require_once 'footer.php';
?>	