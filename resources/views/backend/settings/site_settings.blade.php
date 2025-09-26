@extends('admin.admin_dashboard')

@section('admin')
 <div class="col-md-12 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">

								<h6 class="card-title">Setting Site</h6>

								<form class="forms-sample" method = "POST" action="{{route('update.site.settings')}}" enctype="multipart/form-data">
                                    @csrf
									<div class="row mb-3">
										<label for="exampleInputUsername2" class="col-sm-3 col-form-label">Phone</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name= "phone" value="{{$sData->phone}}">
										</div>
									</div>
									<div class="row mb-3">
										<label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
										<div class="col-sm-9">
											<input type="text" class="form-control"name="email"  autocomplete="off" value="{{$sData->email}}">
										</div>
									</div>

                                    <div class="row mb-3">
										<label class="col-sm-3 col-form-label" required >Address</label>
                                        <div class="col-sm-9">
						                    <input class="form-control" name="address" value="{{$sData->address}}" >
                                        </div>
									</div>
                                    <div class="row mb-3">
										<label class="col-sm-3 col-form-label" required >Footer Notes</label>
                                        <div class="col-sm-9">
						                    <input class="form-control" name="footer_note" value="{{$sData->footer_note}}" >
                                        </div>
									</div>

                                    <div class="row mb-3">
										<label class="col-sm-3 col-form-label" required >Logo</label>
                                        <div class="col-sm-9">
						                    <input class="form-control" name="logo" type="file" id="Image"  >
                                        </div>
									</div>
									
									<div class="row mb-3">
                                        <label for="exampleInputEmail" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-9">
                                            <img id="ShowImage" src="{{$sData->logo ? asset($sData->logo) : asset('uploads/no-img-avatar.png')}}" alt="" style="width:90px;height:90px">
                                        </div>
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