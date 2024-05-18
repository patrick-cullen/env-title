@env('production')
    <title>{{ $slot }}</title>
@endenv

@unless (App::environment() === 'production')
    <title>{{ App::environment() }} - {{ $slot }}</title>
@endunless
