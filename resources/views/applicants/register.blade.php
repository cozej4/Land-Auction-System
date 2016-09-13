@extends('layouts.app')

@section('page_title', 'Registration')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Usajili</h3>
                    </div>
                    <div class="panel-body">

                        @include('common.errors')

                        {!! Form::open(['url' => '/applicants/auth/register', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            {!! Form::label('first_name', 'Jina la kwanza * ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('middle_name', 'Jina la kati * ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('middle_name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('last_name', 'Jina la ukoo * ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('email_address', 'Barua pepe * ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('email_address', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone_number', 'Namba ya simu * ', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Mfano. 0719961077']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'Neno Siri', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password_confirmation', 'Thibitisha Neno Siri', ['class' => 'col-sm-3 control-label']) !!}
                            <div class="col-sm-9">
                                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i> Jisajili
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <div class="panel-footer">
                        Kama umeshajisajili bonyeza <a href="/applicants/login">hapa</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
