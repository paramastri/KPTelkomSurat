<!DOCTYPE html>
<html>
<head>
	<title>Generate Nomor Surat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="icon" href="favicon.png" type="png" sizes="16x16">

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">


	 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<script>
		 $(function(){

		    $(".dropdown-menu").on('click', 'a', function(){
		      $(".btn:first-child").text($(this).text());
		      $(".btn:first-child").val($(this).text());
		   });

		});

		 $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
  	</script>

</head>



<body>

<div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
        		<img style="height: 100px; margin-top: 30px;" src="logo.png" class="rounded mx-auto d-block">
            <div class="sidebar-header">
                <h3></h3>
            </div>

            <ul style="margin-left: 10px;" class="list-unstyled">
                
                <li>
                    <a href="{{ url('') }}">Generate Nomor Surat</a>
                </li>
                <li>
                    <a href="{{ url('carinomor') }}">Upload Surat</a>
                </li>
                <li>
                    <a href="{{ url('loginadmin') }}">Admin</a>
                </li>
            </ul>

           
        </nav>



 <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="">

                    <button style="margin-right: 30px;" type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <h2 style="font-family:'GothamRounded-Medium'; float: right;">Cek Surat Anda</h2>
                   <!--  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button> -->


                   
                </div>
            </nav>




	<div  style="margin-left: 90px; margin-top: 100px; width: 80%; font-family:'GothamRounded-Medium';">
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

	<a href="{{ url('upload') }}" style="margin-top: 50px;" class="btn btn-primary">Unggah File Surat</a>
	<a href="{{ url('carinomor') }}" style="margin-top: 50px;" class="btn btn-danger">Kembali</a>
</div>
	

</body>

</html>