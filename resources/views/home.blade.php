@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <nav class="list-group">
                    @foreach ($characters as $character)
                        <a class="list-group-item" href='/character/{{ $character->id }}'>{{ $character->name }}</a>
                    @endforeach
                    </nav>
                    <a href="/character/new" class="btn btn-primary">New Character</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
