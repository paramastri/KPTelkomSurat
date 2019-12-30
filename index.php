<!DOCTYPE html>
<html>
<head>
	<title>Generate Nomor Surat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<link rel="icon" href="favicon.png" type="png" sizes="16x16">

	<style>
		@font-face {
		font-family:'GothamRounded-Medium';
		src:url('https://assets.lydian.io/fonts/GothamRounded-Medium.eot?#iefix') format('embedded-opentype'), url('https://assets.lydian.io/fonts/GothamRounded-Medium.otf') format('opentype'), url('https://assets.lydian.io/fonts/GothamRounded-Medium.woff') format('woff'), url('https://assets.lydian.io/fonts/GothamRounded-Medium.ttf') format('truetype'), url('https://assets.lydian.io/fonts/GothamRounded-Medium.svg#GothamRounded-Medium') format('svg');
		font-weight:400;
		font-style:normal
		}
		@font-face {
		font-family:'GothamRounded-Book';
		src:url('https://assets.lydian.io/fonts/GothamRounded-Book.eot?#iefix') format('embedded-opentype'), url('https://assets.lydian.io/fonts/GothamRounded-Book.otf') format('opentype'), url('https://assets.lydian.io/fonts/GothamRounded-Book.woff') format('woff'), url('https://assets.lydian.io/fonts/GothamRounded-Book.ttf') format('truetype'), url('https://assets.lydian.io/fonts/GothamRounded-Book.svg#GothamRounded-Book') format('svg');
		font-weight:400;
		font-style:normal
		}
		@font-face {
		font-family:'GothamRounded-Light';
		src:url('https://assets.lydian.io/fonts/GothamRounded-Light.eot?#iefix') format('embedded-opentype'), url('https://assets.lydian.io/fonts/GothamRounded-Light.otf') format('opentype'), url('https://assets.lydian.io/fonts/GothamRounded-Light.woff') format('woff'), url('https://assets.lydian.io/fonts/GothamRounded-Light.ttf') format('truetype'), url('https://assets.lydian.io/fonts/GothamRounded-Light.svg#GothamRounded-Light') format('svg');
		font-weight:400;
		font-style:normal
		}
		@font-face {
		font-family:'Conv_GothamRnd-Bold';
		src:url('https://assets.lydian.io/fonts/GothamRnd-Bold.eot') format('embedded-opentype'), url('https://assets.lydian.io/fonts/GothamRnd-Bold.woff') format('woff'), url('https://assets.lydian.io/fonts/GothamRnd-Bold.ttf') format('truetype'), url('https://assets.lydian.io/fonts/GothamRnd-Bold.svg') format('svg');
		font-weight:400;
		font-style:normal
		}


	</style>

	<script>
		 $(function(){

    $(".dropdown-menu").on('click', 'a', function(){
      $(".btn:first-child").text($(this).text());
      $(".btn:first-child").val($(this).text());
   });

});
  	</script>

</head>



<body>

	<img style="height: 100px; margin-top: 30px;" src="logo.png" class="rounded mx-auto d-block">
	<h2 style="margin-top: 50px; text-align: center; font-family:'GothamRounded-Medium';">Generate Nomor Surat Disini</h2>

	<form style="margin: 0 auto; margin-top: 70px; width: 30%; font-family:'GothamRounded-Medium';">
	  <div class="form-group">
	    <label>Nama Anda</label>
	    <input type="text" class="form-control" placeholder="Masukkan nama anda">
	  </div>

	  <div class="form-group">
	    <label>Nama Surat</label>
	    <input type="text" class="form-control" placeholder="Masukkan nama surat">
	  </div>

		<div>
	  	<label>Jenis Surat</label>
	  	</div>

	  	<div class="dropdown">

		<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		    Pilih Jenis Surat
		</a>

		<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
		    <a class="dropdown-item" href="#">Berita Acara Penjelasan</a>
		    <a class="dropdown-item" href="#">Berita Acara Siap Operasi (BASO)</a>
		    <a class="dropdown-item" href="#">Berita Acara Delete Order (BADO)</a>
		    <a class="dropdown-item" href="#">Surat Keluar</a>
		    <a class="dropdown-item" href="#">P0/P1</a>
		    <a class="dropdown-item" href="#">Surat Penawaran</a>
		</div>
	  </div>


	  <button style="margin-top: 30px;" type="submit" class="btn btn-primary">Generate Nomor Surat</button>
	</form>

</body>

</html>