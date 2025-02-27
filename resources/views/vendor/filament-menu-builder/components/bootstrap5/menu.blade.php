<ul class="border-0 me-0 menu-container navbar">
    @foreach($menuItems as $menuItem)
        @include('filament-menu-builder::components.bootstrap5.menu-item', ['item' => $menuItem])
    @endforeach
</ul>
