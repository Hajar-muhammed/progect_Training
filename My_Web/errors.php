 <?php if (count($errors)>0 ) :?>
 	<!DOCTYPE html>
 	<html>
 	<head>
 		<title></title>
 	</head>
 	<body>
 	<div class="error">
 		<?php foreach ($errors as  $error) : ?>
 			<p><?php echo $error ;?></p>
 		<?php endforeach; ?>
 	</div>
 	</body>
 	</html>
 	<?php endif; ?>