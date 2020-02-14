 @extends('layouts.app') 

 @section('title', 'Post')

 @section('content') 
  
    <div class="box box-info">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>List of posts</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('posts.create') }}"> <i class="fa fa-plus"> Add New Post</i></a>
                </div>
            </div>
        </div>
        @include('partials.success')
        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="blogs-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>title</th>
                            <th>description</th>
                            <th>Image</th>
                            <th>status</th>
                            <th>createdby</th>
                            <th>createdat</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td><img src="public/image/{{ $post->image }}" width="100"></td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->createby }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>
                            <form action="{{ route('posts.destroy',$post->id) }}" method="POST">    
                           {{--  <a href="{{ route('posts.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i></a> --}}
                            <a href="{{ route('posts.show',$post->id) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>    
                            <a href="{{ route('posts.edit',$post->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                            
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                           </td>
                        </tr>
                        @endforeach
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
    
 @endsection