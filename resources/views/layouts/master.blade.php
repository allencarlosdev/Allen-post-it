<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/resetAllen.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    <title>Notes</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    <div class="footer">
        <ul class="footer__social">
            <li class="footer__link"><a rel="noopener noreferrer" href="https://github.com/allencarlosdev" target="_blank" title="link of github"><i class="fa fa-github"></i></a></li>
            <li class="footer__link"><a rel="noopener noreferrer" href="https://www.linkedin.com/in/allencarlosdev/" target="_blank" title="link of linkedin"><i class="fa fa-linkedin"></i></a></li>
            <li class="footer__link"><a rel="noopener noreferrer" href="https://stackoverflow.com/users/16209550/carlos-allen" target="_blank" title="link of  stackoverflow"><i class="fa fa-stack-overflow"></i></a></li>
            <li class="footer__link"><a rel="noopener noreferrer" href="https://www.sololearn.com/profile/20725585" target="_blank" title="link of sololearn"><i class="fab fa-stripe-s"></i></a></li>
        </ul>
        <h4 class="copyright"> &copy;  AllenCarlosdev 2022 </h4>
    </div>
<script src="https://kit.fontawesome.com/0b01b67c65.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>
