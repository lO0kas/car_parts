@props([
    'id' => null,
    'name' => null,
    'isRegistered' => false,
    'registrationNumber' => null
])

<form action="@if($id) {{ route('cars.update', ['car' => $id]) }} @else {{ route('cars.store') }} @endif" method="POST" class="row g-3">
    @if($id) @method('PUT') @endif
    @csrf

    <div class="col-md-4">
        <label for="car-name" class="form-label">Name</label>
        <input 
            type="text" 
            name="name"
            id="car-name"
            required 
            maxlength="255"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') ?? $name }}"
        >
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="col-md-auto">
        <div class="form-check">
            <input 
                type="checkbox" 
                name="is_registered" 
                id="car-is-registered"
                class="form-check-input @error('is_registered') is-invalid @enderror"
                value="1"
                @checked(old('is_registered', $isRegistered))
            > 
            <label for="car-is-registered" class="form-check-label">is registered</label>
            @error('is_registered')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="col-md-4 d-none">
        <label for="car-registration-number" class="form-label">Registration number</label>
        <input 
            type="text" 
            name="registration_number"
            id="car-registration-number" 
            maxlength="255"
            class="form-control @error('registration_number') is-invalid @enderror"
            value="{{ old('registration_number') ?? $registrationNumber }}"
        >
        @error('registration_number')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </div>
</form>

<script>
    const element = document.getElementById('car-is-registered');

    element.addEventListener('change', function () {
        const element = document.getElementById('car-registration-number');
        
        if (this.checked) {
            element.setAttribute('required', true);
            element.parentElement.classList.remove('d-none');
        } else {                
            element.removeAttribute('required');
            element.parentElement.classList.add('d-none');
        }
    });

    element.dispatchEvent(new Event('change'));
</script>