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
                        <a href="{{ url('admin/staff') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-plus"></i>
                            View All</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Add a Staff</div>
                            <div class="panel-body">

                                @include('errors.list')

                                    {!! Form::open(['action' => 'Admin\UserController@store', 'class' => 'form-horizontal', 'role' => 'form']) !!}

                                    @include('admin.staff._form')

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Add
                                            </button>
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
