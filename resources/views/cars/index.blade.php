@extends('layouts.app')

@section('title', 'List of cars')

@section('header-actions')
    <a href="{{ route('cars.create') }}" class="btn btn-primary">New</a>
@endsection

@section('content')
    <x-forms.filter :action="route('cars.index')"/>

    @if($cars->count())
        <div class="table-responsive">
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Registration number</th>
                        <th>Parts</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->name }}</td>
                            <td>{{ $car->registration_number }}</td>
                            <td>{{ $car->parts->count() }}</td>
                            <td class="text-end">
                                <form action="{{ route('cars.destroy', ['car' => $car->car_id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <div class="btn-group">
                                        <a href="{{ route('cars.edit', ['car' => $car->car_id]) }}" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
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
        <h5 class="text-center text-danger">No car was found</p>
    @endif
    
    {{ $cars->links() }}
@endsection