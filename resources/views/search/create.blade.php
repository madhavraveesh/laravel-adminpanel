 @extends('layouts.master') 

 @section('title', 'Register')

 @section('content') 
  
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
    @include('partials.error')
    <form method="POST" action="/posts">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <div class="form-group">
            <label for="name">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
 
        <div class="form-group">
            <label for="email">Description:</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
 
        <div class="form-group">
            <label for="status">Status:</label>
            <select class="form-control" id="status" name="status">
                <option value="publish">Publish</option>
                <option value="pending">Pending</option>
            </select>
        </div>

        <div class="form-group">
            <label for="crateby">Create By:</label>
            <input type="text" class="form-control" id="createby" name="createby">
        </div>
 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
 @endsection