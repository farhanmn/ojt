@extends('layouts.apps')
@section('content')
<div class="container">
  <!-- step 1 2 3 -->
  <center>
    <div class="row margin5-top" style="margin-top:5%">
      <div class="col-xs-2"></div>
      <div class="col-xs-8">
        <div class="connecting-line"></div>
          <button class="btn btn-circle" style="float:left; background-color: #2d8727; color: #fff">1</button>
          <button class="btn grey btn-circle" style="float:right">2</button>
      </div>
      <div class="col-xs-2"></div>
    </div>
    <div class="row">
      <div class="col-xs-12 margin5-top" style="margin-bottom:5%">
        <center>
          <span class="col-xs-5" style="margin-left:2%; font-size:85%">Isi Formulir</span>
          <span class="col-xs-2"></span>
          <span class="col-xs-5" style="margin-left:12%; font-size:85%; padding:0">Bagasi & Asuransi</span>
        </center>
      </div>
      <div class="col-xs-2"></div>
    </div>
  </center>
  <!-- close step 1 2 3 -->
  <!-- Info Kontak -->
  <div class="test"><h6 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Data Kontak</h6></div>
  <div class="panel panel-default radius" style="border:0">
    <div class="panel-body" style="background-color:#efefef">
      <div class="row">
        <div class="col-xs-3 small">
          Gelar
        </div>
        <div class="col-xs-9 small">
          Nama Lengkap*
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <div class="dropdown">
            <button class="btn btn-default btn-sm dropdown-toggle radius" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span style="margin-top:50px">Tuan</span>
              <span class="caret" style="margin-top:-20%"></span>
            </button>
            <ul class="dropdown-menu radius" style="min-width:80px !important" aria-labelledby="dropdownMenu1">
              <li><a href="#">Tuan</a></li>
              <li><a href="#">Nyonya</a></li>
              <li><a href="#">Nona</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-9">
          <input type="text" name="" value="" placeholder="" class="form-control radius input-sm">
        </div>
      </div>
      <div class="row small">
        <div class="col-xs-12 margin5-top">
          Alamat Email*
        </div>
        <div class="col-xs-12">
          <input type="text" class="form-control radius input-sm" name="" value="">
        </div>
      </div>
      <div class="row margin5-top">
        <div class="col-xs-12 small">
          Nomor Telepon*
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <input class="form-control radius" type="tel" id="phone">
          <!-- <input type="text" name="" value="" placeholder="" class="form-control radius input-sm" > -->
        </div>
      </div>

    </div> <!-- ct panel-body -->
  </div>
  <!-- Info Penumpang -->
  <div class="test"><h6 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Penumpang Dewasa 1</h6></div>
  <div class="panel panel-default radius" style="border:0">
    <div class="panel-body" style="background-color:#efefef">
      <div class="row col-xs-12">
        <div class="checkbox" style="margin-top:0">
          <label style="font-size:90%"><input type="checkbox" value="">Sama dengan Kontak</label>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3 small">
          Gelar
        </div>
        <div class="col-xs-9 small">
          Nama Lengkap*
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <div class="dropdown">
            <button class="btn btn-default btn-sm dropdown-toggle radius" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span style="margin-top:50px">Tuan</span>
              <span class="caret" style="margin-top:-20%"></span>
            </button>
            <ul class="dropdown-menu radius" style="min-width:80px !important" aria-labelledby="dropdownMenu1">
              <li><a href="#">Tuan</a></li>
              <li><a href="#">Nyonya</a></li>
              <li><a href="#">Nona</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-9">
          <input type="text" name="" value="" placeholder="" class="form-control radius input-sm">
        </div>
        <div class="col-xs-9 small" style="margin-top:5%">
          Nomor Identitas*
        </div>
        <div class="col-xs-12">
          <input type="text" name="" value="" placeholder="" class="form-control radius input-sm">
        </div>
      </div>
    </div>
  </div>

  <!-- Info Penumpang -->
  <div class="test"><h6 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Penumpang Anak 2</h6></div>
  <div class="panel panel-default radius" style="border:0">
    <div class="panel-body" style="background-color:#efefef">
      <div class="row">
        <div class="col-xs-3 small">
          Gelar
        </div>
        <div class="col-xs-9 small">
          Nama Lengkap*
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <div class="dropdown">
            <button class="btn btn-default btn-sm dropdown-toggle radius" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span style="margin-top:50px">Tuan</span>
              <span class="caret" style="margin-top:-20%"></span>
            </button>
            <ul class="dropdown-menu radius" style="min-width:80px !important" aria-labelledby="dropdownMenu1">
              <li><a href="#">Tuan</a></li>
              <li><a href="#">Nyonya</a></li>
              <li><a href="#">Nona</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-9">
          <input type="text" name="" value="" placeholder="" class="form-control radius input-sm">
        </div>
        <div class="col-xs-9 small" style="margin-top:5%">
          Tanggal Lahir*
        </div>
        <div class="col-xs-12">
          <input type="text" name="" value="" placeholder="" class="form-control radius input-sm">
        </div>
      </div>
    </div>
  </div>

  <!-- Info Penumpang -->
  <div class="test"><h6 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Penumpang Bayi 3</h6></div>
  <div class="panel panel-default radius" style="border:0">
    <div class="panel-body" style="background-color:#efefef">
      <div class="row">
        <div class="col-xs-3 small">
          Gelar
        </div>
        <div class="col-xs-9 small">
          Nama Lengkap*
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <div class="dropdown">
            <button class="btn btn-default btn-sm dropdown-toggle radius" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <span style="margin-top:50px">Tuan</span>
              <span class="caret" style="margin-top:-20%"></span>
            </button>
            <ul class="dropdown-menu radius" style="min-width:80px !important" aria-labelledby="dropdownMenu1">
              <li><a href="#">Tuan</a></li>
              <li><a href="#">Nyonya</a></li>
              <li><a href="#">Nona</a></li>
            </ul>
          </div>
        </div>
        <div class="col-xs-9">
          <input type="text" name="" value="" placeholder="" class="form-control radius input-sm">
        </div>
        <div class="col-xs-9 small" style="margin-top:5%">
          Tanggal Lahir*
        </div>
        <div class="col-xs-12">
          <input type="text" name="" value="" placeholder="" class="form-control radius input-sm">
        </div>
      </div>
    </div>
  </div>
  <!-- Button back -->
  <ul class="list-inline pull-right">
      <li><a href="http://localhost:8000/mbagasi"><button type="button" class="btn btn-sm primary-yellow radius" style="width:100px; font-size:70%">Lanjut</button></a></li>
  </ul>
</div><!-- ct container -->
@stop
