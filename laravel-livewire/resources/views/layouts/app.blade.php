<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Live Wire</title>
    @livewireStyles
</head>
  <body>
      {{ $slot }}
    @livewireScripts
</body>
</html>
