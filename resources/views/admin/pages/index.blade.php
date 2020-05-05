@extends('layouts.admin')
@section('content')
<div class="container">
{{-- @can('page_create') --}} 
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.pages.create") }}">
                {{ trans('global.add') }} {{ trans('global.page.title_singular') }}
            </a>
        </div>
    </div>
{{-- @endcan  --}}
    <div class="card">
        <div class="card-header">
            {{ trans('global.page.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('global.page.fields.title') }}
                            </th>
                            <th>
                                {{ trans('global.page.fields.description') }}
                            </th>
                            <th>
                                {{ trans('global.page.fields.status') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $key => $page)
                            <tr data-entry-id="{{ $page->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $page->title ?? '' }}
                                </td>
                                <td>
                                    {{ $page->description ?? '' }}
                                </td>
                                <td>
                                    {{ $page->status ?? '' }}
                                </td>
                                <td>
                                    {{-- @can('page_show') --}}
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.pages.show', $page->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    {{-- @endcan --}}
                                    {{-- @can('page_edit') --}}
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.pages.edit', $page->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    {{-- @endcan
                                    @can('page_delete') --}}
                                        <form action="{{ route('admin.pages.destroy', $page->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                        </form>
                                    {{-- @endcan --}}
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
{{-- <script>
    $(function () {
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.pages.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('page_delete')
  dtButtons.push(deleteButton)
@endcan

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script> --}}
@endsection
@endsection