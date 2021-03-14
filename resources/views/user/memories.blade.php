@extends('templates.menu')
@section('content')
<div class="row">
    <div class="col-md-4 text-center pt-4">
        <div class="card mb-3" style="max-width: 18rem;">
            @if (Session::has('ok'))
                <div class="alert alert-success">
                    <p>{{Session::get('ok')}}</p>
                </div>
            @endif
            @if (Session::has('erro'))
                <div class="alert alert-success">
                    <p>{{Session::get('erro')}}</p>
                </div>
            @endif
            <h5 class="text-secondary mt-4">Create a memory</h5>
            <div class="card-body">
                <div class="d-flex justify-content-center my-4">
                    <img src="{{asset('logo.png')}}" alt="logo Serapys">
                </div>
                <form action="{{route('memories.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="file" accept="image/*" class="form-control" id="avatar" name="avatar" required>
                                <label for="avatar" class="mt-2" style="color:#FF8A5F">Chose an avatar</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="mt-2" style="color:#FF8A5F">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="surname" class="mt-2" style="color:#FF8A5F">Surname</label>
                                <input type="text" class="form-control" id="surname" name="surname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="bird" class="mt-2" style="color:#FF8A5F">Bird</label>
                                <input type="date" class="form-control" id="bird" name="bird" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="death" class="mt-2" style="color:#FF8A5F">Death</label>
                                <input type="date" class="form-control" id="death" name="death" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="biography" class="mt-2" style="color:#FF8A5F">Biography</label>
                                <textarea class="form-control" name="biography" id="biography" required cols="10" rows="2"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12 ">
                            <div class="form-group">
                                <button class="btn mt-3 bt">Save ></button>
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8 text-center pt-4">
        <div class="row">
            @foreach ($memories as $memory)
                <div class="col-md-3">
                    <div class="card mb-3" style="max-width: 18rem;">
                        <div class="">
                            <div class="d-flex justify-content-center" style="height: 160px;">
                                <img src="{{url("storage/$memory->avatar")}}" class='img-fluid' alt="{{$memory->name}}">
                            </div>
                        </div>
                        <div class="card-info">
                            <h6 class="mt-3">{{$memory->name .' '. $memory->surname}}</h6>
                        </div>
                    
                        <div>
                            {{date('Y', strtotime($memory->bird))}} - {{date('Y', strtotime($memory->death))}}
        
                            <p class="p-3 text-start">{{$memory->biography}}</p>
                        </div>
        
                    </div>
                </div>
            @endforeach
            {{$memories->links()}}
        </div>
     
    </div>
@endsection