<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .link{
            margin-top: 10%;
            margin-left: 10%;
        }
    </style>
</head>
<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="btn btn-primary mx-3" id="submitbutton" href="{{route('home')}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="btn btn-primary mx-3" id="submitbutton" href="{{route('Data')}}">Database</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-primary mx-3" id="submitbutton" href="{{route('Form')}}">Form</a>
            </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
                    <h1 class="text-center text-success">Success !!</h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>