<?php
$attr = array(
	'id' => 'add_posts',
	'class' => 'm-top-20'
);

$title = array(
	'name' => 'title',
	'type' => 'text',
	'id' => 'title',
	'value' => $get_posts['title'],
	'class' => 'form-control',
	'placeholder' => 'Enter a title for the post'
);

$body = array(
	'name' => 'body',
	'type' => 'text',
	'id' => 'body',
	'value' => $get_posts['body'],
	'class' => 'form-control',
	'placeholder' => 'Enter a body for the post'
);

$id = array(
	'post_id' => $get_posts['id'] 
);

$submit = array(
	'name' => 'updatepost',
	'value' => 'Update Post',
	'class' => 'btn btn-primary'
);

?>

<div class="col-md-8 m-top-50">
	<h2>Edit a Post</h2>
<?php
//echo validation_errors();

echo form_open('pages/update_post',$attr);
echo form_input($title);
echo '<div class="errors">'.form_error('title').'</div>';
echo form_textarea($body);
echo '<div class="errors">'.form_error('body').'</div>';
echo form_submit($submit);
echo form_hidden($id);
echo form_close();
?>
</div>