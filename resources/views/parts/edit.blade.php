@extends('layouts.app')

@section('title', 'Edit part ' . $part->part_id)

@section('content')
    <x-forms.part :cars="$cars" :id="$part->part_id" :name="$part->name" :serialnumber="$part->serialnumber" :car-id="$part->car_id"/>
@endsection