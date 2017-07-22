@extends('layouts.app')
@section('content')
<div class="container margin5-top">
  <div class="col-md-8">
    <div class="test"><h4 style="padding: 2% 0 2% 7%; margin: 0;color: #fff">Buat Akun Baru</h4></div>
    <div class="panel panel-default radius">
      <div class="panel-body">
          <div class="col-md-12">
            <div class="form-group">
              <span>Email</span>
              <input type="text" class="form-control radius" id="usr" placeholder="ex: mail@gmail.com"/>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <span>Password</span>
              <input type="password" id="password" name="password" class="form-control radius" data-toggle="password">
            </div>
          </div>
          <div class="col-md-12">
            <span>Masukkan Kode Captcha</span>
						<span>{!! captcha_image_html('ContactCaptcha') !!}</span>
				    <input type="text" class="form-control radius" style="margin-top:1%" id="inputCapcha">
          </div>
          <div class="col-md-12 margin5-top">
            <input type="checkbox" name="" value="">
            <span>Saya setuju dengan</span><label>&nbspSyarat dan Ketentuan</label>
          </div>
      </div>
    </div><!-- ct panel -->
    <button type="button" class="btn btn-primary-yel" style="width:100%" name="button">Daftar</button>
		<div class="row margin5">
			<!-- <hr>	<center>Atau</center><hr> -->
			<center>
			<div class="col-md-5" style="height:1px; background-color:#000; margin-top:1%">

			</div>
			<div class="col-md-2">
				Atau
			</div>
			<div class="col-md-5" style="height:1px; background-color:#000; margin-top:1%">

			</div>
			</center>
		</div>
		<div class="row margin5">
			<div class="col-md-6">
					<button type="button" class="btn btn-primary" style="width:100%" name="button"><i class="fa fa-facebook-official"></i>&nbspDaftar dengan Facebook</button>
			</div>
			<div class="col-md-6">
					<button type="button" class="btn btn-danger" style="width:100%" name="button"><i class="fa fa-google-plus"></i>&nbspDaftar dengan Google</button>
			</div>
		</div>
  </div><!-- ct col-md-8 -->

  <!-- Right Side -->
  <div class="col-md-4 margin5-top">
    <div class="row margin5-top">
      <center>
    	<div class="col-md-5">
        <div class="circle primary-blue" style="border-radius:70%; height:70px; width:70px">
          <img src="/img/ic-poin.png" style="margin-top:15%">
        </div>
    	</div>
      </center>
			<div class="col-md-7">
				<strong style="color:#0033a8">Dapatkan Poin</strong><br>
				<span class="small">Dapatkan poin setiap melakukan transaksi dengan memiliki akun</span>
			</div>
    </div><br><br>
		<div class="row margin5-top">
      <center>
    	<div class="col-md-5">
        <div class="circle primary-blue" style="border-radius:70%; height:70px; width:70px">
          <img src="/img/ic-wallet.png" style="margin-top:15%">
        </div>
    	</div>
      </center>
			<div class="col-md-7">
				<strong style="color:#0033a8">Hot Wallet</strong><br>
				<span class="small">Anda akan mendapatkan kenyamanan berupa hot wallet ketika memiliki akun di citos.id</span><br>
				<a class="small" href="#">Apa itu Hot Wallet?</a>
			</div>
    </div><br><br>
		<div class="row margin5-top">
      <center>
    	<div class="col-md-5">
        <div class="circle primary-blue" style="border-radius:70%; height:70px; width:70px">
          <img src="/img/ic-time.png" style="margin-top:15%">
        </div>
    	</div>
      </center>
			<div class="col-md-7">
				<strong style="color:#0033a8">Cepat dan Efisien</strong><br>
				<span class="small">Dengan memiliki akun, Anda dapat memilih tiket dengan cepat</span>
			</div>
    </div>
  </div>
</div>

@endsection
