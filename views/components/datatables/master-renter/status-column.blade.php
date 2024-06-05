@if ($model->status == 'active')
    <span class="badge bg-success">Aktif</span>
@else
    <span class="badge bg-danger">Tidak Aktif</span>
@endif