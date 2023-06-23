<!DOCTYPE html>
<html data-theme="light">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  @vite('resources/js/app.js')
  @vite('resources/css/app.css')
  @inertiaHead
</head>

<body>
  <div class="w-full h-full">
    @inertia
  </div>
</body>

</html>
