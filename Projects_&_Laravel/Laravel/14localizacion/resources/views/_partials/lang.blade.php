@foreach (Config::get('languages') as $lang => $langueage)
    @if ($lang != App::getLocale())
        <a href="{{ route('lang', $lang) }}">{{ $langueage }}</a>
    @endif
@endforeach
