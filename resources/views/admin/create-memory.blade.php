@extends('templates.menu')
@section('content')
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h2>Create a new memory</h2>
            <form action="{{route('memories.store')}}" method="post" enctype="multipart/form-data">
                @include('templates.admin-memory-form')
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection