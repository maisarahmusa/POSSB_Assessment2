@extends('layouts.landing-base')

@section('content')

<div class="card mt-6">
    <div class="card-body">
        <h3 style="color: #79A368" class="text-center">Details of Purchase</h3>

        <div class="card-body">
            <table class="table line-table mt-6 stripe" style="width:100%">
                <thead class="text-black">
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Mobile Number</th>
                        <th class="text-center">Text</th>
                        <th class="text-center">Mobile Number</th>
                        <th class="text-center">Item Purchased</th> 

                    </tr>
                    <tbody>
                    {{-- @foreach ($purchase as $p) 
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->email}}</td>
                            <td>{{$p->mobile_number}}</td>
                            <td>{{$p->items}}</td>
                        </tr>
                    @endforeach --}}
                    </tbody>
                </thead>
            </table>

            <a href="/purchase-create"><button class="btn btn-primary">Back</button></a>
        </div>
    </div>
</div>

@endsection