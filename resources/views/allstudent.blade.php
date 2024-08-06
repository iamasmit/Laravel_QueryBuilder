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
            <div class="col-6">
                <h1>List Of Students Data</h1>
                <a href="newstudent" class="btn btn-primary btn-sm ml-6">Add New</a>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                    @foreach ($data as $id => $student )
                    
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->age}}</td>
                        <td>{{$student->city}}</td>
                        <td ><a href="{{route('view.student', $student->id)}}" class="btn btn-primary btn-sm">view</a></td>
                        <td ><a href="{{route('delete.student', $student->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
                        <td ><a href="{{route('update.view', $student->id)}}" class="btn btn-warning btn-sm">Update</a></td>
                    </tr>
                        
                    @endforeach

                </table>
                

              

            </div>

        </div>
    </div>
    
</body>
</html>


 