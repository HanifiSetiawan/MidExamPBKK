<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .table-wrap {
            word-wrap: break-word;
        }

        .foto {
            width: 100px;
            height: auto;
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
            <table class="table table-bordered table-wrap text-light">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>item Type</th>
                        <th>item Availability</th>
                        <th>Item Picture</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($phones as $phone)
                    <tr>
                        <td>{{ $phone->name }}</td>
                        <td>{{ $phone->amount }}</td>
                        <td>{{ $phone->price }}</td>
                        <td>{{ $phone->type }}</td>
                        <td>{{ $phone->condition }}</td>
                        <td>
                            <img class="foto" src="{{ asset('storage/' . str_replace ('public/', '', $phone->picture)) }}" alt="picture">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>
           