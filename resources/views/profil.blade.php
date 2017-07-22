@extends('layouts.app')
@section('content')
<div class="container margin5-top">
  <div class="col-md-8">
      <div class="test"><h4 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Informasi Personal</h4></div>
    <div class="panel panel-default radius">
      <div class="panel-body">
          <div class="col-md-2">
            <div class="form-group">
              <span>Gelar</span>
              <div class="form-inline">
                <select class="form-control btn-block radius">
                  <option value="Tuan">Tuan</option>
                  <option value="Nyonya">Nyonya</option>
                  <option value="Nona">Nona</option>
                </select>
              </div>
            </div>
          </div> <!-- ct col md-4 -->
          <div class="col-md-10">
            <div class="form-group">
              <span>Nama Lengkap</span>
              <input type="text" class="form-control radius" id="usr"/>
            </div>
          </div>
          <!-- ct col-md-8 -->
          <div class="col-md-12">
            <div class="form-group">
              <span>Tanggal Lahir</span>
              <input type="text" class="form-control radius" id="usr"/>
            </div>
          </div>
          <div class="col-md-12">
            <span>No Telepon</span>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <input class="form-control radius" type="tel" id="phone">
            </div>
          </div> <!-- ct col md-4 -->
          <div class="col-md-12">
            <span>Negara</span>
          </div>
          <div class="col-md-12">
            <select class="form-control radius" id="country" name ="country"></select>
          </div>
          <div class="col-md-12 margin5-top">
            <span>Negara Bagian / Provinsi</span>
          </div>
          <div class="col-md-12">
            <select class="form-control radius" name ="state" id ="state"></select>
          </div>
          <div class="col-md-12 margin5-top">
            <div class="form-group">
              <span>Kota</span>
              <input type="text" class="form-control radius" id="usr"/>
            </div>
          </div>
      </div>
    </div><!-- ct panel -->
    <button type="button" class="btn btn-primary-yel" style="width:100%; margin-bottom:30%" name="button">Simpan</button>
  </div><!-- ct col-md-8 -->
  <!-- change photo profil -->
  <div class="col-md-4 margin5-top">
    <center>
    <div class="margin5">
      <img id='img-upload' class="foto" src="/img/sponge.jpg"/>
    </div>

    <button type="button" class="btn btn-primary-blue btn-file btn-block" style="width:75%" name="button">
      Unggah Foto Profil <input type="file" id="imgInp">
    </button>
    </center>
  </div>
</div>
@stop
