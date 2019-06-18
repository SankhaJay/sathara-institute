<br>
<?php

echo validation_errors();
echo form_open('Admin/add_notice');

echo form_label('Title', 'title');
$data = array('name' => 'title', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Content', 'body');
$data = array('name' => 'body', 'class' => 'form-control', 'id' => 'exampleTextarea','rows'=>'5');
echo form_textarea($data);

$data = array('type' => 'submit', 'value' => 'Submit', 'class' => "btn btn-primary", 'style' => 'margin-left:5;margin-top:5;');
echo form_submit($data);

echo form_close();

?>

