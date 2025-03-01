@extends('errors::minimal')

@section('title', __('Error ') . $exception->getCode())
@section('code', $exception->getCode())
@section('message', __($exception->getMessage()))