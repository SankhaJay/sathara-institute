<br>

<div class=options_boards style="display: flex; justify-content: center;margin-top:20">
  <div class="card text-white bg-success mb-3" style="width: 20rem;margin-right:50">
    <div class="card-header">Member of our class?</div>
    <div class="card-body">
      <h4 class="card-title">Enter your Sathara ID and password</h4>
      <p class="card-text" style="align:center;">

        <?php
        echo form_open('pages/get_id');

        echo form_label('Enter user ID :', 'id');
        $data = array('name' => 'id', 'class' => 'form-control mr-sm-2', 'type' => "text", 'placeholder' => "ID");
        echo form_input($data);

        echo form_label('Enter password :', 'pass');
        $data = array('name' => 'pass', 'class' => 'form-control mr-sm-2', 'type' => "password", 'placeholder' => "password");
        echo form_input($data);

        $data = array('type' => 'submit', 'value' => 'Log In', 'class' => "btn btn-primary", 'style' => 'margin-left:5;margin-top:5;');
        echo form_submit($data);

        echo form_close();
        ?>

      </p>
    </div>
  </div>

  <div class="card text-white bg-success mb-3" style="width: 20rem;">
    <div class="card-header">Header</div>
    <div class="card-body">
      <h4 class="card-title">Success card title</h4>
      <p class="card-text"><button type="button" onclick="window.location.href = '';" class="btn btn-primary">Continue as a guest</button></p>
    </div>
  </div>
</div>