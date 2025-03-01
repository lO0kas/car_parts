@extends('layouts.app')

@section('title', 'List of parts')

@section('header-actions')
    <a href="{{ route('parts.create') }}" class="btn btn-primary">New</a>
@endsection

@section('content')
    <x-forms.filter :action="route('parts.index')"/>

    @if($parts->count())
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Serial number</th>
                        <th>Car</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($parts as $part)
                        <tr>
                            <td>{{ $part->name }}</td>
                            <td>{{ $part->serialnumber }}</td>
                            <td>@if($part->car) {{ $part->car->name }} @endif</td>
                            <td class="text-end">
                                <form action="{{ route('parts.destroy', ['part' => $part->part_id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="btn-group">
                                        <a href="{{ route('parts.edit', ['part' => $part->part_id]) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                                        <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <h5 class="text-center text-danger">No part was found</p>
    @endif

    {{ $parts->links() }}
@endsection