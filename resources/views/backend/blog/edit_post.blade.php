@extends('admin.admin_dashboard')

@section('admin')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <h6 class="card-title">Edit Blog Post</h6>

            <form class="forms-sample" method="POST" action="{{ route('update.post') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name= "id" value="{{$post->id}}">

                {{-- Post Title --}}
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Post Title</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="post_title" value="{{ $post->post_title }}">
                    </div>
                </div>

                {{-- Post Tags --}}
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Post Tags (CSV)</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="post_tags" autocomplete="off" value="{{ $post->post_tags }}">
                    </div>
                </div>

                {{-- Post Description --}}
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Post Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control" id="tinymceExample" name="post_description" rows="10" autocomplete="off">{{ $post->post_description }}</textarea>
                    </div>
                </div>

                {{-- Post Photo Upload --}}
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Post Photo</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="post_photo" type="file" id="Image">
                    </div>
                </div>

                {{-- Current Photo Preview --}}
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Current Photo</label>
                    <div class="col-sm-9">
                        <img id="ShowImage" 
                             src="{{ $post->photo ? asset($post->photo) : asset('uploads/no-img-avatar.png') }}" 
                             alt="post photo" 
                             style="width:90px;height:90px">
                    </div>
                </div>

                {{-- Submit Button --}}
                <button type="submit" class="btn btn-secondary">Update Blog Post</button>
            </form>

        </div>
    </div>
</div>

{{-- Preview JS --}}
<script>
    $(document).ready(function(){
        $('#Image').on('change', function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#ShowImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    })
</script>
@endsection
