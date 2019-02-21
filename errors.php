<?php if(count($errors) >0): ?>
	<div class="error">
		<?php foreach ($errors as $error):?>
			<p><?php echo $error; ?></p>
		<?php endforeach ?>
		
	</div>
	<?php endif ?>
	<!DOCTYPE html>
	<html>
	<head>
		<style >
			.error{
				border: 1px solid #a94442;
				background-color: #a94442;
				border-radius: 5px;
				text-align: center;
			}
		</style>
	</head>
	<body>
	
	</body>
	</html>