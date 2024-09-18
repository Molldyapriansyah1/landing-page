@extends('navbar.template')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Porsche History</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
         .list-group-item a {
            text-decoration: none;
        }
        .sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            background-color: white;
            z-index: 1;
        }

        body {
            background-color: #ebebeb;
        }
    
      
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 py-5" >
                <ul class="list-group sticky"  >
                    <li class="list-group-item"><a href="#964">1987</a></li>
                    <li class="list-group-item"><a href="#993">1988</a></li>
                    <li class="list-group-item"><a href="#997">1989</a></li>
                    <li class="list-group-item"><a href="#992">1990</a></li>
                </ul>
            </div>
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-body">
                        <h2 class="card-title" id="964">Porsche 964</h2>
                        <h6 class="card-subtitle mb-2 text-muted">1989 - 1994</h6>
                        <img src="/img/964.jpeg" class="card-img-top" alt="Porsche 964">
                        <p class="card-text">The Porsche 964 was a significant evolution of the iconic 911 model, known for its enhanced performance and refined design. </p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h2 class="card-title" id="993">Porsche 993</h2>
                        <h6 class="card-subtitle mb-2 text-muted">1994 - 1998</h6>
                        <img src="/img/993.jpeg" class="card-img-top" alt="Porsche 993">
                        <p class="card-text">The Porsche 993 marked the end of the air-cooled 911 era. It introduced a revolutionary water-cooled engine, enhancing its performance and efficiency.</p>
                    </div>
                </div>
                
                <div class="card mt-3">
                    <div class="card-body">
                        <h2 class="card-title" id="997">Porsche 997</h2>
                        <h6 class="card-subtitle mb-2 text-muted">1989 - 1994</h6>
                        <img src="/img/997.jpeg" class="card-img-top" alt="Porsche 964">
                        <p class="card-text">The Porsche 964 was a significant evolution of the iconic 911 model, known for its enhanced performance and refined design. </p>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h2 class="card-title" id="992">Porsche 992</h2>
                        <h6 class="card-subtitle mb-2 text-muted">1994 - 1998</h6>
                        <img src="/img/992.jpeg" class="card-img-top" alt="Porsche 993">
                        <p class="card-text">The Porsche 993 marked the end of the air-cooled 911 era. It introduced a revolutionary water-cooled engine, enhancing its performance and efficiency.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
@endsection