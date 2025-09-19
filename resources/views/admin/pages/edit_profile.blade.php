@extends('admin.admin_dashboard')

@section('admin')
    <div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">

								<h6 class="card-title">Edit Profile</h6>

								<form class="forms-sample" method = "POST" action="{{route('admin.update.profile')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Username</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name= "username" value="{{$admin->name}}" placeholder="Username">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input type="email" class="form-control"name="email" value="{{$admin->email}}" autocomplete="off" placeholder="Email">
										</div>
									</div>

                                    <div class="mb-3">
										<label class="form-label" for="formFile">Profile Photo</label>
										<input class="form-control" name="profile_image" type="file" id="Image">
									</div>
									
									<div class="row mb-3">
                                        <label for="exampleInputEmail" class="col-sm-3 col-form-label">
                                            <div class="col-sm-9">
                                                <img id="ShowImage" src="{{ $admin->photo ? asset($admin->photo) : asset('uploads/no-img-avatar.png')}}" alt="" style="width:90px;height:90px">
                                            </div>
                                        </label>
                                    </div>
								
									<button type="submit" class="btn btn-secondary">Update</button>
								</form>

							</div>
						</div>
					</div>


                    <script>
                        $(document).ready(function(){
                            $('#Image').on('change', function(e){
                                var reader = new FileReader();
                                reader.onload = function(e){
                                    $('#ShowImage').attr('src',e.target.result);
                                }
                                reader.readAsDataURL(e.target.files['0']);
                            });
                        })
                    </script>              
@endsection