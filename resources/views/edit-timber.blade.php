<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Timber</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-12">
                 <h2>Edit Timber</h2>
                 @if(Session::has('success'))
                 <div class ="alert alert-success" role="alert">
                    {{Session::get('success')}}
                 </div>
                 @endif
                 <form method="post" action="{{url('update-timber')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <div class="md-3">
                        <label class="form-lebel">name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$data->name}}">
                        @error('name')
                        <div class ="alert alert-danger" role="alert">
                            {{$message}}
                         </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Email" value="{{$data->email}}">
                        @error('email')
                        <div class ="alert alert-danger" role="alert">
                            {{$message}}
                         </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone" value="{{$data->phone}}">
                        @error('phone')
                        <div class ="alert alert-danger" role="alert">
                            {{$message}}
                         </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">address</label>
                        <textarea type="text" class="form-control" name="address" placeholder="Enter Address">{{$data->address}}</textarea>
                        @error('address')
                        <div class ="alert alert-danger" role="alert">
                            {{$message}}
                         </div>
                        @enderror
                    </div> <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('timber-list')}}" class="btn btn-danger">Back</a>
            </div>
        </div>
    </div>
</body>
</html>
