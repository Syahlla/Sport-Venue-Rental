@extends('layouts.coordinator')

@section('section-coordinator')
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Data Penyewa</h5>

      <div class="table-responsive">
        <table class="table table-hover" id="dataMasterRenter">
            <thead>
            <tr>
                <th scope="col" class="text-center">Penyewa</th>
                <th scope="col" class="text-center">Telepon</th>
                <th scope="col" class="text-center">Tgl. Terdaftar</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-center">Aksi</th>
            </tr>
            </thead>
        </table>
      </div>

    </div>
</div>
@endsection