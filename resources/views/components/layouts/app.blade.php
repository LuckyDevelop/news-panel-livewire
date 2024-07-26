<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('livewire.layouts.header')

<body class="g-sidenav-show bg-gray-200">
    @php
        $route = Route::currentRouteName();
    @endphp
    @include('livewire.layouts.sidebar')
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        @include('livewire.layouts.topbar')
        <div class="container-fluid py-4">
            {!! $slot !!}
        </div>
        @include('livewire.layouts.footer')
    </main>
    @include('livewire.layouts.script')
</body>

</html>
