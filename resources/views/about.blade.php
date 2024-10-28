<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-red-400 font-bold text-2xl underline p-4 bg-amber-50 flex justify-center">
    About Me
  </h1>
  <ul class="list-disc list-inside text-gray-700 space-y-2">
      <li>Name {{ $name }}</li>
      <li>From {{ $address }}</li>
      <li>Email {{ $email }}</li>
    </ul>
</body>
</html>