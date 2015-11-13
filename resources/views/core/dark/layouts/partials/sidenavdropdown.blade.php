@foreach($items as $index => $item)

<li class="bold">
    <a class="collapsible-header active waves-effect waves-teal">
        {{ $item->text }}
    </a>
    <div class="collapsible-body">
        <ul>
            @if(!is_null($item->href)) <li><a href="{{ $item->href }}">{{ $item->text }}</a></li>

            @else {{ $item->text }}

            @endif

            @if($children = $item->children)

            @include('layouts.partials.menu', ['items' => $children])

            @endif
        </ul>
    </div>
</li>

@endforeach