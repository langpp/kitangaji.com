<!DOCTYPE html>
<html>
<?php echo $page["head"]; ?>
<body >
	<div id="app">
		<div class="main-wrapper">
			<?php echo $page["header"]; ?>
			<?php echo $page['main_js'];?>
			<?php echo $page["sidebar"]; ?>
			<?php echo $content;?>
			<?php echo $page["footer"]; ?>
		</div>
	</div>
</body>
</html>