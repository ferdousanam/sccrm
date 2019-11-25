<a href="{{ route('admin.user-type.edit', $id) }}" class="btn btn-xs btn-primary" title="View">
  <i class="fa fa-pencil-square-o lg"></i>
</a>
<button type="button" class="btn btn-xs btn-danger delete-button" data-toggle="modal" data-target="#delete-modal" data-id="{{ $id }}">
  <i class="fa fa-trash lg"></i>
</button>
