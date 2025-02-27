
<li class="{{ $item->wrapper_class }} @if(!$item->children->isEmpty()) sub-menu menu-item-hover @endif">
    @if($item->children->isEmpty())
        <a
            target="{{ $item->target }}"
            class="{{ $item->link_class }}"
            href="{{ $item->link }}"
        >
           <strong>{{ $item->name }}</strong>
        </a>
    @else
        <a
            class="{{ $item->link_class }}"
            href="{{ $item->link }}"
            {{-- id="navbarDropdown" --}}
            {{-- role="button"--}}
            {{-- data-bs-toggle="dropdown" --}}
            {{-- aria-expanded="false" --}}
        >
        <div>

            <strong>{{ $item->name }}</strong>
        </div>
        </a>
        <ul class="sub-menu-container not-dark" data-class="up-lg:not-dark">
            @foreach($item->children as $child)
                @include('filament-menu-builder::components.bootstrap5.menu-sub-item', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>

