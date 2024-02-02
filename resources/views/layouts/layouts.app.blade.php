<!-- Breadcrumb Navigation -->

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        @foreach (request()->segments() as $segment)
            @if ($loop->last)
                <li class="breadcrumb-item active" aria-current="page">{{ ucfirst($segment) }}</li>
            @else
                <li class="breadcrumb-item"><a href="{{ url(implode('/', array_slice(request()->segments(), 0, $loop->index + 1))) }}">{{ ucfirst($segment) }}</a></li>
            @endif
        @endforeach
    </ol>
</nav>
