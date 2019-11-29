<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Travel Agent - Login</title>

  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
  <link href="<?php echo base_url();?>assets/css/fonts-googleapis.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url();?>assets/vendor/clockpicker/dist/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>assets/vendor/clockpicker/dist/jquery-clockpicker.min.css" rel="stylesheet" type="text/css"> -->
  <link href="<?php echo base_url();?>assets/vendor/clockpicker/src/clockpicker.css" rel="stylesheet" type="text/css">

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
<div class="modal fade" id="tanggalberangkatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Tanggal Berangkat </p>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="jamberangkatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
	<div class="modal-dialog modal-small ">
		<div class="modal-content">
			<div class="modal-body text-center">
				<p>Anda belum mengisikan Jam Berangkat </p>
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
                  <form class="user" id="" method="post" action="<?php echo base_url('Home/insert');?>" role="form" onSubmit="return validasi(this)">
                    <div class="form-group">
                      <input type="text" class="form-control" id="namapenumpang" name="namapenumpang" autocomplete="off" placeholder="Masukkan Nama.." style=" border-radius: 25px;">
                    </div>
                    <div class="form-group btn-icon-split">
                   
                    <span class="icon text-white-30" style="border-radius: 25px">
                      <a>+62</a>
                    </span>
                      <input type="number" class="form-control" id="telppenumpang" name="telppenumpang" autocomplete="off" onKeyPress="if(this.value.length==12) return false;" maxlength="12" placeholder="Masukkan No Telp.." style="border-radius: 25px; margin-right: 0;">
                     
                    </div>
                    <div class="form-group" id="only-number">
                      <input type="tel" class="form-control" id="jumlahpenumpang" name="jumlahpenumpang" autocomplete="off" placeholder="Masukkan Jumlah Penumpang.." style=" border-radius: 25px;">
                    </div>
                    <div class="form-group" style="margin-left: 1px; margin-bottom: 1px;">
                      <label class="col-form-label" style="margin-right: 2px;">Tanggal Berangkat : </label>
                          <div class="form-group">
                            <input class="form-control" type="date" name="tanggalberangkat" id="tanggalberangkat" autocomplete="off" maxlength="30" style=" border-radius: 25px;">
                          </div>
                    </div>

                    <div class="form-group clockpicker" style="margin-left: 1px; margin-bottom: 1px;">
                      <label class="col-form-label" style="margin-right: 2px;">Jam Berangkat : </label>
                          <div class="form-group">
                            <input class="form-control" id="jamberangkat" name="jamberangkat" maxlength="30" autocomplete="off" placeholder="" style=" border-radius: 25px;">
                          </div>
                    </div>

                    <div class="form-group">
                    <select class="form-control animated--fade-in" title="Kota Asal" name="kotaasal" >
                        <option class="dropdown-item" value = ""> Kota Asal </option>
                        <?php foreach($kota_asal as $k){ ?>
                        <option value="<?php echo $k['id_kota_asal'];?>"><?php echo $k['nama_kota_asal'];?></option>
                        <?php }?>
                    </select>
                    </div>
                    <div class="form-group">
                    <select class="form-control animated--fade-in" title="Kota Tujuan" name="kotatujuan">
                    <option class="dropdown-item" value = ""> Kota Tujuan </option>
                        <?php foreach($kota_tujuan as $k){ ?>
                        <option value="<?php echo $k['id_kota_tujuan'];?>"><?php echo $k['nama_kota_tujuan'];?></option>
                        <?php }?>
                      
                    </select>
                    </div>

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
  <script src="<?php echo base_url();?>assets/vendor/clockpicker/src/clockpicker.js"></script>
<!-- <script src="<?php echo base_url();?>assets/vendor/clockpicker/dist/jquery-clockpicker.min.js"></script> -->
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

		if (form.tanggalberangkat.value == ""){
		$('#tanggalberangkatModal').modal('show');
		setTimeout(function(){
		$('#tanggalberangkatModal').modal('hide')
		}, 1000);
		form.tanggalberangkat.focus();
		return (false);
    }

    if (form.jamberangkat.value == ""){
		$('#jamberangkatModal').modal('show');
		setTimeout(function(){
		$('#jamberangkatModal').modal('hide')
		}, 1000);
		form.jamberangkat.focus();
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

  <script type="text/javascript">
    var input = $('#jamberangkat').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });
  </script>
  <script>
    $(function(){
        var dtToday = new Date();
        
        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if(month < 10)
            month = '0' + month.toString();
        if(day < 10)
            day = '0' + day.toString();
        
        var maxDate = year + '-' + month + '-' + day;
        $('#tanggalberangkat').attr('min', maxDate);
    });
  </script>

</body>

</html>
