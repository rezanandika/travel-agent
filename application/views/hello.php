<?php
include('fragment/header.php');
include('fragment/navbar.php');
?>

</br>
</br>


<div class="container text-center">    
  <h3>Hari Ini Baik?</h3><br>
  <div class="row">
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 2</p>    
    </div>
    <div class="row">
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Project 3</p>    
    </div>
    <div class="col-sm-6">
      <div class="well">

      <table cellspacing="0" cellpadding="4" class="table table-bordered">
             <p><b>Daftar Dokter Umum</b></p>
    <tr align="left">
      <th>Nama</th>
      <th>Alamat</th>
      <th>telp</th>
    </tr>
    <?php foreach($results as $d){ ?>
    <tr align="left">
      <td><?php echo $d->nama ?></td>
      <td><?php echo $d->alamat ?></td>
      <td><?php echo $d->telp ?></td>
    </tr>
    <?php } ?>
  </table>

  <?php 
  echo $links;
  //echo $this->pagination->create_links();  ?>
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