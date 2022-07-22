@extends('products.layout')



@section('content')
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left" style="margin-top: 20px;">

            <h2>Profil PPID Kabupaten Banyuwangi</h2>

        </div>

    </div>

</div>

<style>
body {font-family: Arial;}

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
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Instrumen KIP PPID</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Seputar PPID</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Visi dan Misi</button>
</div>

<div id="London" class="tabcontent">
  <h3>Instrumen KIP PPID</h3>
  <iframe src="UU 14 Tahun 2008.pdf" width="100%" height="600px;"></iframe>
</div>

<div id="Paris" class="tabcontent">
  <h3>Seputar PPID</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Visi dan Misi</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>

@endsection