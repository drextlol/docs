<div class="center">
	<div class="menu">
		<?php include("layout/menu.php"); ?>
	</div>

	<div class="conteudo">
	<?php
		if(isset($_GET['folder']) && isset($_GET['page'])){
			$folder = $_GET['folder'];
			$page	= $_GET['page'];
		} else {
			$folder = 'material';
			$page = 'home';
		}
			include($folder . '/' . $page . '.php');
	?>
	</div>
	<div style="clear:both;">
</div>