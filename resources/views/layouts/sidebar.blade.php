<aside id="sidebar" class="offcanvas-md offcanvas-start">
    <div class="offcanvas-header justify-content-md-center">
        <h5>
            <a href="{{ route('dashboard.index') }}" class="offcanvas-title sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-icon">
                    <i class="fa-solid fa-warehouse"></i>
                </div>
                <div class="sidebar-brand-text mx-3">
                    CarParts
                </div>
            </a>
        </h5>
        <button type="button" class="btn-close d-md-none" data-bs-dismiss="offcanvas" data-bs-target="#sidebar"></button>
    </div>

    <div class="offcanvas-body d-flex flex-column">
        <div class="list-group">
            <a href="{{ route('dashboard.index') }}" @class(['list-group-item', 'list-group-item-action', 'active' => Request::is('/')])>
                <i class="fa-solid fa-dashboard"></i>
                <span>Dashboard</span>
            </a>
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