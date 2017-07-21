@extends('layouts.app')
@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
          <div class="col-md-10">
            <div class="row">
              Nama Lengkap*
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" type="text" id="input-pax-1" required>
            </div>
          </div>
          <!-- ct col-md-8 -->
        </div><!-- ct row 2 / baris 1 -->
        <!-- baris 2 -->
        <div class="container-fluid row margin5-top">
          <div class="col-md-12">
            <div class="row">
              Nomor Identitas
            </div><!-- ct baris 1 -->
            <div class="row" width="200px">
              <input class="form-control form-control-non-radius" type="text" name="" value="">
            </div><!-- ct baris 2 -->
          </div><!-- ct col-md-6 / kolom 1 -->
        </div>
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
          <div class="col-md-10">
            <div class="row">
              Nama Lengkap*
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" type="text" id="input-pax-2" required>
            </div>
          </div>
          <!-- ct col-md-8 -->
        </div><!-- ct row 2 / baris 1 -->
        <!-- baris 2 -->
        <div class="container-fluid row margin5-top">
          
          <div class="col-md-12">
            <div class="row">
              Tanggal Lahir
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" id="BoD-Chd" required type="text" name="" value="">
            </div>
          </div>
        </div>
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
          <div class="col-md-10">
            <div class="row">
              Nama Lengkap*
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" type="text" id="input-pax-3" required>
            </div>
          </div>
          <!-- ct col-md-8 -->
        </div><!-- ct row 2 / baris 1 -->
        <!-- baris 2 -->
        <div class="container-fluid row margin5-top">
          
          <div class="col-md-12">
            <div class="row">
              Tanggal Lahir
            </div>
            <div class="row">
              <input class="form-control form-control-non-radius" id="BoD-Inf" type="text" required name="" value="">
            </div>
          </div>
        </div>
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
    <div class="panel panel-default form-control-non-radius" style="background: #efefef">
      <div class="panel-heading primary-blue form-control-non-radius">Tiket Keberangkatan</div>
      <div class="panel-body">
        <a data-toggle="collapse" href="#pergi1">
        <div class="col-md-10">
          <strong>Lion Air</strong>
          <strong class="pull-right">Rp. 400.000</strong>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="pergi1" class="panel-collapse collapse">
          <div class="panel-body margin5-top" style="margin-top:5%">
            <!-- icon -->
            <div class="col-md-2" style="margin-left:-3%">
              <div class="buled"></div>
              <div class="garis-non-transit"></div>
              <div class="buled primary-blue" style="margin-top:80px"></div>
            </div>
            <!-- content kota -->
            <div class="col-md-4">
                <div class="row">Jakarta</div>
                <div class="row">CGK</div>
                <div class="row">GA xxxx</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row">Yogyakarta</div>
                <div class="row">JOG</div>
            </div>
            <!-- content waktu -->
            <div class="col-md-6">
                <div class="row">&nbsp</div>
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
            </div>
          </div>
        </div> <!-- ct #panel pergi1 -->

        <hr>
        <a data-toggle="collapse" href="#pesawat2">
        <div class="col-md-10">
          <strong>Garuda</strong>
          <strong class="pull-right">Rp. 1.500.000</strong>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="pesawat2" class="panel-collapse collapse">
          <div class="panel-body margin5-top" style="margin-top:12%">
            <!-- icon -->
            <div class="col-md-2" style="margin-left:-3%">
              <div class="buled"></div>
              <div class="garis-non-transit"></div>
              <div class="buled primary-blue" style="margin-top:80px"></div>
            </div>
            <!-- content kota -->
            <div class="col-md-4">
                <div class="row">Jakarta</div>
                <div class="row">CGK</div>
                <div class="row">GA xxxx</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row">Yogyakarta</div>
                <div class="row">JOG</div>
            </div>
            <!-- content waktu -->
            <div class="col-md-6">
                <div class="row">&nbsp</div>
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
            </div>
          </div>
        </div> <!-- ct #panel pesawat2 -->

      </div>
    </div>
    <!-- Tiket kepulangan -->
    <div class="panel panel-default form-control-non-radius" style="background: #efefef">
      <div class="panel-heading primary-blue form-control-non-radius">Tiket Kepulangan</div>
      <div class="panel-body">
        <a data-toggle="collapse" href="#pulang1">
        <div class="col-md-10">
          <strong>Lion Air</strong>
          <strong class="pull-right">Rp. 400.000</strong>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="pulang1" class="panel-collapse collapse">
          <center>
            <div class="kotak">
              <span style="margin-top:80px">Transit 1 jam 30 menit</span>
            </div>
          </center>
          <div class="panel-body margin5-top" style="margin-top:5%">
            <!-- icon -->
            <div class="col-md-2" style="margin-left:-3%">
              <div class="buled"></div>
              <div class="garis-transit"></div>
              <div class="buled primary-blue" style="margin-top:80px"></div>
              <div class="garis-transit"></div>
              <div class="buled primary-blue" style="margin-top:80px"></div>
            </div>
            <!-- content kota -->
            <div class="col-md-4">
                <div class="row">Yogyakarta</div>
                <div class="row">JOG</div>
                <div class="row">GA xxxx</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row">Bandung</div>
                <div class="row">BDO</div>
                <div class="row margin8-top" style="margin-top:60%">&nbsp</div>
                <div class="row">Jakarta</div>
                <div class="row">CGK</div>
            </div>
            <!-- content waktu -->
            <div class="col-md-6">
                <div class="row">&nbsp</div>
                <div class="row">7 Agustus 2017</div>
                <div class="row">12.00</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
                <div class="row">7 Agustus 2017</div>
                <div class="row">12.30</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
                <div class="row">7 Agustus 2017</div>
                <div class="row">13.10</div>
            </div>
          </div>
        </div> <!-- ct #panel pesawat1 -->

        <hr>
        <a data-toggle="collapse" href="#pesawat4">
        <div class="col-md-10">
          <strong>Garuda</strong>
          <strong class="pull-right">Rp. 1.500.000</strong>
        </div></a>
        <!-- button remove -->
        <div class="col-md-2">
          <span class="caret pull-right"></span>
        </div>

        <!-- panel down -->
        <div id="pesawat4" class="panel-collapse collapse">
          <div class="panel-body margin5-top" style="margin-top:12%">
            <!-- icon -->
            <div class="col-md-2" style="margin-left:-3%">
              <div class="buled"></div>
              <div class="garis-non-transit"></div>
              <div class="buled primary-blue" style="margin-top:80px"></div>
            </div>
            <!-- content kota -->
            <div class="col-md-4">
                <div class="row">Yogyakarta</div>
                <div class="row">JOG</div>
                <div class="row">GA xxxx</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row">Bandung</div>
                <div class="row">BDO</div>
            </div>
            <!-- content waktu -->
            <div class="col-md-6">
                <div class="row">&nbsp</div>
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
                <div class="row margin8-top">&nbsp</div>
                <div class="row" style="margin-top:-12%;">&nbsp</div>
                <div class="row">7 Juli 2017</div>
                <div class="row">12.00</div>
            </div>
          </div>
        </div> <!-- ct #panel pesawat2 -->

      </div>
    </div>
  </div>
  <!-- ct Right Side -->
</div> <!-- ct container POLL -->
@stop
