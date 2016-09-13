
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
                        <a href="{{ url('admin/staff/create') }}" class="btn btn-primary pull-right"><i
                                    class="fa fa-plus"></i>
                            Add</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">Show a Staff</div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <tbody>
                                        <tr>
                                            <td>Name</td>
                                            <td>{{ $user->name }}</td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <tr>
                                            <td>Role(s)</td>
                                            <td>
                                                @if(count($roles) > 0)
                                                    <ol>
                                                        @foreach($roles as $role)
                                                            <li>{{ $role->display_name }}</li>
                                                        @endforeach
                                                    </ol>
                                                @else
                                                    Empty
                                                @endif
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h4>Add</h4>
                                                        <form class="form-horizontal" method="post"
                                                              action="{{ action('Admin\UserController@attachRole') }}">
                                                            {{ csrf_field() }}

                                                            <input type="hidden" name="user_id" value="{{ $user->id }}">

                                                            <div class="form-group">
                                                                <label for="role"
                                                                       class="col-sm-3 control-label">Role</label>
                                                                <div class="col-sm-9">
                                                                    <select name="role_id" id="role" class="form-control">
                                                                        @foreach($new_roles as $new_role)
                                                                            <option value="{{ $new_role->id }}">{{ $new_role->display_name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-9 col-sm-offset-3">
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
