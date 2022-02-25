@extends('home')
@section('name')
    <fieldset>
        <legend>Midelle Level - {{$item->title}}</legend>
        <table>
            <tr>
                <td>Title</td>
                <td>{{$item->title}}</td>
            </tr>
            <tr>
                <td>Poster</td>
                <td>{{$item->poster}}</td>
            </tr>
            <tr>
                <td>Description</td>
                <td>{{$item->description}}</td>
            </tr>
            <tr>
                <td>Link</td>
                <td><a href="{{$item->link}}">{{$item->link}}</a></td>
            </tr>
            <tr>
                
                <td><a href="{{ url()->previous() }}">back</a></td>
            </tr>
            
        </table>

    </fieldset>
@endsection