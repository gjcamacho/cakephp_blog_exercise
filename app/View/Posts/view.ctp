<div>
	<h2>Blog Post</h2>
</div>
<div>
	<?php 
		debug($post);
		if(isset($post)){
			?>
			<dl>
				<dt>Titulo</dt>
				<dd><?php echo $post['Post']['title'];?></dd>
			</dl>	
		<?php 
		}
		else{?>
			<h4><i>Mi estimado, ud. pasó ningún parámetro</i></h4>	
		<?php
		}
	?>
</div>