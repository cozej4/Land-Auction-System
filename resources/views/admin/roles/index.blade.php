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
                        <a href="{{ url('admin/roles/create') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-plus"></i>
                            Add</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Roles</div>
                            <div class="panel-body">
                                @if(count($roles) > 0)
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Display Name</th>
                                                <th>Description</th>
                                                <th>Added</th>
                                                <th>Last Edited</th>
                                                <th><i class="fa fa-edit"></i></th>
                                                <th><i class="fa fa-trash"></i></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($roles as $role)
                                                <tr>
                                                    <td>{{ $role->id }}</td>
                                                    <td>{{ $role->name }}</td>
                                                    <td>
                                                        <a href="{{ url('admin/roles/' . $role->id) }}">{{ $role->display_name }}</a>
                                                    </td>
                                                    <td>{{ $role->description }}</td>
                                                    <td>{{ $role->created_at }}</td>
                                                    <td>{{ $role->updated_at }}</td>
                                                    <td><a href="{{ url('admin/roles/' . $role->id . '/edit') }}"><i class="fa fa-pencil"></i> Edit</a></td>
                                                    <td></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                @else
                                    <h2 class="text-center">Empty</h2>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

@endsection
