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



    <!-- tabulator -->
    <link href="{{ url("tabulator.min.css") }}" rel="stylesheet">
    <script src="{{ url("tabulator.min.js") }}"></script>

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
                    <a href="{{ url('detailnomor') }}">Upload Surat</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Admin</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <!-- <li>
                            <a href="{{ url('register') }}">Register</a>
                        </li> -->
                        <li>
                            <a href="{{ url('loginadmin') }}">Login</a>
                        </li>
                    </ul>
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




	<div class="home-content">
        <h2 class="dashboard-title"></h2>
        <div id="example-table"></div>
    </div>

    <script>


            


    // tabelnya
        var table = new Tabulator("#example-table", {
            height: "350px",
            pagination:"local",
            paginationSize:10,
            layout:"fitColumns",
            placeholder: "Tidak Ada Data",
            columns: [
                {title: "No", field: "no", formatter: "rownum", width: 10},
                {title: "Tanggal", field: "tanggal"},
                {title: "No Surat", field: "no_surat"},
                {title: "Nama", field: "nama"},
                {title: "Nama Surat", field: "nama_surat"},
                {title: "Jenis Surat", field: "jenis_surat"},
                {title: "Status Unggah", field: "status"},
                {
                    title: "Upload Surat", field: "link", formatter: "link", formatterParams: {
                        labelField: "name",
                        label: "Upload disini",
                        urlPrefix: "{{ url('upload/') }}",
                        target: "_blank",
                    }
                },
            ],
        });
        table.setData("{{ url('listsurat') }}");
    </script>
</div>
	

</body>

</html>