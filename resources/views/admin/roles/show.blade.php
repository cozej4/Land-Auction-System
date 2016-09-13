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
                    <div class="col-md-12 pull-right">
                        <a href="{{ url('/roles/create') }}" class="btn btn-primary"><i
                                    class="fa fa-plus"></i>
                            Add</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Show a Role <a href="{{ url('admin/roles/' . $role->id . '/edit') }}" class="pull-right"><i class="fa fa-pencil"></i> Edit</a></div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{ $role->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $role->display_name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Permission(s)</td>
                                            <td>
                                                @if(count($permissions) > 0)
                                                    <ol>
                                                        @foreach($permissions as $permission)
                                                            <li>{{ $permission->display_name }}</li>
                                                        @endforeach
                                                    </ol>
                                                @else
                                                    Empty
                                                @endif
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h4>Add</h4>
                                                        <form class="form-horizontal" method="post"
                                                              action="{{ action('Admin\RoleController@attachPermission') }}">
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="role_id" value="{{ $role->id }}">

                                                            <div class="form-group">
                                                                <label for="permission_id"
                                                                       class="col-sm-4 control-label">Permission</label>
                                                                <div class="col-sm-8">
                                                                    <select name="permission_id" id="permission_id"
                                                                            class="form-control">
                                                                        @if(count($new_permissions) > 0)
                                                                            @foreach($new_permissions as $new_permission)
                                                                                <option value="{{ $new_permission->id }}">{{ $new_permission->display_name }}</option>
                                                                            @endforeach
                                                                        @else
                                                                            <option value="">Empty</option>
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-8 col-sm-offset-4">
                                                                    <button type="submit" class="btn btn-primary">Assign
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
