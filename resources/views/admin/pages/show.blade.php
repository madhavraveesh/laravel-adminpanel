@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('global.page.title') }}
    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        {{ trans('global.page.fields.title') }}
                    </th>
                    <td>
                        {{ $page->title }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.page_slug') }}
                    </th>
                    <td>
                        {{ $page->page_slug }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.description') }}
                    </th>
                    <td>
                        {!! $page->description !!}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.cannonical_link') }}
                    </th>
                    <td>
                        {{ $page->cannonical_link }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.seo_title') }}
                    </th>
                    <td>
                        {{ $page->seo_title }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.seo_keyword') }}
                    </th>
                    <td>
                        {{ $page->seo_keyword }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.seo_description') }}
                    </th>
                    <td>
                        {{ $page->seo_description }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.created_by') }}
                    </th>
                    <td>
                        {{ $page->created_by }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.updated_by') }}
                    </th>
                    <td>
                        {{ $page->updated_by }}
                    </td>
                </tr>
                <tr>
                    <th>
                        {{ trans('global.page.fields.status') }}
                    </th>
                    <td>
                        {{ $page->status }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection