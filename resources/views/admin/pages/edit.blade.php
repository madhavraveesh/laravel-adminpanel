@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('global.page.title_singular') }}
    </div>

    <div class="card-body">
        <form action="{{ route("admin.pages.update", [$page->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                <label for="title">{{ trans('global.page.fields.title') }}*</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ old('title', isset($page) ? $page->title : '') }}">
                @if($errors->has('title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.title_helper') }}
                </p>
            </div> 
            <div class="form-group {{ $errors->has('page_slug') ? 'has-error' : '' }}">
                <label for="page slug">{{ trans('global.page.fields.page_slug') }}*</label>
                <input type="text" id="page_slug" name="page_slug" class="form-control" value="{{ old('page_slug', isset($page) ? $page->page_slug : '') }}">
                @if($errors->has('page_slug'))
                    <em class="invalid-feedback">
                        {{ $errors->first('page_slug') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.page_slug_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                <label for="description">{{ trans('global.page.fields.description') }}</label>
                <textarea id="description" name="description" class="form-control desc-summernote">{{ old('description', isset($page) ? $page->description : '') }}</textarea>
                @if($errors->has('description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('cannonical_link') ? 'has-error' : '' }}">
                <label for="cannonical link">{{ trans('global.page.fields.cannonical_link') }}</label>
                <input type="text" id="cannonical_link" name="cannonical_link" class="form-control" value="{{ old('cannonical_link', isset($page) ? $page->cannonical_link : '') }}" step="0.01">
                @if($errors->has('cannonical_link'))
                    <em class="invalid-feedback">
                        {{ $errors->first('cannonical_link') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.cannonical_link_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('seo_title') ? 'has-error' : '' }}">
                <label for="cannonical link">{{ trans('global.page.fields.seo_title') }}</label>
                <input type="text" id="seo_title" name="seo_title" class="form-control" value="{{ old('seo_title', isset($page) ? $page->seo_title : '') }}" step="0.01">
                @if($errors->has('seo_title'))
                    <em class="invalid-feedback">
                        {{ $errors->first('seo_title') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.seo_title_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('seo_keyword') ? 'has-error' : '' }}">
                <label for="cannonical link">{{ trans('global.page.fields.seo_keyword') }}</label>
                <input type="text" id="seo_keyword" name="seo_keyword" class="form-control" value="{{ old('seo_keyword', isset($page) ? $page->seo_keyword : '') }}" step="0.01">
                @if($errors->has('seo_keyword'))
                    <em class="invalid-feedback">
                        {{ $errors->first('seo_keyword') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.seo_keyword_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('seo_description') ? 'has-error' : '' }}">
                <label for="seo_description">{{ trans('global.page.fields.seo_description') }}</label>
                <textarea id="seo_description" name="seo_description" class="form-control desc-summernote">{{ old('seo_description', isset($page) ? $page->seo_description : '') }}</textarea>
                @if($errors->has('seo_description'))
                    <em class="invalid-feedback">
                        {{ $errors->first('seo_description') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.seo_description_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('status') ? 'has-error' : '' }}">
                <label for="cannonical link">{{ trans('global.page.fields.status') }}</label>
                <input type="number" id="status" name="status" class="form-control" value="{{ old('status', isset($page) ? $page->status : '') }}" step="0.01">
                @if($errors->has('status'))
                    <em class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.status_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('created_by') ? 'has-error' : '' }}">
                <label for="cannonical link">{{ trans('global.page.fields.created_by') }}</label>
                <input type="number" id="created_by" name="created_by" class="form-control" value="{{ old('created_by', isset($page) ? $page->created_by : '') }}" step="0.01">
                @if($errors->has('created_by'))
                    <em class="invalid-feedback">
                        {{ $errors->first('created_by') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.created_by_helper') }}
                </p>
            </div>
            <div class="form-group {{ $errors->has('updated_by') ? 'has-error' : '' }}">
                <label for="cannonical link">{{ trans('global.page.fields.updated_by') }}</label>
                <input type="number" id="updated_by" name="updated_by" class="form-control" value="{{ old('updated_by', isset($page) ? $page->updated_by : '') }}" step="0.01">
                @if($errors->has('updated_by'))
                    <em class="invalid-feedback">
                        {{ $errors->first('updated_by') }}
                    </em>
                @endif
                <p class="helper-block">
                    {{ trans('global.page.fields.updated_by_helper') }}
                </p>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>

@endsection