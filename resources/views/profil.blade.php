@extends('layouts.app')
@section('content')
<div class="container margin5-top">
  <div class="col-md-8">
      <h4>Informasi Personal</h4>
    <div class="primary-blue line margin5-top"></div>
    <div class="panel panel-default radius">
      <div class="panel-body margin5">
          <div class="col-md-2">
            <div class="row">
              Gelar
            </div>
            <div class="row">
              <div class="dropdown">
                <button style="height:26px;width:100%" class="btn btn-default dropdown-toggle radius" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Tuan
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu radius" style="min-width:80px !important" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Tuan</a></li>
                  <li><a href="#">Nyonya</a></li>
                  <li><a href="#">Nona</a></li>
                </ul>
              </div>
            </div>
            <input type="tel" id="phone">
          </div> <!-- ct col md-4 -->
          <div class="col-md-10">
            <div class="row">
              Nama Lengkap
            </div>
            <div class="row">
              <input style="width:100%" type="text" name="" value=""></input>
            </div>
          </div>
          <!-- ct col-md-8 -->
          <div class="col-md-12 margin5-top">
            <div class="row">
              Tanggal Lahir
            </div>
            <div class="row">
              <input style="width:100%" type="text" name="" value=""></input>
            </div>
          </div>
          <div class="col-md-2 margin5-top">
            <div class="row">
              Nomor Telepon
            </div>
            <div class="row">
              <div class="dropdown">
                <button style="height:26px;width:100%" class="btn btn-default dropdown-toggle radius" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span>+62</span>
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu radius" style="min-width:80px !important" aria-labelledby="dropdownMenu1">
                  <li><a href="#">+62</a></li>
                  <li><a href="#">+1</a></li>
                  <li><a href="#">+2</a></li>
                </ul>
              </div>
            </div>
          </div> <!-- ct col md-4 -->
          <div class="col-md-10 margin5-top">
            <div class="row">&nbsp</div>
            <div class="row">
              <input style="width:100%" type="text" name="" value=""></input>
            </div>
          </div>
          <div class="col-md-12 margin5-top">
            <div class="row">
              Negara
            </div>
            <div class="row">
              <div class="dropdown">
                <button style="height:26px; min-width:100%" class="btn btn-default dropdown-toggle radius" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <span class="pull-left" style="margin-top:-1%">Indonesia</span>
                  <span class="caret pull-right" style="margin-top:1%"></span>
                </button>
                <ul class="dropdown-menu radius" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">Afghanistan</a></li>
                  <li><a href="#">Singapura</a></li>
                </ul>
              </div>
            </div><!-- ct baris 2 -->
          </div>
          <div class="col-md-12 margin5-top">
            <div class="row">
              Negara Bagian / Provinsi
            </div>
            <div class="row">
              <input style="width:100%" type="text" name="" value=""></input>
            </div>
          </div>
          <div class="col-md-12 margin5-top">
            <div class="row">
              Kota
            </div>
            <div class="row">
              <input style="width:100%" type="text" name="" value=""></input>
            </div>
          </div>
      </div>
    </div><!-- ct panel -->
    <button type="button" class="btn btn-default primary-yellow" style="width:100%; margin-bottom:30%" name="button">Simpan</button>
  </div><!-- ct col-md-8 -->
  <!-- change photo profil -->
  <div class="col-md-4 margin5-top">
    <div class="foto margin5">

    </div>
    <button type="button" class="btn btn-default primary-blue" style="width:68%" name="button">Unggah Foto Profil</button>
  </div>
</div>
@stop
