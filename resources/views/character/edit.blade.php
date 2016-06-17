@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ $character->user->name }} 
                    <a class='label label-pill label-primary pull-right' href='/character/{{ $character->id }}/edit'>Edit</a>
                </div>
                <div class="panel-body">
                    <form action='/character/{{ $character->id }}/edit' method='post'>
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <h3><strong>Name:<strong> <input type="text" name="name" value="{{ $character->name }}" /></h3>
                        <div class='row'>
                            <div class='col-md-4'>
                                <p><strong>Gender:</strong> <input type="text" name="gender" value="{{ $character->gender }}" /></p>
                                <p><strong>Age</strong> <input type="number" name="age" value="{{ $character->age }}" /></p>
                                <p><strong>Build:</strong> <input type="text" name="build" value="{{ $character->build }}" /></p>
                                <p><strong>Complexion:</strong> <input type="text" name="complexion" value="{{ $character->complexion }}" /></p>
                                <p><strong>Hair:</strong> <input type="text" name="hair" value="{{ $character->hair }}" /></p>
                                <p><strong>Notes:</strong> <textarea name="notes">{{ $character->notes }}</textarea></p>
                            </div>
                            <div class='col-md-4 col-md-offset-2'>
                                <p><strong>Quirks:</strong> <input type="text" name="quirks" value="{{ $character->quirks }}" /></p>
                                <p><strong>Superstitions:</strong> <input type="text" name="superstitions" value="{{ $character->superstitions }}" /></p>
                                <p><strong>Momentos:</strong> <input type="text" name="momentos" value="{{ $character->momentos }}" /></p>
                                <p><strong>Allies:</strong> <input type="text" name="allies" value="{{ $character->allies }}" /></p>
                                <p><strong>Enemies:</strong> <input type="text" name="enemies" value="{{ $character->enemies }}" /></p>
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
                                    <td style='text-align: center;'><input type="number" name="value_{{ $c->id }}" value="{{ $c->value }}" min="1" max="20" step="1" /></td>
                                    <td style='text-align: center;'>{{ $c->bonus }}</td>
                                </tr>
                            @endforeach
                            <tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
