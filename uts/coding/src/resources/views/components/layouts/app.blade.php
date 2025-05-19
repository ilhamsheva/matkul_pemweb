<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale()) }}">

@include('components.partials.header')

<body>

    @include('components.partials.navbar')
    
    @include('components.partials.preloader')
    
    
    {{ $slot }}

    @include('components.partials.footer')

    @include('components.partials.script')
</body>

</html>