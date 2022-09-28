@extends('layouts.app')
@extends('layouts.navbar')
@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                {!! \Session::get('success') !!}
            </div>
        @endif
            <h1 class="display-4">Project</h1>
            <a class="btn btn-primary" href="/project/create" role="button">Add</a>
        </div>
    </div>
    <br>
    <div class="row">
        @if(count($project)>0)
            @foreach ($project as $project)
                <div class="col-sm-4">
                    <div class="card">
                            <div class="card-body">
                                <p class="card-title">{{$project->judul}}</p>
                                <p class="card-text">{{$project->deskripsi}}</p>
                                <a class="btn btn-primary" href="/project/{{$project->id}}" role="button">Show</a>
                            </div>
                    </div>
                    <br>
                </div>
            @endforeach
        @else
            <h3>Tidak ada data</h3>
        @endif
    </div>
</div>     
@endsection