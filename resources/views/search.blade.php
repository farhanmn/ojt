@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-picture"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form">
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                        <div class="row">
                            <div class="col-lg-7">
                                    <div class="row">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                            Daftar Pesawat
                                            </div>
                                            <div class="panel-body">
                                                <div id="satu" class="btn btn-lg btn-default btn-block daftar open">
                                                Pesawat 1 <span id="satu-close" class="close"></span>
                                                </div>
                                                <div id="dua" class="btn btn-lg btn-default btn-block daftar open">
                                                Pesawat 2 <span id="dua-close" class="close"></span>
                                                </div>
                                                <div id="tiga" class="btn btn-lg btn-default btn-block daftar open">
                                                Pesawat 3 <span id="tiga-close" class="close"></span>
                                                </div>
                                                <div id="empat" class="btn btn-lg btn-default btn-block daftar open">
                                                Pesawat 4 <span id="empat-close" class="close"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-lg-1"></div>
                            <div class="col-lg-4">
                                <div class="row">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                            Daftar pesawat yang dipilih
                                            </div>
                                            <div class="panel-body" id="listy">
                                                
                                                </div>
                                                </div>
                                            </div>
                                            <a class="btn btn-block btn-social btn-google-plus">
                                            <i class="fa fa-google-plus"></i> Sign in with Google
                                             </a>
                                        </div>
                                    </div>
                            </div>        
                        </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                        </ul>
                    </div>
                    </form>
                    </div>
                    </section>
                    </div>
                    </div>
                    
@stop

