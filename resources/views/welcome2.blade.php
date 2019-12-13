@extends('layouts.app')
@section('content')
<!doctype html>
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
    #tdfirst{
        padding: 0px 0px;
    }
    .centered {
        position: absolute;
        top: 40%;
        left: 5%;
        color: white;
    }
    #jelajah{
      width: 300px;
      background-color: #286aad;
      color: white;
    }
    #try1{
        color: white;
        position: absolute;
        top: 48%;
        
    }
    #try2{
        position: absolute;
        top: 50%;
        left: 26%;
    }
    .navbar{
        height: 70px;
    }
    .trkota{
        top: 20%;
    }
    #gh{
      color: #1f274e;
    }
    #dftrhomestay{
      background-color: #286aad;
      color: white;
    }
    .tblhomestay{
  
    }
    #tdhmsty{
      padding: 200px 280px;
      background-color: grey;
    }
</style>
  <div class="container-fluid">
  <table border="0">
  <div class="mt-5">
  <tr style="height:700px" align="center">
    <td colspan="5" id="tdfirst">
        <img src="images/gambar1.jpg" width="97%" height="70%" >
        <div class="centered">
        <h1><p align="left"> Bingung cari tempat menginap yang murah ? <br></h1>
        <h4><p align="left"> Keliling kota nyari penginapan tapi hasilnya nihil <br>
                             Kami ada untuk anda <br>
                             <big id="try1"><p align="left"> Griya Homestay</big><div id="try2">, solusi terbaik untuk dompet tipismu </div><br></p>
        <div class="mt-3">
        <p align="left"><a href="/afterjelajahi"><button type="button" class="btn btn-lg" id="jelajah">Jelajahi</button></a>
        </div> 
        </div>
    </td>
  </tr>
  <tr style="height:200px" >
    <td colspan="5"><h1><p align="center"> Temukan Homestay di Kota Tujuanmu </td>
  </tr>
  <tr style="height:400px" align="center" class="trkota"  valign="top">

    <td align="right">
        <input type="image" src="images/gk.jpg" alt="Submit" width="270" height="270">
    </td>
    <td>
        <input type="image" src="images/gk.jpg" alt="Submit" width="270" height="270">
    </td>
    <td>
        <input type="image" src="images/gk.jpg" alt="Submit" width="270" height="270">
    </td>
    <td>
        <input type="image" src="images/gk.jpg" alt="Submit" width="270" height="270">
    </td>
    <td align="left">
        <input type="image" src="images/gk.jpg" alt="Submit" width="270" height="270">
    </td>
  </tr>
  <tr style="height:100px" >
    <td colspan="5"></td>
  </tr>
  <tr style="height:700px" align="center" id="trdaftarhomestay">
    <td colspan="5" id="tdhomestay">
    <table class="tblhomestay">
    <tr >
    <td id="tdhmsty" align="center">
        <h1><p> Punya Rumah tapi banyak kamar yang Kosong ? <br></h1>
        <h2><p> Bingung mau diapain ? <br>
        <h3><p> Langsung aja daftarin rumah kamu disini. <br>
        <div class="mt-3">
        <p align="center"><a href="/login"><button type="button" class="btn btn-lg" id="dftrhomestay">Daftar Sekarang</button></a>
        </div> 
        </div>
    </td></tr></table>
    </td>
  </tr>
  </div>
  </table>
  </div>

</body>
</html>
@endsection