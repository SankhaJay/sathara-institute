<?php
echo validation_errors();
echo form_open('pages/data_submitted');

echo form_label('Your ID:', 'id');
$data = array('name' => 'id', 'class' => 'form-control', 'id' => "readOnlyInput", 'aria-describedby' => "emailHelp",  'placeholder' => '','readonly'=>$id,'value' => $id);
echo form_input($data);

echo form_label('Your full name :', 'name');
$data = array('name' => 'name', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Your email address (if any) :', 'email');
$data = array('name' => 'email', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Your school :', 'school');
$data = array('name' => 'school', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Your grade:', 'grade');
$data = array('name' => 'grade', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Your new password:', 'pass');
$data = array('name' => 'pass', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Your parent\'s name :', 'p_name');
$data = array('name' => 'p_name', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

echo form_label('Parent\'s contact number :', 'p_no');
$data = array('name' => 'p_no', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp");
echo form_input($data);

$data = array('type' => 'submit', 'value' => 'Submit', 'class' => "btn btn-primary", 'style' => 'margin-left:5;margin-top:5;');
echo form_submit($data);

echo form_close();

?>