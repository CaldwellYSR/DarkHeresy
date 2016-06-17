@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">New Character</div>
                <div class="panel-body">
                    <form action='/character/new' method='post'>
                        {{ csrf_field() }}
                        <h3><strong>Name:<strong> <input type="text" name="name" value="{{ old('name') }}" /></h3>
                        <div class='row'>
                            <div class='col-md-4'>
                                <p><strong>Gender:</strong> <input type="text" name="gender" value="{{ old('gender') }}" /></p>
                                <p><strong>Age</strong> <input type="number" name="age" value="{{ old('age') }}" /></p>
                                <p><strong>Build:</strong> <input type="text" name="build" value="{{ old('build') }}" /></p>
                                <p><strong>Complexion:</strong> <input type="text" name="complexion" value="{{ old('complexion') }}" /></p>
                                <p><strong>Hair:</strong> <input type="text" name="hair" value="{{ old('hair') }}" /></p>
                                <p><strong>Notes:</strong> <textarea name="notes">{{ old('notes') }}</textarea></p>
                            </div>
                            <div class='col-md-4 col-md-offset-2'>
                                <p><strong>Quirks:</strong> <input type="text" name="quirks" value="{{ old('quirks') }}" /></p>
                                <p><strong>Superstitions:</strong> <input type="text" name="superstitions" value="{{ old('superstitions') }}" /></p>
                                <p><strong>Momentos:</strong> <input type="text" name="momentos" value="{{ old('momentos') }}" /></p>
                                <p><strong>Allies:</strong> <input type="text" name="allies" value="{{ old('allies') }}" /></p>
                                <p><strong>Enemies:</strong> <input type="text" name="enemies" value="{{ old('enemies') }}" /></p>
                            </div>
                        </div>
                        <h3>Characteristics</h3>
                        <button id="roll_char" class="btn btn-primary-outline">Roll Characteristic</button>
                        <ul id='roll_values'>
                        </ul>
                        <table class='table' style='max-width: 25%'>
                            <thead>
                                <th style='text-align: right'>Name</th>
                                <th>Value</th>
                                <th>Bonus</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td style='text-align: right; font-weight: bold'>Weapon Skill</td>
                                <td style='text-align: center;'><input type="number" name="WS" value="{{ old("WS") }}" min="1" max="20" step="1" /></td>
                                <td style='text-align: center;'>0</td>
                            </tr>
                            <tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
