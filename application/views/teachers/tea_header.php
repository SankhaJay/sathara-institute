<html>
<body background="style/school-books-on-desk--education-concept-871454068-5b548900c9e77c005b04fc8c.jpg">
<head>
    <title>SATHARA</title>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>/">SATHARA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>/">Results <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Time_Table/view_student">Time Table</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>Notice/view">Notice Board</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>/about">Explore</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <button type="button" class="btn btn-primary btn-lg" style="margin-left:5">Welcome <?php echo $name;?></button>
    <button type="button" class="btn btn-danger" style="margin-left:5" onclick="location.href='<?php echo base_url();?>pages/logout'">Logout</button>
  </div>
</nav>