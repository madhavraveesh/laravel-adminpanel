 @extends('layouts.app') 

 @section('title', 'Register')

 @section('content') 
  
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @include('partials.error')
    <form method="POST" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
 
        <div class="form-group">
            <label for="email">Description:</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $post->description }}">
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>
 
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="publish" {{ ( $post->status == 'publish') ? 'selected' : '' }}>Publish</option>
                <option value="pending" {{ ( $post->status == 'pending') ? 'selected' : '' }}>Pending</option>
            </select>
        </div>

        <div class="form-group">
            <label for="crateby">Create By:</label>
            <input type="text" class="form-control" id="createby" name="createby" value="{{ $post->createby }}">
        </div>
 
        {{-- <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div> --}}
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
 @endsection