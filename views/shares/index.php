
<div>

	<?php foreach($viewmodel as $item): ?>
		<div class="well">
			<h3 class="cen"><?php echo $item['title']; ?></h3>
			<p class="cen"><small><?php echo $item['create_date']; ?></small></p>
			<br>
			<p class="cen"><?php echo $item['body']; ?></p>
		<?php if(isset($_SESSION['is_logged_in'])): ?>
			<a href="<?php echo ROOT_PATH; ?>shares/add" class="dugme">Share Something</a>
		<?php else: ?>
			<p style="color: red" class="cen">You must be logged in to leave a comment!</p>
		<?php endif; ?>
			
		</div>
	<?php endforeach; ?>
</div>