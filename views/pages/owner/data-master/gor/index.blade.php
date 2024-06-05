@extends('layouts.coordinator')

@section('section-coordinator')
<div class="card">
    <div class="card-body">
        <h5 class="card-title mb-5">Data Gor
            <p class="text-sm" style="float: right;">
                <a href="{{ route('master.gor.create') }}" class="btn btn-primary btn-sm rounded-md btn-hover">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M3 16H10V14H3M18 14V10H16V14H12V16H16V20H18V16H22V14M14 6H3V8H14M14 10H3V12H14V10Z" />
                    </svg>
                    Gor
                </a>
            </p>
        </h5>
        <div class="table-responsive">
            <table class="table table-hover" id="dataMasterGor">
                <thead>
                <tr>
                    <th scope="col" class="text-center">Gor</th>
                    <th scope="col" class="text-center">Harga</th>
                    <th scope="col" class="text-center">Tipe</th>
                    <th scope="col" class="text-center">Alamat</th>
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