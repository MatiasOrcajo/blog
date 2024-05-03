<!DOCTYPE html>
<html lang="en">
<head>

    <meta name="csrf-token" content="{{csrf_token()}}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="icon" href="/public/favicon.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon"/>


    <!-- CDNs de Font-Awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- CDNs de Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9cb2dda771.js" crossorigin="anonymous"></script>

    <!-- styles -->
    <link href="{{asset('/css/styles.css')}}" type="text/css" rel="stylesheet"/>
    <!---->
    <!-- datatables -->
    <link href="{{asset('/css/datatables.css')}}" type="text/css" rel="stylesheet">
</head>
<body>
@yield('content')
<script src="{{asset('js/Constants.js')}}"></script>
<script>
    const Constants = new ConstantsModel();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script src="{{asset('/js/datatables.js')}}"></script>
</body>
</html>
