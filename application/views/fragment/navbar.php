<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="<?php echo base_url()."index.php/hello"?>">About</a></li>
        <li><a href="<?php echo base_url()."index.php/Hello/data"?>">Projects</a></li>
        <li><a href="<?php echo base_url()."index.php/Hello/data1"?>">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>