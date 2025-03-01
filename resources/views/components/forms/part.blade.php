@props([
    'id' => null,
    'name' => null,
    'serialnumber' => false,
    'carId' => null,
    'cars' => []
])

<form action="@if($id) {{ route('parts.update', ['part' => $id]) }} @else {{ route('parts.store') }} @endif" method="POST" class="row g-3">
    @if($id) @method('PUT') @endif
    @csrf

    <div class="col-md-4">
        <label for="part-name" class="form-label">Name</label>
        <input 
            type="text" 
            name="name"
            id="part-name"
            required 
            maxlength="255"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') ?? $name }}"
        >
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="part-serialnumber" class="form-label">Serial number</label>
        <input 
            type="text" 
            name="serialnumber"
            id="part-serialnumber" 
            maxlength="255" 
            class="form-control @error('serialnumber') is-invalid @enderror"
            value="{{ old('serialnumber') ?? $serialnumber }}"
        >
        @error('serialnumber')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-4">
        <label for="part-car-id" class="form-label">Car</label>
        <select 
            name="car_id"
            id="part-car-id" 
            class="form-select @error('car_id') is-invalid @enderror"
        >
            <option value="" @selected(!old('car_id') && !$carId)>-</option>
            @foreach($cars as $car)
                <option value="{{ $car->car_id }}" @selected(old('car_id') == $car->car_id || !old('car_id') && $carId == $car->car_id)>{{ $car->name }}</option>
            @endforeach
        </select>
        @error('car_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>