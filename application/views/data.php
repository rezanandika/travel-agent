<?php
include('fragment/header.php');
include('fragment/navbar.php');
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="https://placehold.it/1200x400?text=IMAGE" alt="Image">
        <div class="carousel-caption">
          <h3>Sell $</h3>
          <p>Money Money.</p>
        </div>      
      </div>

      <div class="item">
        <img src="https://placehold.it/1200x400?text=Another Image Maybe" alt="Image">
        <div class="carousel-caption">
          <h3>More Sell $</h3>
          <p>Lorem ipsum...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Apa Kabar?</h3><br>
  <div class="row">
    <div class="col-sm-6"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="col-sm-6">
      <div class="well">

      <table cellspacing="0" cellpadding="4" class="table table-bordered">
      <p><b>Daftar Pasien Rawat Jalan</b></p>
    <tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>telp</th>
      <th>pekerjaan</th>
    </tr>

    <?php 
    foreach($pasien as $p){ ?>
    <tr>
      <td><?php echo $p->nama ?></td>
      <td><?php echo $p->alamat ?></td>
      <td><?php echo $p->telp ?></td>
      <td><?php echo $p->pekerjaan ?></td>
    </tr>
    <?php } ?>
  </table>
  </br>
  <?php 
  ?>
      </div>
      <div class="well">
       <p>Some text..</p>
      </div>
	  <div class="well">
       <p>Some text..</p>
      </div>
    </div>
  </div>
</div><br>

<?php
include('fragment/footer.php');
?>