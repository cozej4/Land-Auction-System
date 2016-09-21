@extends('layouts.admin')

@section('page_title' , ' - Admin')

@section('nav_bar')

    @include('admin.common.nav_bar')

@endsection

@section('side_bar')

    @include('admin.common.nav_side_menu')

@endsection

@section('main_content')
        <div class="row">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('admin/staff') }}" class="btn btn-primary pull-right">
                            View All</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Edit {{ $user->first_name }} {{ $user->middle_name }} {{ $user->last_name }}</div>
                            <div class="panel-body">
                                <br><br>
                                @include('errors.list')

                                {!! Form::model($user, ['method' => 'PATCH', 'action' => ['Admin\UserController@update', $user->user_detail_id] , 'class' => 'form-horizontal']) !!}

                                @include('admin.staff._form')

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-btn fa-user"></i> Update
                                        </button>
                                    </div>
                                </div>

                                {!! Form::close() !!}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
