@extends('layouts.entrust')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                @include('admin.common.side_bar')
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <a href="{{ url('/roles') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-bolt"></i>
                            View All</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Add a Permission</div>
                            <div class="panel-body">

                                @include('errors.list')

                                <form class="form-horizontal" method="post" action="{{ url('admin/permissions') }}">

                                    {{ csrf_field() }}

                                    @include('admin.permissions._form')

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
    </div>
@endsection
