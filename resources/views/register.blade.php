@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row" style="margin-top: 30px; margin-bottom: 40px">
		<div class="col-lg-12">
		<!-- top -->
		<h1>Buat Akun Baru</h1>
		</div>
		<div class="col-lg-7">
		<!-- div form sign up -->
			<form>
			<div class="panel panel-primary">
			<!-- bold line -->
				<div class="panel-heading" style="padding-bottom: 0"></div>
				<div class="panel-body">
				<!-- form -->
					<div class="form-group">
					<!-- email -->
						<label>Email</label>
						<input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email. ex : mail@email.com">
					</div>
					<div class="form-group">
					<!-- password -->
						<label for="inputPassword">Password</label>
				        <div class="input-group">
				          <input type="password" id="value-pass" class="form-control" placeholder="password">
				          <span class="input-group-btn">
				            <button id="show-pass" class="btn btn-default reveal" type="button"><i class="fa fa-eye"></i></button>
				          </span>
				        </div>
					</div>
					<div class="form-group">
					<!-- captcha -->
					    <label>Captcha</label>
					    {!! captcha_image_html('ContactCaptcha') !!}
					    <input type="text" class="form-control" id="inputCapcha" placeholder="Masukan Capcha">
					</div>
				</div>
			</div>
			<div class="form-group">
			<!-- submit -->
			  <center>
			    <input type="submit" class="btn btn-warning btn-block btn-submit-bold" name="signup" value="Daftar">
			  </center>
			</div>
			</form>

			<!-- straight line -->
			<div class="col-lg-5 str-line">
			</div>

			<div class="col-lg-2">
			<center>Atau</center>
			</div>

			<!-- straight line -->
			<div class="col-lg-5 str-line">
			</div>
			<div style="margin-top: 8%">
			<!-- sign in with -->
			<div class="col-lg-6">
			<!-- button g+ -->
			<a class="btn btn-danger btn-block"><i class="fa fa-google-plus"></i> Sign in with Google</a>
			</div>
			<div class="col-lg-6">
			<!-- button facebook -->
			<a class="btn btn-primary btn-block"><i class="fa fa-facebook-official"></i> Log in with Facebook</a>
			</div>
			</div>
		</div>

		<div class="col-lg-5">
			<div class="col-lg-12">
				<div class="col-lg-4">
				<!-- image icon -->
				<center>
				<i class="fa fa-vcard logo-icon" style="padding: 20px 0"></i>
				</center>
				</div>
				<div class="col-lg-8">
				<!-- detail -->
					<div class="col-lg-12">
					<!-- title -->
					<h4>HOT WALLET</h4>
					</div>
					<div class="col-lg-12">
					<!-- description -->
					Anda akan mendapatkan kenyamanan berupa hot wallet ketika memiliki akun di citos.id.
					Apa itu hot wallet? cek disini.
					</div>
				</div>
			</div>
			<div class="col-lg-12" style="margin-top: 5%">
				<div class="col-lg-4">
				<!-- image icon -->
				<center>
				<i class="fa fa-paper-plane logo-icon"></i>
				</center>
				</div>
				<div class="col-lg-8">
				<!-- detail -->
					<div class="col-lg-12">
					<!-- title -->
					<h4>POIN</h4>
					</div>
					<div class="col-lg-12">
					<!-- description -->
					Dapatkan poin setiap melakukan transaksi dengan memiliki akun.
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
