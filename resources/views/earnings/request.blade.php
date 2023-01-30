@extends('layouts.admin-portal')
@section('title',__('Requests'))

@section('content')
    <div class="row mb-2">
        <div class="col">
            <span>

                <h5 class="fw-bolder">
                    {{__('Earnings')}} /<span class="text-secondary">
                      {{__('Requests')}}
                    </span>
                </h5>
                <p class="text-muted">{{__('All of the Requests')}}</p>

            </span>

        </div>
        <div class="col text-end">

        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body ">
                    <div class="table-responsive  p-0">
                        <table class="table align-items-center mb-0" id="data_table">
                            <thead class="bg-gray-100">
                            <tr>
                                <th class="text-uppercase  text-xs">{{__('#')}}</th>
                                <th class="text-uppercase  text-xs">{{__('Student')}}</th>
                                <th class="text-uppercase  text-xs  ps-2">{{__('Diploma Name')}}</th>
                                <th class="text-uppercase  text-xs  ps-2">{{__('Action')}}</th>

                                <th class=""></th>
                            </tr>

                            </thead>

                            <tbody>
                            @foreach($requests as $request)

                                <tr>
                                    <td>
                                        <p class="mb-0">{{$request->id}}</p>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div>
                                                @if(empty($users[$request->user_id]->photo))
                                                    <div class="avatar avatar-md rounded-circle bg-info-light border-radius-md p-2 ">
                                                        <h6 class="text-info-light text-uppercase mt-1">{{$users[$request->user_id]->first_name['0']}}{{$users[$request->user_id]->last_name['0']}}

                                                        </h6>

                                                    </div>
                                                @else

                                                    <img src=""
                                                         class="avatar avatar-md rounded-circle  shadow-sm">
                                                @endif
                                            </div>
                                            <div class="d-flex flex-column justify-content-center ms-3">
                                                <a href="/student-about?id={{$users[$request->user_id]->id}}">
                                                    <h6 class="mb-0">{{$users[$request->user_id]->first_name}} {{$users[$request->user_id]->last_name}}</h6>
                                                </a>

                                                <p class=" text-sm text-muted mb-0">{{$users[$request->user_id]->email}}</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p>{{ $request->diploma_name}}</p>
                                    </td>
                                    <td class="align-middle text-right">
                                        <a class=" btn btn-info"
                                           href="/order-details?id={{$request->id}}">{{__('View Order')}}</a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $(document).ready(function () {
            "use strict";
            $('#data_table').DataTable(
            );

        });
    </script>

@endsection

