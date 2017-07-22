@extends('layouts.app')
@section('content')
<script
        src="https://code.jquery.com/jquery-3.2.1.js"
        integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
        crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/intlTelInput.js"></script>
    <script>
    $( function() {
      var input = $("#phone"),
      output = $("#output");

        $("#phone").intlTelInput({
          initialCountry: "auto",
          geoIpLookup: function(callback) {
            $.get('http://ipinfo.io', function() {}, "jsonp").always(function(resp) {
              var countryCode = (resp && resp.country) ? resp.country : "";
              callback(countryCode);
            });
          },
          utilsScript: "js/utils.js" // just for formatting/placeholders etc
        });

        // listen to "keyup", but also "change" to update when the user selects a country
        input.on("keyup change", function() {
          var intlNumber = input.intlTelInput("getNumber");
          if (intlNumber) {
            output.text("International: " + intlNumber);
          } else {
            output.text("Please enter a number below");
          }
        });
      } );
    </script>

    <!-- //dropdown country regional -->

<div class="container margin-container">
  <!-- step 1 2 3 -->
  <center>
    <div class="row">
      <div class="col-xs-6 col-md-4">
      </div>
      <div class="col-xs-6 col-md-4">
        <div class="connecting-line"></div>
        <button class="btn btn-circle btn-lg" style="float:left; background-color: #2d8727; color: #fff">1</button>
        <button class="btn grey btn-circle btn-lg" style="float:right">2</button>
      </div>
      <div class="col-xs-6 col-md-4">
      </div>
    </div>

    <div class="row" style="margin-bottom:5%; margin-top:1%">
      <div class="col-xs-6 col-md-4">
      </div>
      <div class="col-xs-6 col-md-4 small">
        <span style="float:left; margin-left:-5%"><strong>ISI FORMULIR</strong></span>

        <span style="float:right; margin-right:-15%">BAGASI DAN ASURANSI</span>
      </div>
      <div class="col-xs-6 col-md-4">
      </div>
    </div>
  </center>
  <!-- close step 1 2 3 -->

  <!-- Left Side -->
  <div class="container col-md-8 col-xs-10">
    <!-- Info Kontak -->
    <div class="test"><h5 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Informasi Kontak yang Dapat Dihubungi</h5></div>

    <div class="panel panel-default form-control-non-radius" style="background-color: #efefef " >
      <div class="panel-body margin5-trbl">

        <strong></strong>

        <div class="container-fluid row margin5-top">
          <div class="col-md-2">
            <div class="row">
              Gelar
            </div>
            <div class="row">
            <div class="form-inline">
              <select class="form-control form-control-non-radius">
                <option value="Tuan">Tuan</option>
                <option value="Nyonya">Nyonya</option>
                <option value="Nona">Nona</option>
              </select>
            </div>
            </div>
          </div> <!-- ct col md-4 -->
          <form action="{{ url('/bagasi') }}">
          <div class="col-md-10">
            <div class="row">
              Nama Lengkap*
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" type="text" id="contact-name-input" required maxlength="23">
            </div>
          </div>
          <!-- ct col-md-8 -->
        </div><!-- ct row 2 / baris 1 -->
        <!-- baris 2 -->
        <div class="container-fluid row margin5-top">
          <div class="col-md-6">
            <div class="row">
              Email*
            </div><!-- ct baris 1 -->
            <div class="row">
              <input style="width:90%" class="form-control form-control-non-radius" id="email-contact" type="email" name="" value="" required>
            </div><!-- ct baris 2 -->
          </div><!-- ct col-md-6 / kolom 1 -->
          <div class="col-md-6">
            <div class="row">
              No Telepon*
            </div><!-- ct baris 1 -->
            <div class="row">
              <input class="form-control form-control-non-radius" type="tel" id="phone" required>
            </div><!-- ct baris 2 -->
          </div><!-- ct col-md-6 / kolom 1 -->
        </div>
      </div> <!-- ct panel-body -->
    </div>

    <!-- Citos Shield -->
    <div class="test"><h5 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Penumpang Dewasa 1</h5></div>
    <div class="panel panel-default form-control-non-radius" style="background: #efefef">

      <!-- add child and inf -->
      <div class="panel-body margin5-trbl">
        <div class="checkbox">
        </div>
        <div class="container-fluid row margin5-top">
          <div class="col-md-2">
            <div class="row">
              Gelar
            </div>
            <div class="row">
              <div class="form-inline">
              <select class="form-control form-control-non-radius">
                <option value="Tuan">Tuan</option>
                <option value="Nyonya">Nyonya</option>
                <option value="Nona">Nona</option>
              </select>
            </div>
            </div>
          </div> <!-- ct col md-4 -->
          <div class="col-md-5">
            <div class="row">
              Nama Lengkap*
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" type="text" id="input-pax-1" required>
            </div>
          </div>
          <!-- ct col-md-8 -->

          <div class="col-md-5">
            <div class="row" style="margin-left: -4%">
              Nomor Identitas*
            </div><!-- ct baris 1 -->
            <div class="row">
              <input class="form-control form-control-non-radius" style="width: 97%; margin-left: 3%" type="text" name="" value="">
            </div><!-- ct baris 2 -->
          </div><!-- ct col-md-6 / kolom 1 -->
        </div><!-- ct row 2 / baris 1 -->
        <!-- baris 2 -->
      </div> <!-- ct panel-body -->

    </div>

    <div class="test"><h5 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Penumpang Anak 2</h5></div>
    <div class="panel panel-default form-control-non-radius" style="background: #efefef">

      <div class="panel-body margin5-trbl">
        <div class="container-fluid row margin5-top">
          <div class="col-md-2">
            <div class="row">
              Gelar
            </div>
            <div class="row">
              <div class="form-inline">
              <select class="form-control form-control-non-radius">
                <option value="Tuan">Tuan</option>
                <option value="Nyonya">Nyonya</option>
                <option value="Nona">Nona</option>
              </select>
            </div>
            </div>
          </div> <!-- ct col md-4 -->
          <div class="col-md-5">
            <div class="row">
              Nama Lengkap*
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" type="text" id="input-pax-2" required>
            </div>
          </div>
          <!-- ct col-md-8 -->
          <div class="col-md-5">
            <div class="row" style="margin-left: -4%">
              Tanggal Lahir*
            </div><!-- ct baris 1 -->
            <div class="row">
              <input class="form-control form-control-non-radius" id="BoD-Chd" style="width: 97%; margin-left: 3%" type="text" name="" value="">
            </div><!-- ct baris 2 -->
          </div>
        </div><!-- ct row 2 / baris 1 -->
        <!-- baris 2 -->
      </div> <!-- ct panel-body -->

    </div>

    <div class="test"><h5 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Penumpang Bayi 3</h5></div>
    <div class="panel panel-default form-control-non-radius" style="background: #efefef">

      <div class="panel-body margin5-trbl">
        <div class="container-fluid row margin5-top">
          <div class="col-md-2">
            <div class="row">
              Gelar
            </div>
            <div class="row">
              <div class="form-inline">
              <select class="form-control form-control-non-radius">
                <option value="Tuan">Tuan</option>
                <option value="Nyonya">Nyonya</option>
                <option value="Nona">Nona</option>
              </select>
            </div>
            </div>
          </div> <!-- ct col md-4 -->
          <div class="col-md-5">
            <div class="row">
              Nama Lengkap*
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" type="text" id="input-pax-3" required>
            </div>
          </div>
          <!-- ct col-md-8 -->
          <div class="col-md-5">
            <div class="row" style="margin-left: -4%">
              Tanggal Lahir*
            </div><!-- ct baris 1 -->
            <div class="row">
              <input class="form-control form-control-non-radius" id="BoD-Chd" style="width: 97%; margin-left: 3%" type="text" name="" value="">
            </div><!-- ct baris 2 -->
          </div><!-- ct col-md-6 / kolom 1 -->
        </div><!-- ct row 2 / baris 1 -->
        <!-- baris 2 -->
      </div> <!-- ct panel-body -->

      <!-- Button back -->
      <ul class="list-inline pull-right margin5-top">
        <li><input type="submit" class="btn form-control-non-radius primary-yellow" style="width: 200px;" value="Lanjut"></li>
      </ul>
    </form>

    </div>
  </div>
  <!-- ct Left Side -->

  <!-- Right Side -->
  <div class="container col-md-4 col-xs-2">
  <div id="accordion">
    <div class="panel panel-default radius" style="background:#EFEFEF">
      <div class="panel-body" style="color: #0033A8"><strong>KEBERANGKATAN</strong></div>
      <center>
      <div class="row" style="background:#fff; margin-left: 5%; margin-right: 5%">
        <div class="col-md-5" style="margin-top: 2%; margin-bottom: 2%"><strong>JOG</strong></div>
        <div class="col-md-2">
          <img src="img/arroww.png" style="width:210%">
        </div>
        <div class="col-md-5" style="margin-top: 2%"><strong>BDO</strong></div>
      </div>
      </center>
      
      <div class="panel-body">
        <a data-toggle="collapse" data-parent="#accordion" href="#pesawat1">
          <strong>Lion Air<span style="margin-left: 50%; margin-right: 5%">Rp 400.000</span></strong>
          <span id="caretp1" class="caret"></span>
        </a>
          <p class="small">23.00 - 01.00<strong> (+ 1 hari)</strong></p>
        <!-- <a class="small" data-toogle="modal" data-target="modalPesawat1" href="#">Detail Penerbangan</a> -->
        <a data-target="#modalPesawat1" data-toggle="modal" class="MainNavText" id="MainNavHelp" href="#modalPesawat1">Detail Penerbangan</a>
        <!-- <button type="button" class="btn small" data-toggle="modal" data-target="#modalPesawat1">Open Modal -->
        <!-- </button> -->

        <!-- Modal -->
        <div id="modalPesawat1" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content radius">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <center><h4 class="modal-title" style="color: #0033A8">DETAIL PENERBANGAN</h4></center>
              </div>
              <div class="modal-body">
                asdsf
              </div>
            </div>

          </div>
        </div>


        <!-- panel down -->
        <div id="pesawat1" class="panel-collapse collapse">
          <div class="panel-body" style="background-color: #fff; margin-top: 2%">
            <div class="row"> <!-- 0 -->
              <div class="col-md-12">
                <strong>Tarif</strong>
              </div>
            </div>
            <div class="row margin5-top" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Dewasa x1</span>
                <span class="pull-right">Rp 1.500.000</span>
            </div>
            <div class="row" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Anak x1</span>
                <span class="pull-right">Rp 1.500.000</span>
            </div>
            <div class="row" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Bayi x1</span>
                <span class="pull-right">Rp 70.000</span>
            </div>
        </div> <!-- ct #penumpang1 -->
      </div>
      <br><p></p>
      <!-- Pesawat 2 -->
      <a data-toggle="collapse" data-parent="#accordion" href="#pesawat3">
          <strong>Lion Air<span style="margin-left: 50%; margin-right: 5%">Rp 400.000</span></strong>
          <span id="caretp1" class="caret"></span>
        </a>
          <p class="small">23.00 - 01.00<strong> (+ 1 hari)</strong></p>
        <a href="#" class="small">Detail Penerbangan</a>

        <!-- panel down -->
        <div id="pesawat3" class="panel-collapse collapse">
          <div class="panel-body" style="background-color: #fff; margin-top: 2%">
            <div class="row"> <!-- 0 -->
              <div class="col-md-12">
                <strong>Tarif</strong>
              </div>
            </div>
            <div class="row margin5-top" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Dewasa x1</span>
                <span class="pull-right">Rp 1.500.000</span>
            </div>
            <div class="row" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Anak x1</span>
                <span class="pull-right">Rp 1.500.000</span>
            </div>
            <div class="row" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Bayi x1</span>
                <span class="pull-right">Rp 70.000</span>
            </div>
        </div> <!-- ct #penumpang1 -->
      </div>
    </div>
   <!-- ct panel default -->

    <!-- Masuk ke Pesawat 3 -->
    <div class="panel-body" style="color: #0033A8"><strong>KEPULANGAN</strong></div>
      <center>
      <div class="row" style="background:#fff; margin-left: 5%; margin-right: 5%">
        <div class="col-md-5" style="margin-top: 2%; margin-bottom: 2%"><strong>BDO</strong></div>
        <div class="col-md-2">
          <img src="img/arroww.png" style="width:210%">
        </div>
        <div class="col-md-5" style="margin-top: 2%"><strong>JOG</strong></div>
      </div>
      </center>

      
      <div class="panel-body">
        <a data-toggle="collapse" data-parent="#accordion" href="#pesawat2">
          <strong>Lion Air<span style="margin-left: 50%; margin-right: 5%">Rp 400.000</span></strong>
          <span id="caretp1" class="caret"></span>
        </a>
          <p class="small">23.00 - 01.00<strong> (+ 1 hari)</strong></p>
        <a href="#" class="small">Detail Penerbangan</a>
        <p>
        <!-- panel down -->
        <div id="pesawat2" class="panel-collapse collapse">
          <div class="panel-body" style="background-color: #fff; margin-top: 2%">
            <div class="row"> <!-- 0 -->
              <div class="col-md-12">
                <strong>Tarif</strong>
              </div>
            </div>
            <div class="row margin5-top" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Dewasa x1</span>
                <span class="pull-right">Rp 1.500.000</span>
            </div>
            <div class="row" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Anak x1</span>
                <span class="pull-right">Rp 1.500.000</span>
            </div>
            <div class="row" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Bayi x1</span>
                <span class="pull-right">Rp 70.000</span>
            </div>
        </div>
      </div> <!-- ct accordion pesawat 1 -->
      <a data-toggle="collapse" data-parent="#accordion" href="#pesawat4">
          <strong>Garuda Indonesia<span style="margin-left: 23%; margin-right: 5%">Rp 3.070.000</span></strong>
          <span id="caretp1" class="caret"></span>
      </a>
          <p class="small">23.00 - 01.00<strong> (+ 1 hari)</strong></p>
        
        <a href="#" class="small">Detail Penerbangan</a>
        <!-- panel down -->
        <div id="pesawat4" class="panel-collapse collapse">
          <div class="panel-body" style="background-color: #fff; margin-top: 2%">
            <div class="row"> <!-- 0 -->
              <div class="col-md-12">
                <strong>Tarif</strong>
              </div>
            </div>
            <div class="row margin5-top" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Dewasa x1</span>
                <span class="pull-right">Rp 1.500.000</span>
            </div>
            <div class="row" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Anak x1</span>
                <span class="pull-right">Rp 1.500.000</span>
            </div>
            <div class="row" style="margin-right: 0%; margin-left: 1%">
                <span class="pull-left">Bayi x1</span>
                <span class="pull-right">Rp 70.000</span>
            </div>
        </div>
        </div>
      </div> <!-- ct accordion pesawat 1 -->
    </div> <!-- close tag accordion -->
    </div> <!-- ct panel default -->
    <!-- total biaya -->
    <div class="panel panel-default radius">
      <div class="panel-body" style="background:#EFEFEF">
        <center><span style="color: #0033A8"><strong>TOTAL BIAYA PERJALANAN</strong></span></center>
        <br>
        <p>
          Keberangkatan
          <span class="pull-right">Rp 1.900.000</span>
        </p>
        <p>
          Kepulangan
          <span class="pull-right">Rp 3.900.000</span>
        </p>
      </div>
      <div class="panel-heading primary-blue radius">
        <span><strong><h4>TOTAL</span>
        <span style="margin-left: 45%">Rp 5.800.000</strong></h4></span>
      </div>
    </div>
  </div> <!-- ct Right Side -->
</div> <!-- ct container POLL -->
@stop
