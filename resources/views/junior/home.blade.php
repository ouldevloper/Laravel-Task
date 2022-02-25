@extends('home')
@section('name')
    <center>
        <fieldset>
            <legend>Junior Level</legend>
            <table>
                <tr><td>Current Controller :</td><td> {{$controller}}</td></tr>
                <tr><td>Current Action :    </td><td> {{$action}} </td></tr>
                <tr><td>Current Date Time : </td><td> {{$dt}} </td></tr>
            </table>
        </fieldset>
    </center>
@endsection