<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    {{-- <link rel="manifest" href="/site.webmanifest"> --}}
    <link href="{{  url('/public/css/all.css')}}" rel="stylesheet" />
    <script src="{{ url('/public/js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    @inertiaHead
  </head>
  <body>
    @inertia
    @vite
  </body>
</html>