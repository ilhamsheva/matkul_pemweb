<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.partials.header')

<body class="index-page">

    @include('components.partials.navbar')

    {{ $slot }}

	@include('components.partials.upper-footer')

    {{-- @yield('footer') --}}
    @include('components.partials.footer')

    @livewireScripts

    @include('components.partials.script')
</body>

</html>