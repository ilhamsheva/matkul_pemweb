<!DOCTYPE html>

<html lang="en-us">
@include('components.partials.header')

<body>
    @include('components.partials.navbar')

    {{$slot}}

    @include('components.partials.upper-footer')

    @include('components.partials.footer')
</body>
    @include('components.partials.script')
</html>
