@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Voeg type toe</h3>
    <form id="type-form" method="POST" action="{{ route('types.store') }}" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="keywords">Keywords</label>
            <input class="form-control @error('keywords') is-invalid @enderror" value="{{ old('keywords') }}" type="text" name="keywords" id="keywords">

            @error('keywords')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="description">Beschrijving</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" cols="30" rows="10">{{ old('description') }}</textarea>

            @error('type')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="hyperlink">Website link</label>
            <input class="form-control @error('hyperlink') is-invalid @enderror" value="{{ old('hyperlink') }}" type="text" name="hyperlink" id="hyperlink">

            @error('hyperlink')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="connected_mbti">Gekoppelde MBTI code</label>
            <input class="form-control @error('connected_mbti') is-invalid @enderror" value="{{ old('connected_mbti') }}" type="text" name="connected_mbti" id="connected_mbti">

            @error('connected_mbti')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <input name="theme_id" type="hidden" value="{{ $theme->id }}">

        <button type="submit" class="btn btn-primary">Opslaan</button>
    </form>
</div>
@endsection
