<div>
	<h2>Blog User</h2>
</div>
<div>
	<?php 
	debug($user);
		if(isset($user)){
			?>
			<dl>
				<dt>Name</dt>
				<dd><?php echo $user['User']['name'];?></dd>
			</dl>	
		<?php 
		}
		else{?>
			<h4><i>Mi estimado, ud. pasó ningún parámetro</i></h4>	
		<?php
		}
	?>
</div>