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
	<h2 style="margin-top: 50px; text-align: center; font-family:'GothamRounded-Medium';">Cek Surat Disini</h2>

	<div  style="margin: 0 auto; margin-top: 100px; width: 30%; font-family:'GothamRounded-Medium';">
	<table class="table table-bordered" >
	  <thead>
	    <tr>
	      <th scope="col">Nomor Surat</th>
	      <th scope="col">Nama Surat</th>
	      <th scope="col">Jenis Surat</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>TEL.1/YN000/R5W-5M470000/2020</td>
	      <td>Surat Apa Hayo</td>
	      <td>BASO</td>
	    </tr>

	  </tbody>
	</table>

	<button style="margin-top: 40px;" type="submit" class="btn btn-primary">Unggah File Surat</button>
	<button style="margin-top: 40px;" type="submit" class="btn btn-danger">Kembali</button>
</div>
	

</body>

</html>