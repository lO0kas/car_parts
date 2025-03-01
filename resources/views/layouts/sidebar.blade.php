<aside id="sidebar" class="offcanvas-md offcanvas-start">
    <div class="offcanvas-header justify-content-between justify-content-md-center">
        <h5>
            <a href="{{ route('cars.index') }}" class="offcanvas-title sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-warehouse"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
                    CarParts
                </div>
            </a>
        </h5>
        <button type="button" class="btn btn-link p-0 d-md-none" data-bs-dismiss="offcanvas" data-bs-target="#sidebar"><i class="fa-solid fa-xmark fa-2xl text-white"></i></button>
    </div>

    <div class="offcanvas-body d-flex flex-column">
        <div class="list-group">
            <a href="{{ route('cars.index') }}" @class(['list-group-item', 'list-group-item-action', 'active' => Request::is(['cars', 'cars/*'])])>
                <i class="fa-solid fa-car"></i>
                <span>Cars</span>
            </a>
            <a href="{{ route('parts.index') }}" @class(['list-group-item', 'list-group-item-action', 'active' => Request::is(['parts', 'parts/*'])])>
                <i class="fa-solid fa-cog"></i>
                <span>Parts</span>
            </a>
        </div>
    </div>
</aside>