@extends('templates.menu')
@section('content')
    <div class="row">
        <div class="col">
            <h1>Memories</h1>
            <a href="{{route('admin.memories.create')}}" class="btn btn-primary mb-2">New</a>
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
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Bird</th>
                    <th>Death</th>
                    <th>Biography</th>
                    <th>Options</th>
                </thead>
                <tbody>
                    @foreach ($memories as $memory)
                    <tr>
                        <td>{{$memory->name}}</td>
                        <td>{{$memory->surname}}</td>
                        <td>{{date('Y', strtotime($memory->bird))}}</td>
                        <td>{{date('Y', strtotime($memory->death))}}</td>
                        <td>{{$memory->biography}}</td>
                        <td style="width: 230px">
                            <div class="row">
                                <div class="col">
                                    <a href="{{route('admin.memories.edit', $memory->id)}}" class="btn btn-primary btn-xs">
                                        <span class="bi bi-pencil" > Edit</span> 
                                    </a>
                                </div>
                                <div class="col">
                                    <a onclick="return confirm('Delete this record?')" href="{{route('admin.memories.destroy', $memory->id)}}" class="btn btn-danger btn-xs">
                                        <span class="bi bi-trash" > Delete</span> 
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$memories->links()}}
        </div>
    </div>
@endsection