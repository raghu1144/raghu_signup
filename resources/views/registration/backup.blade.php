<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/main.css">

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    
</head>
<body>
    <!-- <h2>My name is raghvendra kumar pal</h2> -->
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
                <div class="card card-registration my-4">
                <div class="row g-0">
                    <div class="col-xl-6 d-none d-xl-block">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                        alt="Sample photo" class="img-fluid"
                        style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                    </div>
                    <div class="col-xl-6">
                        <form action="{{ url('/signup') }}" method="post"  onsubmit="return ">
                            @csrf
                            
                        <div class="card-body p-md-5 text-black">
                            <h3 class="mb-5 text-uppercase text-center ">User Signup form</h3>

                            <div class="row">
                                <div class="col-md-12 mb-4 ">
                                    <div class="form-outline">
                                    <label class="form-label" for="form3Example1m">Name</label>
                                    <input type="text" id="form3Example1m" class="form-control form-control-lg" name="name"  value="{{old('name')}}" />
                                    <span  class="text-danger">
                                        @error('name')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example97">Email ID</label>
                                <input type="mail" id="form3Example97" class="form-control form-control-lg" name="email" value="{{old('email')}}" />
                                <span class="text-danger">
                                    @error('email')
                                        {{$message}}
                                    @enderror
                                </span>
                                
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <div class="form-outline">
                                    <label class="form-label" for="form3Example1m1">Mobile no.</label>
                                    <input type="text" id="form3Example1m1" class="form-control form-control-lg" name="mobile"  value="{{old('mobile')}}"/>
                                    <span class="text-danger">
                                        @error('mobile')
                                            {{$message}}
                                        @enderror
                                    </span>
                                    </div>
                                </div>
                            </div>

                            <label class="form-label" for="form3Example1m1">Department</label>
                            <select class="form-select" aria-label="Default select example" name="department">
                                <option>Select your department</option>
                                <option value="Geoinformetics">Geoinformetics</option>
                                <option value="Nanotechnology">Nanotechnology</option>
                                <option value="Computer science">Computer science</option>
                            </select> 

                            <br>
                            
                            <div class="form-outline mb-4">
                                <textarea placeholder="Describe yourself here..." rows="4" cols="60" name="msg"></textarea>
                                <br>
                                <label class="form-label" for="form3Example8">Address</label>
                            </div>


                            <div class="d-flex justify-content-end pt-3">
                            <!-- <button type="button" class="btn btn-light btn-lg">Reset all</button> -->
                            <button type="submit" class="btn btn-success btn-lg ms-2" name="submit" value="submit">Submit</button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
</body>
</html>


