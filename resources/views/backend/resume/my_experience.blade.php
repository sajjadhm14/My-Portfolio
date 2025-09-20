@extends('admin.admin_dashboard')

@section('admin')



<nav class="page-breadcrumb">
					<ol class="breadcrumb">
						<a href="" class="btn btn-inverse-warning" data-bs-toggle="modal" data-bs-target="#varyingModal">Add Experience</a>
					</ol>
				</nav>
<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">My Experience</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Serial Number</th>
                        <th>Title</th>
                        <th>Institution</th>
                        <th>From year</th>
                        <th>To Year</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($experiences as $key=> $experience)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::title($experience->resume_title)}}</td>
                            <td>{{Str::title($experience->institution)}}</td>
                            <td>{{$experience->from_year}}</td>
                            <td>{{$experience->to_year}}</td>
                            <td>
                                <a href="{{route('edit.service', [$experience->id])}}" type="button" class= "btn btn-inverse-light" style="margin-right:10px ">Edit</a>
                                <a href="{{route('delete.service', [$experience->id])}}" type="button" class= "btn btn-inverse-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                     
                     
            
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>
        {{-- add experience model --}}
         <div class="modal fade" id="varyingModal" tabindex="-1" aria-labelledby="varyingModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="varyingModalLabel">Add Experience </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                    </div>
                    <div class="modal-body">
                      <form method="POST" action="{{route('store.experience')}} ">
                        @csrf
                        <input type="hidden" name="resume_cat" value="experience">
                        <div class="mb-3">
                          <label for="title" class="form-label">Title</label>
                          <input type="text" class="form-control" name = "resume_title" placeholder="Lead Developer" required>
                        </div>

                        <div class="mb-3">
                          <label for="organization" class="form-label">Organization</label>
                          <input type="text" class="form-control" name = "institution" placeholder="London" required>
                        </div>

                        <div class="mb-3">
                          <label for="from" class="form-label">From Year</label>
                          <input type="text" class="form-control" name = "from_year" placeholder="2022" required>
                        </div>
                        <div class="mb-3">
                          <label for="to" class="form-label">To Year</label>
                          <input type="text" class="form-control" name = "to_year" placeholder="present" required>
                        </div>

                         <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="sub,it" class="btn btn-primary">Add Experience</button>
                         </div>
                      </form>
                    </div>
                   
                  </div>
                </div>
              </div>
@endsection