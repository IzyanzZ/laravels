<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyBlog | Dashboard</title>

    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display:none;
        }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
  </head>
  <body>

@include("dashboard.layouts.header")

<div class="container-fluid">
  <div class="row">
    @include("dashboard.layouts.sidebar")

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield("container")
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace()
  </script>
  </body>
</html>
