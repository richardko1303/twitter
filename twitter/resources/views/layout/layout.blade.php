<!DOCTYPE html>
<html lang="EN">

@include('layout.header')

<body>
{{-- Include the nav template --}}
@include('_templates.nav')

<div class="container py-4">
    {{-- Add conetnt --}}
    @yield('content')
</div>

@include('layout.footer')
</body>

</html>
