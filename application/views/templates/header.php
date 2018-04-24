<html>
  <head>
    <title>EZ Club</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">

    <style type="text/css">

  ::selection { background-color: #E13300; color: white; }
  ::-moz-selection { background-color: #E13300; color: white; }


body{
  background-color: #ecebe8;
}

  a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;


  }

  nav a.current {
 color: #002166;
 background-color: grey;
 font-weight: normal;
  }

  h1 {
    color: #444;
    background-color: transparent;
    border-bottom: 1px solid #D0D0D0;
    font-size: 19px;
    font-weight: normal;
    margin: 0 0 14px 0;
    padding: 14px 15px 10px 15px;
  }

  code {
    font-family: Consolas, Monaco, Courier New, Courier, monospace;
    font-size: 12px;
    background-color: #f9f9f9;
    border: 1px solid #D0D0D0;
    color: #002166;
    display: block;
    margin: 14px 0 14px 0;
    padding: 12px 10px 12px 10px;
  }

  #body1 {
    margin: 0 15px 0 15px;
  }
  #body2 {
    margin: 0 15px 0 15px;
  }

  p.footer {
    text-align: right;
    font-size: 11px;
    border-top: 1px solid #D0D0D0;
    line-height: 32px;
    padding: 0 10px 0 10px;
    margin: 20px 0 0 0;
  }

  #container {
    margin: 10px;
    border: 1px solid #D0D0D0;
    box-shadow: 0 0 8px #D0D0D0;
  }

  </style>


  </head>
  <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  
  <a class="navbar-brand"><img src="<?php echo site_url('/images/EZclub.png');?>" style="max-height: 100px; max-width: 100px;" /></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


<?php if($this->session->userdata('logged_in')) : ?>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>preshome">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>members">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>mycal/display">Calendar</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>fundmanager">Fund Manager</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>documents">Documents</a>
      </li>
    </ul>





<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
<script>
$(function(){
  $('a').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('current');
    }
  });
});
</script>






  <?php endif; ?>


  

      <ul class="nav navbar-nav navbar-right">
<?php if(!$this->session->userdata('logged_in')) : ?>
            <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/login">Login</a>
      </li>
            </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
      </li>

<?php endif; ?>


      <?php if($this->session->userdata('logged_in')) : ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>users/logout">logout</a>
      </li>
    </ul> 
    <?php endif; ?>
  </div>
</nav>



<div class="container">
      <!-- Flash messages  to check sessions-->
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif; ?>


    


</div>

