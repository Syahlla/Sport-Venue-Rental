<form action="{{ route('master.gor.update.status', $model->slug) }}" method="POST" id="form-gor-status-{{ $model->slug }}">
    @csrf
    @method('PATCH')

    @if ($model->status == 'active')
        <span class="badge bg-success" style="cursor: pointer" id="button-gor-status" data-status="{{ $model->status }}" data-gor="{{ $model->name }}" data-slug="{{ $model->slug }}">Aktif</span>
    @else
        <span class="badge bg-danger" style="cursor: pointer" id="button-gor-status" data-status="{{ $model->status }}" data-gor="{{ $model->name }}" data-slug="{{ $model->slug }}"">Tidak Aktif</span>
    @endif
</form>
