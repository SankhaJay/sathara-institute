<br>
<?php

echo validation_errors();
echo form_open('Admin/add_teacher');

echo form_label('Teacher\'s Name', 'name');
$data = array('name' => 'name', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Teacher ID', 'id');
$data = array('name' => 'id', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Teacher\'s Email', 'email');
$data = array('name' => 'email', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Teacher\'s Phone No', 'p_no');
$data = array('name' => 'p_no', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Subject', 'subject');
$data = array('name' => 'subject', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

$data = array('type' => 'submit', 'value' => 'Add Teacher', 'class' => "btn btn-primary", 'style' => 'margin-left:5;margin-top:5;');
echo form_submit($data);

echo form_close();

?>

