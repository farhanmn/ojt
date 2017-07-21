@extends('layouts.apps')
@section('content')
<div class="container">
  <center>
    <div class="row margin5-top">
      <h4 style="color:#0033a8">Daftar</h4>
    </div>
  </center>
  <div class="small">
      <form>
      <div class="form-group margin5-top">
        Email
        <input type="text" class="form-control input-sm radius">
      </div>
      <div class="form-group">
        Password
        <input type="password" class="form-control input-sm radius" data-toggle="password" id="password">
      </div>
      <div class="checkbox">
        <label><input type="checkbox" value="">Saya setuju dengan</label>
        <strong>Syarat dan Ketentuan</strong>
      </div>
      <button type="button" class="btn primary-yellow col-xs-12">Daftar</button>
    </form>
  </div><!-- ct font size class small -->
</div>
@stop
