@extends('layouts.coordinator')

@section('section-coordinator')
<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-5">Data Kategori Lapangan
            <p class="text-sm" style="float: right;">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create-field-category">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3 16H10V14H3M18 14V10H16V14H12V16H16V20H18V16H22V14M14 6H3V8H14M14 10H3V12H14V10Z"></path>
                    </svg>
                    Kategori Lapangan
                </button>
            </p>
        </h5>
        <div class="table-responsive">
            <table class="table table-hover" id="dataMasterFieldCategory">
                <thead>
                <tr>
                    <th scope="col" class="text-center">Kategori</th>
                    <th scope="col" class="text-center">Aksi</th>
                </tr>
                </thead>
            </table>
        </div>

    </div>
</div>
@endsection