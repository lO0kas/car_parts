@extends('layouts.app')

@section('title', 'Edit car ' . $car->name)

@section('content')
    <x-forms.car :id="$car->car_id" :name="$car->name" :is-registered="$car->is_registered" :registration-number="$car->registration_number"/>
@endsection