@extends('admin.admin_dashboard')

@section('admin')
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
@endsection