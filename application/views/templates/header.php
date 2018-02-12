<html>
  <head>
    <title>EZ Club</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">EZClub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>PresHome">PresHome</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Members">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Calendar">Calendar</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>FundManager">Fund Manager</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Documents">Documents</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>Settings">Settings</a>
      </li>
            </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>testing">TESTING</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>