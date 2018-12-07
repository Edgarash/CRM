<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>@yield('page_heading') - Microsistemas Californianos</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />


    {{-- Estilos --}}
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/jquery-confirm/jquery-confirm.min.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/views.css") }}" />
    @yield('styles')
    {{-- JQuery --}}
    <script src="{{ asset('assets/scripts/jquery.min.js') }}"></script>
    <script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
    <script src="{{ asset('assets/jquery-confirm/jquery-confirm.min.js') }}"></script>
    @yield('scripts')
</head>

<body>
    @yield('body')
</body>

<script>
    $('[data-toggle="tooltip"]').tooltip();

</script>

</html>
