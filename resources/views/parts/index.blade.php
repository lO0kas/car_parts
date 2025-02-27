@extends('layouts.app')

@section('title', 'List of parts')

@section('content')
    @if($parts->count())
        <ul>
            @foreach($parts as $part)
                <li>
                    {{ $part->name }}
                </li>
            @endforeach
        </ul>
    @else
        <p>Nothing was found</p>
    @endif
@endsection