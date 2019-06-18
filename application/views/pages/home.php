<br>

<div class="jumbotron">
  <h1 class="display-3">Welcome to SATHARA Institute</h1>
  <p class="lead"></p>
  <hr class="my-4">
  <h3>We provide you expert tution from experienced school teachers.</h3>
  
</div>


<h2>Login to our system and explore our services.</h2>
<hr>

<div class=options_boards style="display: flex; justify-content: center;margin-top:20">
  <div class="card text-white bg-success mb-3" style="width: 40rem;">
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

  <p class="lead">
 <a class="btn btn-primary btn-lg" href="#" role="button" style="width: 40rem;margin-right:10;margin-left:10;margin-top:150;height:100;font-size:45;">or Continue as a Guest User</a>
  </p>
