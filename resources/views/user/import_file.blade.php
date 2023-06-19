@extends('layouts.landing-base')

@section('content')

<div class="card mt-6">
    <div class="card-body">
        <h3 style="color: #79A368">Please fill up the form</h3>

        <form action="/upload-users" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="row mx-2 mb-2 mt-5">
                <div class="col-4 mb-2 text-end">
                    <label class="col-form-label text-black">Import File: <span style="color: #FF0000">&#42;</span></label>
                </div>
                <div class="col-5 mb-2">
                    <input class="form-control" name="filename" type="file" id="formFile">
                </div>
            </div>

            <div class="text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
            </div>        
    </div>
</div>

@endsection