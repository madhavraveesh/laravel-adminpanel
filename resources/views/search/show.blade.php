@extends('layouts.master') 

@section('title', 'Post Detail')

@section('content') 

<div class="box box-info">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Show Post</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
                </div>
            </div>
        </div>

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="blogs-table" class="table table-condensed table-hover table-bordered">
                   <thead></thead>
                    <tbody class="transparent-bg">
                        <tr>
                        	<th>Title</th>
                            <td>{{ $post->title }}</td>
                        </tr>
                        <tr>
                        	 <th>Description</th>
                        	 <td>{{ $post->description }}</td>
                        </tr>    
                        <tr>
                        	<th>Status</th>
                        	<td>{{ $post->status }}</td>
                        </tr>
                        <tr>
                        	<th>Createdby</th>
                        	<td>{{ $post->createby }}</td>
                        </tr>
                         <tr>
                        	<th>Createdate</th>
                        	<td>{{ $post->created_at }}</td>
                        </tr>
                    </tbody>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->