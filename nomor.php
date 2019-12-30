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
         function copyToClipboard(element) {
          var $temp = $("<input>");
          $("body").append($temp);
          $temp.val($(element).text()).select();
          document.execCommand("copy");
          $temp.remove();
          alert("Nomor surat berhasil disalin!");
        }

         $('#modal').on('click', function(){
            $("#div_dbReadMany").modal('show');
        });

        $('.save').on('click', function(){
           $('#div_dbReadMany').delay(1000).fadeOut('slow');
           setTimeout(function() {
               $("#div_dbReadMany").modal('hide');
           }, 1500);
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
                    <a href="index.php">Generate Nomor Surat</a>
                </li>
                <li>
                    <a href="carinomor.php">Upload Surat</a>
                </li>
                <li>
                    <a href="#">Admin</a>
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
                    <h2 style="font-family:'GothamRounded-Medium'; float: right;">Cari Surat</h2>
                   <!--  <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button> -->


                   
                </div>
            </nav>



	<div style="margin-left: 90px; margin-top: 100px; width: 100%; font-family:'GothamRounded-Medium';">
	  <div class="form-group">
	    <label style="font-size: 15pt;">Nomor Surat Anda</label>
	    <h2  id="nomor" style="font-weight: bold;">TEL.1/YN000/R5W-5M470000/2020</h2>
        <button type="button" class="btn btn-warning" onclick="copyToClipboard('#nomor')">Salin</button>


 


        </div>

	  <a style="margin-top: 30px; float: none;" class="btn btn-danger" href="index.php">Kembali</a>
	</div>
	

</body>

</html>