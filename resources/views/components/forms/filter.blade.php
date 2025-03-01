@props([
    'action'
])
<div class="table-responsive">
    <form action="{{ $action }}" method="GET">
        @csrf
        <div class="col">
            <div class="input-group mb-3">
                <input 
                    type="text" 
                    name="term"
                    id="filter-term"
                    maxlength="255"
                    class="form-control @error('term') is-invalid @enderror"
                    value="{{ old('term') ?? Request::input('term') }}"
                    placeholder="Search"
                >

                <div class="input-group-text p-0 overflow-hidden">
                    <button type="submit" name="submit" value="filter" class="btn btn-primary rounded-0"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>

                @error('term')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </form>
</div>