<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ETEC DRC View</title>
</head>
<body>
   <h1>ETEC DRC View</h1>
   <p>{{ $message }}</p>
   
   <form action="{{ ('/hello') }}" method="post">
      @csrf
      <input type="submit" value="Enviar">
   </form>
</body>
</html>