@foreach($items as $index => $item)

    @if(!is_null($item->href))
        <li class="item item-{{ $index }}">
            <a href="{{ $item->href }}" class="waves-effect waves-teal">
                {{ $item->text }}
            </a>
        </li>

    @else {{ $item->text }}

    @endif

    @if($children = $item->children)

        @include('layouts.partials.dropdown', ['items' => $children])

    @endif

@endforeach



