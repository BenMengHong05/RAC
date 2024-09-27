<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="{{ isset($studentEdit) && $studentEdit->id ? route('student_update', $studentEdit->id) : route('student_store') }}" method="POST">
            @csrf
                    @if(isset($studentEdit) && $studentEdit->id)
                        @method('PUT')
                    @endif
            <div class="mb-3">
              <label  class="form-label">name</label>
                <input type="text" value="{{isset($studentEdit) && $studentEdit->id ? old('name', $studentEdit->name) : ''}}" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
              <label class="form-label">dob</label>
              <input type="date" value="{{isset($studentEdit) && $studentEdit->id ? old('dob' , $studentEdit->dob) : ''}}" name="dob"  class="form-control" id="dob">
            </div>
            <div class="mb-3">
              <label  class="form-label">phone</label>
              <input type="text" value="{{isset($studentEdit) && $studentEdit->id ? old('phone' , $studentEdit->phone): ''}}" class="form-control" name="phone" id="phone">
            </div>
            <button type="submit"class="btn btn-primary float-end">
                {{isset($studentEdit) && $studentEdit->id ? 'update' : 'submit'}}
            </button>
          </form>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
