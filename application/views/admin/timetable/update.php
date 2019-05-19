<br>
<?php


echo form_open('Admin/update_slot');
echo "<h3>" . "Select a Slot to Update<br>" . "</h3>";
echo form_label('Select day', 'day');
$options = array(
    'Monday' => 'Monday',
    'Tuesday' => 'Tuesday',
    'Wednesday' => 'Wednesday',
    'Thursday' => 'Thursday',
    'Friday' => 'Friday',
    'Sunday' => 'Sunday',
    'name' => 'day'
);
echo form_dropdown('day', $options, 'name="day"', 'class="form-control"', 'id="exampleInputEmail1"', 'aria-describedby = "emailHelp"');

echo form_label('Select time slot', 'day');
$options = array(
    '2pm - 3pm' => '2pm - 3pm',
    '3pm - 4pm' => '3pm - 4pm',
    '4pm - 5pm' => '4pm - 5pm',
    '5pm - 6pm' => '5pm - 6pm'
);
echo form_dropdown('time', $options, 'name="time"', 'class="form-control"', 'id="exampleInputEmail1"', 'aria-describedby = "emailHelp"');

echo form_label('Select hall', 'l_hall');
$options = array(
    '001' => '001',
    '002' => '002'
);
echo form_dropdown('l_hall', $options, 'name="l_hall"', 'class="form-control"', 'id="exampleInputEmail1"', 'aria-describedby = "emailHelp"');

echo "<br><h3>" . "Enter New Details<br>" . "</h3>";

echo form_label('Select subject', 'subject');
$options = array(
    'Sinhala' => 'Sinhala',
    'English' => 'English',
    'Mathematics' => 'Mathematics',
    'History' => 'History',
    'Science' => 'Science',
    'Music' => 'Music',
    'Art' => 'Art'
);
echo form_dropdown('subject', $options, 'name="subject"', 'class="form-control"', 'id="exampleInputEmail1"', 'aria-describedby = "emailHelp"');

echo form_label('Teacher\'s name :', 't_name');
$data = array('name' => 't_name', 'class' => 'form-control', 'id' => "exampleInputEmail1", 'aria-describedby' => "emailHelp",);
echo form_input($data);



$data = array('type' => 'submit', 'value' => 'Edit slot', 'class' => "btn btn-primary", 'style' => 'margin-left:5;margin-top:5;');
echo form_submit($data);

echo form_close();

?>