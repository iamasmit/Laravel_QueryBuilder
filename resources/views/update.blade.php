<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Update Student Data</h3>
                <form action="{{ route('update.student', $data->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" value="{{ $data->name }}" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" value="{{ $data->email }}" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Age</label>
                        <input type="number" value="{{ $data->age }}" class="form-control" name="age">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" value="{{ $data->city }}" class="form-control" name="city">
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
