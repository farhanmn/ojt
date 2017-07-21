@extends('layouts.app')

@section('content')
<div class="container margin-container">
  <!-- step 1 2 3 -->
  <center>
    <div class="row">
      <div class="col-xs-6 col-md-4">
      </div>
      <div class="col-xs-6 col-md-4">
        <div class="connecting-line"></div>
        <button class="btn grey btn-circle btn-lg" style="float:left">1</button>
        <button class="btn grey btn-circle btn-lg">2</button>
        <button class="btn primary-blue btn-circle btn-lg" style="float:right">3</button>
      </div>
      <div class="col-xs-6 col-md-4">
      </div>
    </div>

    <div class="row" style="margin-bottom:5%; margin-top:1%">
      <div class="col-xs-6 col-md-4">

      </div>
      <div class="col-xs-6 col-md-4 small">
        <span style="float:left; margin-left:-5%">ISI FORMULIR</span>
        <span>BAGASI DAN ASURANSI</span>
        <span style="float:right; margin-right:-5%">PEMBAYARAN</span>
      </div>
      <div class="col-xs-6 col-md-4">
      </div>
    </div>
  </center>
  <!-- close step 1 2 3 -->
  <!-- panel box -->
  <div class="row">
      <div class="container">
          <div class="panel panel-default form-control-non-radius">
            <ul class="nav nav-tabs nav-justified overidenav">
              <li role="presentation" class="active">
                <a href="#bayar" data-toggle="tab" aria-controls="bayar" role="tab" title="Bayar Langsung">Bayar Langsung
                </a>
              </li>
            </ul>
            <form role="form">
                <div class="tab-content">
                    <!-- Bayar Langsung -->
                      <div class="tab-pane-active" role="tabpanel" id="bayar">
                          <div class="margin5">
                            <p>Dimanakah anda ingin kami kirimkan pemberitahuan pesanan anda?</p>
                            <form>
                              <div class="radio">
                                <label><input type="radio" name="optradio">SMS</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="optradio">Email</label>
                              </div>
                              <div class="radio">
                                <label><input type="radio" name="optradio">Email Lain</label>
                              </div>
                              <br>
                              <p>Yakin dengan pesanan tiket dan informasi penumpang?</p>
                              <div class="checkbox small">
                                <label>
                                <input type="checkbox" value="">Saya yakin dan menyetujui Segala syarat dan ketentuan yang berlaku
                                </label>
                              </div>
                            </form>
                          </div>

                      </div><!-- close tag bayar langsung -->

                  </div>
                          <!-- Button back -->
                          <ul class="list-inline pull-right margin5-top">
                              <li><a href="{{ url('/bagasi') }}"><button type="button" class="btn btn-primary form-control-non-radius primary-blue" style="width: 100px">Kembali</button></a></li>
                              <li><button type="button" class="btn btn-primary form-control-non-radius primary-blue" style="width: 100px">Lanjut</button></li>
                          </ul>
                </form>
          </div>
      </div>
</div>
</div>
@stop
