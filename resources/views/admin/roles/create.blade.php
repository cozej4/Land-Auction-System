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
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('admin/roles') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-bolt"></i>
                            View All</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Add a Role</div>
                            <div class="panel-body">

                                @include('errors.list')

                                <form class="form-horizontal" method="post" action="{{ url('admin/roles') }}">

                                    {{ csrf_field() }}

                                    @include('admin.roles._form')

                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-9">
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
