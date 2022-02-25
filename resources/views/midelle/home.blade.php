@extends('home')
@section('name')
    <fieldset>
        <legend>Midelle Level</legend>
        <table>
            @foreach ($items as $item)
                <tr>
                    <td>Tilte :</td>
                    <td><a href="/itunes/show/{{$item->id}}">{{$item->title}}</a></td></tr><tr>
                    <td>Poster :</td>
                    <td>{{$item->poster}}</td>
                </tr>
            @endforeach
        </table>
    </fieldset>
</body>
</html>
@endsection('name')