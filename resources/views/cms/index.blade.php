@extends('layouts.app')

@section('content')
<div class="m-cms container">
    <ul>
        <li><a href="{{ route('users.index') }}">Alle gebruikers/leden</a></li>
        <li><a href="{{ route('teams.index') }}">Alle teams</a></li>
        <li><a href="{{ route('positions.index') }}">Posities</a></li>
        <li><a href="{{ route('catagories.index') }}">Categorieën</a></li>
        <li><a href="{{ route('themes.index') }}">Thema's</a></li>
    </ul>
</div>
@endsection