@extends('admin.admin_dashboard')

@section('admin')
<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h6 class="card-title">All Post</h6>
                <div class="table-responsive">
                  <table id="dataTableExample" class="table">
                    <thead>
                      <tr>
                        <th>Serial Number</th>
                        <th>Post Photo</th>
                        <th>Author</th>
                        <th>Post Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $key=> $post)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td><img src="{{ asset($post->photo)}}" alt=""></td>
                            <td>{{Str::title($post->author->name)}}</td>
                            <td>{{Str::limit($post->post_title ,70)}}</td>
                            <td>
                                <a href="{{route('edit.post', [$post->id])}}" type="button" class= "btn btn-inverse-light" style="margin-right:10px ">Edit</a>
                                <a href="{{route('delete.post', [$post->id])}}" type="button" class= "btn btn-inverse-danger">Delete</a>
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