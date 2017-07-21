@extends('layouts.apps') @section('content')
<div class="container editpadding">



  <center>
    <div class="row">

      <div class="col-xs-5 fontsize2 margintop1">
        Yogyakarta(JOG)
      </div>
      <div class="col-xs-2 margintop1">
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </div>
      <div class="col-xs-5 fontsize2 margintop1">
        Jakarta(CGK)
      </div>
    </div>
    <div class="row">
      <div class="col-xs-5 fontsize1">
        Senin, 17 Jul 2017
      </div>
      <div class="col-xs-2">

      </div>
      <div class="col-xs-5 fontsize1">
        Selasa, 18 Agt 2017
      </div>
    </div>
    <button type="button" class="btn btn-primary" id="btnpencarian" name="button">Ganti Pencarian</button>
    <div class="row">
      <div class="col-xs-12 ">
        <!-- Nav tabs -->

        <ul class="nav nav-tabs overidenavtab2" role="tablist">
          <li role="presentation" class="active"><a href="#keberangkatan" aria-controls="home" role="tab" data-toggle="tab">Keberangkatan</a></li>
          <li role="presentation"><a href="#kepulangan" aria-controls="profile" role="tab" data-toggle="tab">Kepulangan</a></li>
        </ul>
      </div>
    </div>
  </center>
  <!-- Tab panes -->
  <div class="tab-content" style="padding:0px">
    <div role="tabpanel" class="tab-pane active" id="keberangkatan">
      <div class="panel panel-default radius" style="margin-bottom:0px">
        <div class="panel-heading warnaheading">
          <div class="row" style="padding:0px">
            <div class="col-xs-12 editpadding">
              <div class="col-xs-3 text-right editsizetext marginkhusus warnabiru" id="xc">
                Filter :
              </div>
              <div class="col-xs-3 text-left editpadding editsizetext widthharga warnabiru">
                Harga<span class="caret"></span>
              </div>
              <div class="col-xs-3 text-left editpadding editsizetext widthmaskapai warnabiru">
                Maskapai<span class="caret"></span>
              </div>
              <div class="col-xs-3 text-left editpadding editsizetext widthwaktu warnabiru">
                Waktu<span class="caret"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- mulai dari sini bagian isi nya -->
      <div class="panel panel-default radius borderTop" id="keberangkatan" style="margin-bottom:0px">
        <div class="panel-body">
          <center>
            <div class="row">
              <div class="col-xs-3 kota" id="Icon1">
                <img src="/img/Batik.png" style="width:100%;height:100%">
                <p>Batik Air</p>
              </div>
              <div class="col-xs-2 list1" id="jam1">
                <p>15:00</p>
                <p>
                  <br>16:00</p>
              </div>
              <div class="col-xs-3 list1" id="kota1" style="text-align:left">
                <p>JOG
                  <br>(12-07-17)</p>
                <p>CGK
                  <br>(12-07-17)</p>
              </div>
              <div class="col-xs-4 list1" id="harga1">
                <p>Rp 900.000
                  <br>Langsung</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3"></div>
              <div class="col-xs-2" id="detail1">
                <button class="btn btn-primary btn-xs tanggal">Detail</button>
              </div>
              <div class="col-xs-3 pointer tanggal">
                <a data-toggle="collapse" href="#isiKelas1">
                <p class="clickable" id="pilih1" style="text-align:left">Pilih Kelas Lain</p></a>
              </div>
              <div class="col-xs-4">
                <input type="checkbox" id="cekBox1">
              </div>
            </div>


        </div>
        </center>


        <div class="panel-heading panel-collapse collapse editdetailnya" id="isiKelas1">
            <h1>Hello world</h1>
        </div>


      </div>

      <div class="panel panel-default radius borderTop" id="keberangkatan" style="margin-bottom:0px;" >
        <div class="panel-body">
          <center>
            <div class="row">
              <div class="col-xs-3 kota" id="Icon2">
                <img src="/img/Batik.png" style="width:100%;height:100%">
                <p>Batik Air</p>
              </div>
              <div class="col-xs-2 list1" id="jam2">
                <p>15:00</p>
                <p>
                  <br>16:00</p>
              </div>
              <div class="col-xs-3 list1" id="kota2" style="text-align:left">
                <p>JOG
                  <br>(12-07-17)</p>
                <p>CGK
                  <br>(12-07-17)</p>
              </div>
              <div class="col-xs-4 list1" id="harga2">
                <p>Rp 900.000
                  <br>Langsung</p>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3"></div>
              <div class="col-xs-2" id="detail2">
                <button class="btn btn-primary btn-xs tanggal">Detail</button>
              </div>
              <div class="col-xs-3 pointer tanggal">
                <p class="clickable" id="pilih2" style="text-align:left">Pilih Kelas Lain</p>
              </div>
              <div class="col-xs-4">
                <input type="checkbox" id="cekBox2">
              </div>
            </div>
        </div>
        </center>
      </div>
    </div>

  <div role="tabpanel" class="tab-pane" id="kepulangan">
    <div class="panel panel-default radius">
      <div class="panel-heading warnaheading">
        <div class="row">
          <div class="col-xs-12 editpadding">
            <div class="col-xs-3 text-right editsizetext marginkhusus warnabiru" id="xc2">
              Filter :
            </div>
            <div class="col-xs-3 text-left editpadding editsizetext widthharga warnabiru">
              Harga<span class="caret"></span>
            </div>
            <div class="col-xs-3 text-left editpadding editsizetext widthmaskapai warnabiru">
              Maskapai<span class="caret"></span>
            </div>
            <div class="col-xs-3 text-left editpadding editsizetext widthwaktu warnabiru">
              Waktu<span class="caret"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>




</div>
</div>
<div class="container-fluid">
<div class="row">
  <div class="col-xs-12">
    <div class="btn-group" >
      <a href="#" class="btn btn-primary btn-circle btn-lg btn-fab" id="main">
        <i class="glyphicon glyphicon-list" style="line-height: 1.50;"></i>
      </a>
    </div>
  </div>
</div>
</div>
@stop
