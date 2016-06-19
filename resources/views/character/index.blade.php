@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $character->user->name }} 
                    <a class='label label-pill label-primary pull-right' href='/character/{{ $character->name }}/edit'>Edit</a>
                </div>
                <div class="panel-body">
                    <h3><strong>Name:</strong> {{ $character->name }}</h3>
                    <div class='row'>
                        <div class='col-md-4'>
                            <p><strong>Gender:</strong> {{ $character->gender }}</p>
                            <p><strong>Age</strong> {{ $character->age }}</p>
                            <p><strong>Build:</strong> {{ $character->build }}</p>
                            <p><strong>Complexion:</strong> {{ $character->complexion }}</p>
                            <p><strong>Hair:</strong> {{ $character->hair }}</p>
                            <p><strong>Notes:</strong> {{ $character->notes }}</p>
                        </div>
                        <div class='col-md-4 col-md-offset-2'>
                            <p><strong>Quirks:</strong> {{ $character->quirks }}</p>
                            <p><strong>Superstitions:</strong> {{ $character->superstitions }}</p>
                            <p><strong>Momentos:</strong> {{ $character->momentos }}</p>
                            <p><strong>Allies:</strong> {{ $character->allies }}</p>
                            <p><strong>Enemies:</strong> {{ $character->enemies }}</p>
                        </div>
                    </div>
                    <h3>Characteristics</h3>
                    <table class='table' style='max-width: 25%'>
                        <thead>
                            <th style='text-align: right'>Name</th>
                            <th>Value</th>
                            <th>Bonus</th>
                        </thead>
                        <tbody>
                        @foreach ($character->characteristics as $c)
                            <tr>
                                <td style='text-align: right; font-weight: bold'>{{ $c->name }}</td>
                                <td style='text-align: center;'>{{ $c->value }}</td>
                                <td style='text-align: center;'>{{ $c->bonus }}</td>
                            </tr>
                        @endforeach
                        <tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
