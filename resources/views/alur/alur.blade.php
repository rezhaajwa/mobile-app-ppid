@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>Tata Cara Pengajuan Permohonan & Layanan Keberatan : PPID Kabupaten Banyuwangi</h2>

        </div>

    </div>

</div>

<style>
    body {
        font-family: Arial;
    }

    /* Style the tab */
    .tab {
        overflow: hidden;
        border: 1px solid #ccc;
        background-color: #f1f1f1;
    }

    /* Style the buttons inside the tab */
    .tab button {
        background-color: inherit;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 14px 16px;
        transition: 0.3s;
        font-size: 17px;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color: #ddd;
    }

    /* Create an active/current tablink class */
    .tab button.active {
        background-color: #ccc;
    }

    /* Style the tab content */
    .tabcontent {
        display: none;
        padding: 6px 12px;
        border: 1px solid #ccc;
        border-top: none;
    }
</style>
</head>

<body>
    <br>
    <h4>A. TATA CARA PERMOHONAN INFORMASI PUBLIK : </h4> <br>
    <center><img src="tatacara.jpg"></center>
    <br>
    <h4>B. PROSEDUR PENGAJUAN KEBERATAN & PENYELESAIAN INFORMASI :</h4> <br>
    <center><img src="prosedursengketainformasi.jpg"></center>
</body>

@endsection