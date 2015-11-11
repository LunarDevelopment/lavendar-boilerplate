    @foreach($items as $index => $item)

        <ul id="dropdown{{ $index }}" class="dropdown-content">
            @if(!is_null($item->href)) <li><a href="{{ $item->href }}">{{ $item->text }}</a></li>

            @else {{ $item->text }}

            @endif

            @if($children = $item->children)

            @include('layouts.partials.menu', ['items' => $children])

            @endif
        </ul>

        <li>
            <a class="dropdown-button" href="#!" data-activates="dropdown{{ $index }}">
                {{ $item->text }}
                <i class="material-icons right">arrow_drop_down</i>
            </a>
        </li>

    @endforeach