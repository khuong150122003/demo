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
                 <h2>Add Timber</h2>
                 @if(Session::has('success'))
                 <div class ="alert alert-success" role="alert">
                    {{Session::get('success')}}
                 </div>
                 @endif
                 <form method="post" action="{{url('save-timber')}}">
                    @csrf
                    <div class="md-3">
                        <label class="form-lebel">name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{old('name')}}">
                        @error('name')
                        <div class ="alert alert-danger" role="alert">
                            {{$message}}
                         </div>
                        @enderror
                    </div>
                    <div class="md-3">
                        <label class="form-lebel">price</label>
                        <input type="text" class="form-control" name="price" placeholder="Enter Price" value="{{old('price')}}">
                        @error('price')
                        <div class ="alert alert-danger" role="alert">
                            {{$message}}
                         </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                         <label for="formFileSm" class="form-label">image</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                        @error('image')
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
