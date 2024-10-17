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
                                    <h3>{{isset($studentEdit->id) ? "Update Student MIT " : "Add Student MIT"}}</h3>
                                    <p class="card-text">
                                        <form action="{{ isset($studentEdit) && $studentEdit->id ? route('student_update', $studentEdit->id) : route('student_store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if(isset($studentEdit) && $studentEdit->id)
                                                @method('PUT')
                                            @endif
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Image</label>

                                                @if(isset($studentEdit) && $studentEdit->image)
                                                    <!-- Display the current image if it exists -->
                                                    <div class="mb-3">
                                                        <img src="{{ asset('images/' . $studentEdit->image) }}" alt="Current Image" style="max-width: 150px;">
                                                    </div>
                                                @endif

                                                <!-- File input for uploading a new image -->
                                                <input type="file" class="form-control" id="image" name="image" {{ isset($studentEdit) ? '' : 'required' }}>

                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" value="{{isset($studentEdit)&& $studentEdit->id ? old('name' , $studentEdit->name): ''}}" id="name" name="name" required>
                                                <label for="sex" class="form-label">Sex</label>
                                                <select name="sex" style="cursor: pointer" id="sex" class="form-control" required>
                                                    <option value="M" {{ (isset($studentEdit) && $studentEdit->sex == 'M') ? 'selected' : '' }}>M</option>
                                                    <option value="F" {{ (isset($studentEdit) && $studentEdit->sex == 'F') ? 'selected' : '' }}>F</option>
                                                </select>

                                                <label for="dob" class="form-label">Date of Birth</label>
                                                <input type="date" name="dob" id="dob" class="form-control"
                                                value="{{ isset($studentEdit) && $studentEdit->id ? old('dob', $studentEdit->dob) : old('dob') }}" required>

                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                value="{{ isset($studentEdit) && $studentEdit->id ? old('email', $studentEdit->email) : old('email') }}" required>

                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" name="phone" id="phone" class="form-control"value="{{ isset($studentEdit) && $studentEdit->id ? old('phone', $studentEdit->phone) : old('phone') }}" placeholder="Phone..." required>

                                                <label for="province" class="form-label">Province</label>
                                                <input type="province" name="province" id="province" class="form-control"
                                                value="{{ isset($studentEdit) && $studentEdit->id ? old('provice', $studentEdit->province) : old('province') }}" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary float-end">
                                                {{isset($studentEdit->id)? "Update" : "Submit"}}
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
