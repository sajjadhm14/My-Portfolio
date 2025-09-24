@extends('admin.admin_dashboard')

@section('admin')
<div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">

								<h6 class="card-title">Add Blog Post</h6>

								<form class="forms-sample" method = "POST" action="{{route('store.skill')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Post Title</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name= "post_title" placeholder="Post Title">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Post Tags (CSV)</label>
										<div class="col-sm-9">
											<input type="text" class="form-control"name="post_tags"  autocomplete="off" placeholder="Post Tags">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Post Description</label>
										<div class="col-sm-9">
											<textarea type="text" class="form-control" id="tinymceExample" name="post_tags" rows="10"  autocomplete="off" ></textarea>
										</div>
									</div>

                                    <div class="row mb-3">
										<label class="col-sm-3 col-form-label">Post Photo</label>
                                        <div class="col-sm-9">
						                    <input class="form-control" name="post_photo" type="file" id="Image">
                                        </div>
									</div>
									
									<div class="row mb-3">
                                        <label for="exampleInputEmail" class="col-sm-3 col-form-label">
                                            <div class="col-sm-9">
                                                <img id="ShowImage" src="{{asset('uploads/no-img-avatar.png')}}" alt="" style="width:90px;height:90px">
                                            </div>
                                        </label>
                                    </div>
								
									<button type="submit" class="btn btn-secondary">Add Blog post</button>
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