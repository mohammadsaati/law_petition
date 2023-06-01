<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
        <title>{{ env("APP_name") }} | @yield("title" , "")</title>

        <style>@yield("style" , "")</style>
    </head>
    <body>
{{--        header component to  render header--}}
        <x-headerComponent />

        @yield("content")

{{--        footer component render hear--}}
        <br/><br/><br/><br/>
        <x-footerComponent />
        <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
        <script>
            @yield("scripts" , "")
        </script>
    </body>
</html>
