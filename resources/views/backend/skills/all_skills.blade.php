@extends('admin.admin_dashboard')

@section('admin')
	<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">My Skills</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Serial Number</th>
                        <th>Icon</th>
                        <th>Technology</th>
                        <th>Experience Level</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($allSkills as $key=> $allSkill)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{ asset($allSkill->icon)}}" alt=""></td>
                            <td>{{Str::title($allSkill->technology_name)}}</td>
                            <td>{{$allSkill->exp_level}}</td>
                            <td>
                                <a href="{{route('edit.skill', [$allSkill->id])}}" type="button" class= "btn btn-inverse-light" style="margin-right:10px ">Edit</a>
                                <a href="{{route('delete.skill', [$allSkill->id])}}" type="button" class= "btn btn-inverse-danger">Delete</a>
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