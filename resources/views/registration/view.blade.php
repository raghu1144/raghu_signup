<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user's data</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/main.css">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.6.3.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.14/css/bootstrap-multiselect.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    
</head>
<body>
    <!-- <h5>this page show the data of user's </h5> -->
    <div class="container">
        <div class="row">
        <meta name="csrf-token" content="{{ csrf_token() }}">
            <div style="overflow-x: auto;">
                <table id="example2" class="table table-bordered">
                    <thead>
                    <th>Sr.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Contact No.</th>
                    <th>Address</th>
                    <th>Department</th>
                    <th>Action</th>
                    </thead>

                    <tbody id="_allUser">
                    @foreach($users as $user_details)
                        <tr>
                            <td>{{ $user_details->id }}</td>
                            <td>{{ $user_details->name }}</td>
                            <td>{{ $user_details->email }}</td>
                            <td>{{ $user_details->mobile }}</td>
                            <td>{{ $user_details->department }}</td>
                            <td>{{ $user_details->msg }}</td>  

                            <td>
                              <!-- href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary editProduct"> -->
                                 <!-- <a href= 'updateUsers/{{ $user_details->id }}' class="btn btn-primary"> -->
                                 <a href="javascript:void(0)" data-toggle="tooltip"  data-id="{{ $user_details->id }}" data-original-title="Edit" class="edit btn btn-primary edituser">
                                    <i class="fa fa-pencil text-white" aria-hidden="true"></i>
                                 </a>
                                 <a  class="btn btn-danger" href = 'deleteUsers/{{ $user_details->id }}'>
                                    <i class="fa fa-trash text-white" aria-hidden="true"></i>
                                 </a>
                              </td>
                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    
</body>
</html>

<!-- The USER Update Modal -->

<!-- Modal -->
    <div class="modal fade" id="edituserdetails" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <!-- <h5 class="modal-title" id="staticBackdropLabel">Update user Details</h5> -->
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="col">
                    <div class="card card-registration my-4">
                    <div class="row g-0">
                        <div class="col-xl-6 d-none d-xl-block">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/img4.webp"
                            alt="Sample photo" class="img-fluid"
                            style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                        </div>
                        <div class="col-xl-6">
                            <form action="{{ url('/change') }}" method="post">
                            <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                            <input type ="hidden" id="user_id" value="" name="userid">
                            <div class="card-body p-md-5 text-black">
                                <h3 class="mb-5 text-uppercase text-center ">Update user Details</h3>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                        <input type="text" id="form3Example1m" class="form-control form-control-lg" name="name"/>
                                        <label class="form-label" for="form3Example1m">Name</label>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="mail" id="form3Example97" class="form-control form-control-lg" name="email"/>
                                    <label class="form-label" for="form3Example97">Email ID</label>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-4">
                                        <div class="form-outline">
                                        <input type="number" id="form3Example1m1" class="form-control form-control-lg" name="mobile"/>
                                        <label class="form-label" for="form3Example1m1">Mobile no.</label>
                                        </div>
                                    </div>
                                </div>

                                <label class="form-label" for="form3Example1m1">Department</label>
                                    <select class="form-select" aria-label="Default select example" name="department" id="form3Example1m8">
                                        <option>Select your department</option>
                                        <option value="Geoinformetics">Geoinformetics</option>
                                        <option value="Nanotechnology">Nanotechnology</option>
                                        <option value="Computer science">Computer science</option>
                                    </select> 

                                    <br>

                                <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example8">Address</label>
                                    <textarea placeholder="Describe yourself here..." rows="4" cols="60" name="msg" id="form3Example1m7"></textarea>
                                    <br>
                                    
                                </div>


                            </div>
                            
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
        </form>
    </div>
    </div>
 
<!-- Udate Modal END -->



  <script>
   $('body').on('click', '.edituser', function () {

    //   alert("Hello");

      var usr_id = $(this).data('id');
    //   alert(usr_id);
      
      $.ajax({
          data: {id:usr_id, _token:'{{ csrf_token() }}'},
          url: "getUserDetails",
          type: "POST",
          //dataType: 'json',
          success: function (data) {
           console.log(data);
           $('#user_id').val(data[0].id);
            $('#form3Example1m').val(data[0].name);
            $('#form3Example97').val(data[0].email);
            $('#form3Example1m1').val(data[0].mobile);
            $('#form3Example1m7').val(data[0].msg);
            $('#form3Example1m8').val(data[0].department);
            $('#edituserdetails').modal('show'); 
          }
      });

     
   });
  </script>