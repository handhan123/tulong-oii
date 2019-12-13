<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Griya Homestay</title>
  </head>
  <body>
    <style>
    table{
        width: 100%;
        height: 720px;
        background-color: #c2d6ff; 
    }
    td{
        padding: 0px 7px;
    }
    input[type=submit] {
    width: 130px;
    }
    #jelajah{
      width: 200px
    }
    #trtop, #tr2nd{
    background-color: #007bff;
    }
    .header{
    padding: 10px 10px 0px 10px;
    } 
    .header2{
    padding: 0px 10px 10px 0px;
    }
    </style>
        <div class="container-fluid">
        <table border="0">
        <div class="container">
        <div class="mt-3"> 
        <div class="ml-2"> 
            <tr style="height:20px;" id="trtop">
            <td width="59%" rowspan="2" class="header"><img src="images/logo1putih.png" alt="" width="150px"></td>
            <td width="1%" class="header"></td>
            <td width="10%" class="header">Email</td>
            <td width="10%" class="header">Password</td>
            <td width="10%" class="header"></td>
            </tr>
            <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #ffffff;">
                    <a class="navbar-brand font-weight-bold ml-4" href="#"><big id="gh">Griya Homestay</big></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                      <ul class="navbar-nav ml-auto mr-5">
                        <li class="nav-item active">
                          <a class="nav-link" href="/formlogin">Login</a>
                        </li>
                        <li class="nav-item active ml-3 mr-3">
                          <a class="nav-link" href="/formsignup">Sign Up</a>
                        </li>
                      </ul>
                    </div>
                    </nav>                   
            <tr style="height:590px;">
                <td width="57%" align="center">
                <!--<img src="images/logo2.png" alt="" width="65px" height="43px"> <br>-->
                <h3> Silahkan pilih lokasi dan penginapan yang sesuai dengan anda <br>
                </h3>
                </td>
            </tr>
            <tr>
                <td>Pilih Kabupaten<br>
                    <select id="inputArea" class="form-control">
                            <option selected> Sleman</option>
                            <option>Yogya Kota</option>
                            <option>Gunung Kidul</option>
                            <option>Bantul</option>
                            <option>Kulon Progo </option>
                        </select>
                </td>
                <td>Penilaian<br>
                    <select id="inputNilai" class="form-control">
                            <option selected>8</option>
                            <option>7</option>
                            <option>6</option>
                            <option>5</option>
                            <option> < 5 </option>
                    </select>
                </td>
                       
            </tr>
            <tr>
                <td>
                    <img src="4.jpg">
                    <p> kolom ini untuk deskripsi homestay berupa harga, fasilitas, dll. </p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="2.jpg">
                    <p> kolom ini untuk deskripsi homestay berupa harga, fasilitas, dll. </p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="3.jpg">
                    <p> kolom ini untuk deskripsi homestay berupa harga, fasilitas, dll. </p>
                </td>
            </tr>
            <tr>
                    <td>
                        <img src="6.jpg">
                        <p> kolom ini untuk deskripsi homestay berupa harga, fasilitas, dll. </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="1.jpg">
                        <p> kolom ini untuk deskripsi homestay berupa harga, fasilitas, dll. </p>
                    </td>
                </tr>
</body>
</html>