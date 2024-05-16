
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TANDOOR</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="/css/StyleNav.css">
    <link rel="stylesheet" href="/css/components.css">
    <link rel="stylesheet" href="/css/StyleLog.css">
    <link rel="stylesheet" href="/css/StyleReg.css">
    <link rel="stylesheet" href="/css/StylePro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    {{-- <style>
      .home-category {
      text-align: center; 
      margin: auto;
      background-image: white;
      }
      section .home-category{
         background-image:url('aset/light_bg.png')
      }
      .home-bg{
         background-image: url('aset/home-bg.jpg');
         background-size: cover;
         background-position: center;
      }
    </style> --}}
  
</head>
<body>  
@include('header')

@yield('home')

@yield('about')
@yield('Login')
@yield('Member')
@yield('/Dashboard')
@yield('Products')

<script src="js/script.js"></script>
 
</body>
</html>
