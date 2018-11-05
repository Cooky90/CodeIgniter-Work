<?php

foreach($get_posts as $gp):
	$body = word_limiter($gp['body'], 25);

?>

<div class="col-md-8 m-top-40">
	<small><?php echo $gp['created_at']; ?></small>
	<h2><?php echo $gp['title']; ?></h2>
	<p><?php echo $body; ?></p>
	<?php echo anchor('pages/view_post/'.$gp['id'], 'Read More'); ?>
</div>

<?php
endforeach;
?>