@extends('layouts.app')

@section('title', 'New part')

@section('content')
    <x-forms.part :cars="$cars"/>
@endsection