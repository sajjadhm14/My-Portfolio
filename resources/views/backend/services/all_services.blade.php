@extends('admin.admin_dashboard')

@section('admin')
	<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">My Quality Services</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Serial Number</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $key=> $service)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{Str::title($service->service_title)}}</td>
                            <td>{!! Str::wordWrap($service->service_description, 80 , '<br>')!!}</td>
                            <td>
                                <a href="{{route('edit.service', [$service->id])}}" type="button" class= "btn btn-inverse-light" style="margin-right:10px ">Edit</a>
                                <button type="button" class= "btn btn-inverse-danger">Delete</button>
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