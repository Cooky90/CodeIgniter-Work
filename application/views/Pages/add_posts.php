<?php
$attr = array(
	'id' => 'add_posts',
	'class' => 'm-top-20'
);

$title = array(
	'name' => 'title',
	'type' => 'text',
	'id' => 'title',
	'class' => 'form-control',
	'placeholder' => 'Enter a title for the post'
);

$body = array(
	'name' => 'body',
	'type' => 'text',
	'id' => 'body',
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
<?php
echo form_open('pages/form_posted',$attr);
echo form_input($title);
echo form_textarea($body);
echo form_submit($submit);
echo form_close();
?>
</div>