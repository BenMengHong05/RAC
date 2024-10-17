@extends('layout.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-2">
                @include('layout.partials.siderbar')
            </div>
            <div class="col-xl-10">
                @include('index.partials.header')
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row g-4 mb-5">
                            <div class="col-lg-12">
                                <div class="card h-100 p-4">
                                    <h3>{{isset($teacherEdit->id) ? "Update Teacher MIT " : "Add Teacher MIT"}}</h3>
                                    <p class="card-text">
                                        <form action="{{ isset($teacherEdit) && $teacherEdit->id ? route('teacher_update', $teacherEdit->id) : route('teacher_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if(isset($teacherEdit) && $teacherEdit->id)
                                                @method('PUT')
                                            @endif
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>

                                                @if(isset($teacherEdit) && $teacherEdit->image)
                                                    <!-- Display the current image if it exists -->
                                                    <div class="mb-3">
                                                        <img src="{{ asset('images/' . $teacherEdit->image) }}" alt="Current Image" style="max-width: 150px;">
                                                    </div>
                                                @endif

                                                <!-- File input for uploading a new image -->
                                                <input type="file" class="form-control" id="image" name="image" {{ isset($teacherEdit) ? '' : 'required' }}>

                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" value="{{isset($teacherEdit)&& $teacherEdit->id ? old('name' , $teacherEdit->name): ''}}" id="name" name="name" required>
                                                <label for="sex" class="form-label">Sex</label>
                                                <select name="sex" style="cursor: pointer" id="sex" class="form-control" required>
                                                    <option value="M" {{ (isset($teacherEdit) && $teacherEdit->sex == 'M') ? 'selected' : '' }}>M</option>
                                                    <option value="F" {{ (isset($teacherEdit) && $teacherEdit->sex == 'F') ? 'selected' : '' }}>F</option>
                                                </select>

                                                <label for="dob" class="form-label">Date of Birth</label>
                                                <input type="date" name="dob" id="dob" class="form-control"
                                                value="{{ isset($teacherEdit) && $teacherEdit->id ? old('dob', $teacherEdit->dob) : old('dob') }}" required>

                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" name="phone" id="phone" class="form-control"value="{{ isset($teacherEdit) && $teacherEdit->id ? old('phone', $teacherEdit->phone) : old('phone') }}" placeholder="Phone..." required>
                                            </div>
                                            <button type="submit" class="btn btn-primary float-end">
                                                {{isset($teacherEdit->id)? "Update" : "Submit"}}
                                            </button>
                                        </form>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('index.partials.footer')
            </div>
        </div>
    </div>
@endsection
