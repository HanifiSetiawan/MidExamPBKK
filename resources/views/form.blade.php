<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <title>Document</title>
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
    <section>
        <div class="container mt-5 h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="card border-light text-center">
                    <div class="card-header text-center">
                        <h1 class="card-title">Phone Form</h1>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form method="POST" action="/success" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label for="name" class="form-label">Item Name</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Please input your full name" value="{{ old('name') }}" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="amount" class="form-label">Item Amount</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="number" class="form-control" name="amount" id="amount" placeholder="Please input your full name" value="{{ old('amount') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Item Price</label>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <input type="number" class="form-control" name="price" id="price" placeholder="Please input your full name" value="{{ old('price') }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="type" class="form-label">Item Type</label>
                                <select class="form-select" name="type" id="type">
                                    <option value="" {{ old('type') == '' ? 'selected' : '' }}>-- Type --</option>
                                    <option value="physics" {{ old('type') == 'physics' ? 'selected' : '' }}>Physics</option>
                                    <option value="glassware" {{ old('type') == 'glassware' ? 'selected' : '' }}>glassware</option>
                                    <option value="devices" {{ old('type') == 'devices' ? 'selected' : '' }}>devices</option>
                                    <option value="safety" {{ old('type') == 'safety' ? 'selected' : '' }}>safety</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="condition" class="form-label">Item Availability</label>
                                <select class="form-select" name="condition" id="condition">
                                    <option value="" {{ old('condition') == '' ? 'selected' : '' }}>-- Availability --</option>
                                    <option value="Available" {{ old('condition') == 'available' ? 'selected' : '' }}>Available</option>
                                    <option value="Unavailable" {{ old('condition') == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="picture" class="form-label">Item Picture</label>
                                <input class="form-control" type="file" name="picture" id="picture" required>
                            </div>

                            <div class="card-footer text-body-secondary justify-content-center align-items-center">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>