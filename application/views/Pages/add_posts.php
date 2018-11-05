<?php
$attr = array(
	'id' => 'add_posts',
	'class' => 'm-top-20'
);

$title = array(
	'name' => 'title',
	'type' => 'text',
	'id' => 'title',
	'value' => set_value('title'),
	'class' => 'form-control',
	'placeholder' => 'Enter a title for the post'
);

$body = array(
	'name' => 'body',
	'type' => 'text',
	'id' => 'body',
	'value' => set_value('body'),
	'class' => 'form-control',
	'placeholder' => 'Enter a body for the post'
);

$submit = array(
	'name' => 'submitpost',
	'value' => 'Submit Post',
	'class' => 'btn btn-primary'
);

?>

<div class="col-md-8 m-top-50">
	<h2>Add a Post</h2>
<?php
//echo validation_errors();

echo form_open('pages/form_posted',$attr);
echo form_input($title);
echo '<div class="errors">'.form_error('title').'</div>';
echo form_textarea($body);
echo '<div class="errors">'.form_error('body').'</div>';
echo form_submit($submit);
echo form_close();
?>
</div>