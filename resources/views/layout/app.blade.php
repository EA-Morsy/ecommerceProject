<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{app()->getLocale()=='ar'?'rtl':'ltr'}}" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">
  
   
  </head>
<body class="page-body">

<ul class="nav justify-content-center navbarr">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/home">HOME</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/api/addProduct">ADD PRODUCT</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/api/viewAllProducts">VIEW PRODUCTS</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
  </li>
</ul>


<div class="head-slides" >


@yield('content')
<div>


<script src="/js/all.min.js"></script>
<script src="/js/fontawesome.js"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js')}}" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>