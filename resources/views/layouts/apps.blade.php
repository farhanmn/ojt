<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>OJT @yield('title')</title>

  <!-- Styles -->
  <link href="{{ asset('css/app.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="listpesawat1.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">



</head>

<body id="app-layout">
  @yield('content')

  <script src="{{ asset('js/app.min.js') }}"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  
</body>

</html>
