@extends('hotel.layouts.master')
@section('content')
{{-- <div class="container-fluid pt-4 px-4">
    <div class="card bg-secondary">
        <div class="card-header"></div>
        <div class="card-body"></div>
        <div class="card-footer"></div>
    </div>
</div> --}}
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12" >
            <div class="bg-secondary rounded h-100 p-4">
               <div class="d-flex justify-content-between">
                <h6 class="mb-4">Room Types</h6>
                <div class="btn btn-success"><a href="{{url('hotels/room-types/create')}}" class="text-white">Create</a></div>
               </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Hotel Name</th>
                                <th scope="col"> Name</th>
                                <th scope="col">Price</th>
                                {{-- <th scope="col">Country</th>
                                <th scope="col">ZIP</th>
                                <th scope="col">Status</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($roomTypesLists as $roomTypesList)
                           <tr>
                            <th scope="row">{{$roomTypesList->id}}</th>
                            <td>{{$roomTypesList->user->name}}</td>
                            <td>{{$roomTypesList->name}}</td>
                            <td>{{$roomTypesList->price}}</td>
                            {{-- <td>USA</td>
                            <td>123</td>
                            <td>Member</td> --}}
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
