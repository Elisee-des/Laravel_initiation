@extends('layouts.app')

@section('content')
<h1>Listes des articles</h1>
@foreach($articles as $article)
<h3>{{ $article }}</h3>
@endforeach
@endsection