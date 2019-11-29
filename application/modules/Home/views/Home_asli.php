<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">

<style>
  .notes{
    font-size: 12px;
    color: red;
  }

  body:before {
  content: "";
  position: fixed;
  z-index: -1;
  background-size:cover;
  background-position:center top;
  display: block;
  background-image: url('assets/img/background1.jpg');
  width: 100%;
  height: 100%;
  filter: blur(3px) ;
  -webkit-filter: blur(3px) ;
}
</style>

</head>

<body>


<div class="modal fade" id="namapenumpangModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Nama </p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="telppenumpangModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Telepon </p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="jumlahpenumpangModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Jumlah Penumpang </p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="tanggalpesanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Tanggal Pemesanan </p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="kotaasalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Kota Asal </p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="kotatujuanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Kota Tujuan </p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="lokasipenjemputanModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Lokasi Penjemputan </p>
			</div>
		</div>
	</div>
</div>


  <div class="container">

    <div class="row justify-content-center">
     
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Pemesanan Tiket Travel</h1>
                  </div>
                  <form class="user" id="" method="post" action="" role="form" onSubmit="return validasi(this)">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="namapenumpang" name="namapenumpang" autocomplete="off" placeholder="Masukkan Nama Anda...">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="telppenumpang" name="telppenumpang" autocomplete="off" placeholder="Masukkan No Telp Anda...">
                    </div>
                    <div class="form-group" id="only-number">
                      <input type="text" class="form-control form-control-user" id="jumlahpenumpang" name="jumlahpenumpang" autocomplete="off" placeholder="Masukkan Jumlah Penumpang...">
                    </div>
                    <div class="form-group row" style="margin-left: 3px; margin-bottom: 1px;">
                      <label class="col-form-label">Tanggal Berangkat : </label>
                          <div class="form-group" style="margin-left: 5px;">
                            <input class="form-control" type="date" name="tanggalpesan" maxlength="30" placeholder="">
                          </div>
                    </div>
                    <div class="form-group">
                    <select class="form-control animated--fade-in" title="Kota Asal" name="kotaasal">
                        <option class="dropdown-item" value = ""> Kota Asal </option>
                        <option  value = "Brebes">Brebes</option>
                      
                    </select>
                    </div>
                    <div class="form-group">
                    <select class="form-control animated--fade-in" title="Kota Tujuan" name="kotatujuan">
                        <option class="dropdown-item" value = ""> Kota Tujuan </option>
                        <option  value = "Indramayu">Indramayu</option>
                      
                    </select>
                    </div>
                    <!-- <div class="form-group">
                      <div class="dropdown mb-4">
                      <button class="form-control btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Kota Tujuan
                      </button>
                      <div class="dropdown-menu animated--fade-in">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                      </div>
                    </div> -->
                    <div class="form-group">
                      <label>Lokasi Penjemputan : </label>
                      <textarea class="form-control" id="lokasipenjemputan" name="lokasipenjemputan" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success btn-user btn-block">Pesan </button>
                    <hr>
                    <div class="notes">
                      <p>*pemberangkatan travel setiap hari Senin dan Kamis.</p>
                      <p>*pemberangkatan travel dari Brebes pada waktu pagi hari.</p>
                      <p>*pemberangkatan travel dari Indramayu pada waktu malam hari.</p>
                    </div>
                  </form>
                </div>
             
            </div>
          </div>
        </div>

     

    </div>

  </div>

  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>
  <script type="text/javascript">
	function validasi(form){
		if (form.namapenumpang.value == ""){
		$('#namapenumpangModal').modal('show');
			setTimeout(function(){
			$('#namapenumpangModal').modal('hide')
			}, 1000);
		form.namapenumpang.focus();
		return (false);

		}

		if (form.telppenumpang.value == ""){
		$('#telppenumpangModal').modal('show');
		setTimeout(function(){
		$('#telppenumpangModal').modal('hide')
		}, 1000);
		form.telppenumpang.focus();
		return (false);
		}

		if (form.jumlahpenumpang.value == ""){
		$('#jumlahpenumpangModal').modal('show');
		setTimeout(function(){
		$('#jumlahpenumpangModal').modal('hide')
		}, 1000);
		form.jumlahpenumpang.focus();
		return (false);
		}

		if (form.tanggalpesan.value == ""){
		$('#tanggalpesanModal').modal('show');
		setTimeout(function(){
		$('#tanggalpesanModal').modal('hide')
		}, 1000);
		form.tanggalpesan.focus();
		return (false);
    }

    if (form.kotaasal.value == ""){
		$('#kotaasalModal').modal('show');
		setTimeout(function(){
		$('#kotaasalModal').modal('hide')
		}, 1000);
		form.kotaasal.focus();
		return (false);
    }
    
    if (form.kotatujuan.value == ""){
		$('#kotatujuanModal').modal('show');
		setTimeout(function(){
		$('#kotatujuanModal').modal('hide')
		}, 1000);
		form.kotatujuan.focus();
		return (false);
    }
    
    if (form.lokasipenjemputan.value == ""){
		$('#lokasipenjemputanModal').modal('show');
		setTimeout(function(){
		$('#lokasipenjemputanModal').modal('hide')
		}, 1000);
		form.lokasipenjemputan.focus();
		return (false);
		}

  }
    $(function() {
      $('#only-number').on('keydown', '#jumlahpenumpang', function(e){
          -1!==$
          .inArray(e.keyCode,[46,8,9,27,13,110,190]) || /65|67|86|88/
          .test(e.keyCode) && (!0 === e.ctrlKey || !0 === e.metaKey)
          || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey|| 48 > e.keyCode || 57 < e.keyCode)
          && (96 > e.keyCode || 105 < e.keyCode) && e.preventDefault()
      });
    })
  </script>

</body>

</html>
