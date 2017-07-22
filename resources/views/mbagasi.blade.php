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
          <button class="btn btn-circle" style="float:right; background-color: #2d8727; color: #fff">2</button>
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
  <!-- pilih bagasi -->
  <div class="test"><h6 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Pilih Bagasi</h6></div>
  <div class="panel panel-default radius" style="border:0">
    <div class="panel-body" style="background-color:#efefef">

      <a data-toggle="collapse" href="#penumpang1">
      <div class="small">
        Keberangkatan
        <span id="caretp1" class="caret pull-right"></span>
      </div></a>

      <!-- panel down -->
      <div id="penumpang1" class="panel-collapse collapse small">
        <div class="panel-body">
          <div class="row"> <!-- 0 -->
            <div class="col-xs-4">
              Lion Air
            </div>
            <div class="col-xs-8">
              : &nbsp20 Kg
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4 margin2-top">
              Bagasi
            </div>
            <div class="col-xs-8 margin2-top">
              <div class="dropdown">
                :&nbsp <button class="btn btn-default dropdown-toggle radius btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Tidak Ada <span class="caret"></span>
                </button>
                <ul class="dropdown-menu radius" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Tidak Ada</a></li>
                  <li><a href="#">10kg</a></li>
                  <li><a href="#">20kg</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row"> <!-- 1 -->
            <div class="col-xs-4 margin2-top">
              Lion Air
            </div>
            <div class="col-xs-8 margin2-top">
              : &nbsp20 Kg
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4 margin2-top">
              Bagasi
            </div>
            <div class="col-xs-8 margin2-top">
              <div class="dropdown">
                :&nbsp <button class="btn btn-default dropdown-toggle radius btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Tidak Ada
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu radius" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Tidak Ada</a></li>
                  <li><a href="#">10kg</a></li>
                  <li><a href="#">20kg</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ct #penumpang1 -->

      <hr>
      <a data-toggle="collapse" href="#penumpang2">
      <div class="small">
        Kepulangan
        <span class="caret pull-right"></span>
      </div></a>

      <!-- panel down -->
      <div id="penumpang2" class="panel-collapse collapse small">
        <div class="panel-body">
          <div class="row"> <!-- 0 -->
            <div class="col-xs-4">
              Lion Air
            </div>
            <div class="col-xs-8">
              : &nbsp20 Kg
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4 margin2-top">
              Bagasi
            </div>
            <div class="col-xs-8 margin2-top">
              <div class="dropdown">
                :&nbsp <button class="btn btn-default dropdown-toggle radius btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Tidak Ada
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu radius" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Tidak Ada</a></li>
                  <li><a href="#">10kg</a></li>
                  <li><a href="#">20kg</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row"> <!-- 1 -->
            <div class="col-xs-4 margin2-top">
              Sriwijaya
            </div>
            <div class="col-xs-8 margin2-top">
              : &nbsp20 Kg
            </div>
          </div>
          <div class="row">
            <div class="col-xs-4 margin2-top">
              Bagasi
            </div>
            <div class="col-xs-8 margin2-top">
              <div class="dropdown">
                :&nbsp <button class="btn btn-default dropdown-toggle radius btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Tidak Ada
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu radius" aria-labelledby="dropdownMenu1">
                  <li><a href="#">Tidak Ada</a></li>
                  <li><a href="#">10kg</a></li>
                  <li><a href="#">20kg</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- ct #penumpang2 -->
    </div>
  </div> <!-- close tag pilih bagasi -->
  <!-- Citos Shield -->
  <div class="test"><h6 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Citos Shield</h6></div>
  <div class="panel panel-default radius" style="border:0">
    <div class="panel-body" style="background-color:#efefef">
      <div class="checkbox margin5-top small" style="margin-top:1%">
        <label><input type="checkbox" value="">Citos Shield (CTShield)</label>
        <p style="margin-left:8%"><strong><em>Apa itu Citos Shield?</em></strong></p>
      </div>
    </div>
  </div><!-- close tag citos shield -->
  <!-- Potongan Harga -->
    <div class="test"><h6 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Potongan Harga</h6></div>
    <div class="panel panel-default radius" style="border:0">
      <div class="panel-body" style="background-color:#efefef">

      <div class="checkbox small">
        <label class="margin5-top" style="margin-top:1%"><input type="checkbox" value="">Gunakan HOT WALLET</label>
        <p class="margin5-top" style="80%">Punya Kode Kupon? Masukkan kode unik untuk harga spesial</p>
        <div class="col-xs-8">
          <input type="text" name="" value="" placeholder="Kode unik disini" class="form-control radius input-sm" style="margin-left:-14%; width:150%">
        </div>
        <div class="col-xs-4">
          <button type="button" name="button" class="btn btn-default radius primary-blue btn-sm">Gunakan</button>
        </div>

      </div>
    </div>
  </div><!-- close tag potongan harga -->

  <!-- Button back -->
  <ul class="list-inline pull-right">
      <li><a href="http://localhost:8000/misi"><button type="button" class="btn btn-sm primary-yellow radius" style="width:100px; font-size:70%; padding-left:1%">Tambah ke Keranjang</button></a></li>
      <li><a href="http://localhost:8000/mbayar2"><button type="button" class="btn btn-sm primary-yellow radius" style="width:100px; margin-left:-10px; font-size:70%">Bayar Sekarang</button></a></li>
  </ul>
</div>
  @stop
