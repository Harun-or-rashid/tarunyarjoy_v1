@if (count($breadcrumbs))
    <section class="content-header">
        <h1>
            {{ roleText() }}
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}">
                            {{ $breadcrumb->title }}
                        </a>
                    </li>
                @else
                    <li class="active">{{ $breadcrumb->title }}</li>
                @endif
            @endforeach
        </ol>
    </section>
@endif
