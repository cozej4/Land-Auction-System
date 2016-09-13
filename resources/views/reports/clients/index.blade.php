@extends('layouts.reports')

@section('page_title', 'Reports')

@section('side_bar')

    @include('reports.common.side_bar')

@endsection

@section('content')

    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/') }}">CDA</a>
                </li>
                <li class="active">Clients</li>
            </ol>
        </div>
    </div>

    <div class="row">

        <div class="col-sm-12">
            <div role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#all" aria-controls="all" role="tab" data-toggle="tab">All</a>
                    </li>
                    <li role="presentation">
                        <a href="#reserved" aria-controls="reserved" role="tab" data-toggle="tab">Reserved</a>
                    </li>
                    <li role="presentation">
                        <a href="#unreserved" aria-controls="unreserved" role="tab" data-toggle="tab">Unreserved</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="all">

                        @if(count($clients) > 0)

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                        <th>Registered</th>
                                        <th>Last Login</th>
                                        <th>Region</th>
                                        <th><i class="fa fa-info-circle"></i></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($clients as $client)
                                        <tr>
                                            <td>{{ $client->first_name }}</td>
                                            <td>{{ $client->middle_name }}</td>
                                            <td>{{ $client->last_name }} </td>
                                            <td>{{ $client->email_address }}</td>
                                            <td>{{ $client->phone_number }}</td>
                                            <td>{{ $client->created_at }}</td>
                                            <td>{{ $client->updated_at }}</td>
                                            <td>{{ $client->region }}</td>
                                            <td>
                                                <a href="{{ url('reports/clients/' . $client->user_detail_id) }}"
                                                   data-toggle="tooltip"
                                                   title="Click here for more details"><i class="fa fa-binoculars"></i></a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        @else

                            <h2 class="text-center">Empty</h2>

                        @endif

                    </div>
                    <div role="tabpanel" class="tab-pane" id="reserved">


                    </div>
                    <div role="tabpanel" class="tab-pane" id="unreserved">


                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
