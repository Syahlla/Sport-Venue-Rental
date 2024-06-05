@extends('layouts.coordinator')

@section('section-coordinator')
<div class="card mb-5">
    <div class="row g-0">
      <div class="col-md-6">
        @if ($gor->getFirstMediaUrl('gor_image'))
            <img src="{{ $gor->getFirstMediaUrl('gor_image') }}" class="img-fluid rounded-start" alt="...">
        @endif
      </div>
      <div class="col-md-6">
        <div class="card-body">
          <h5 class="card-title pb-0 text-capitalize">{{ $gor->name }}</h5>
          <p class="card-text text-capitalize"><h6><b>Harga Sewa dari @rupiah($gor->price) {{ $gor->type_duration == 'hours' ? 'Per Jam' : 'Sekali Masuk' }}</b></h6></p>
          <p class="card-text">{{ $gor->name }} beralamat di {{ $gor->address }}. {{ $gor->standard ? 'Tepatnya '.$gor->standard : '' }}</p>
        </div>
      </div>
    </div>
</div>

<div class="card">
    <div class="card-body">
      <h1 class="card-title text-center mb-3">Daftar Lapangan</h1>
      <div class="row">
        @if ($fields->count() > 0)
            @foreach ($fields as $field)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ $field->getFirstMediaUrl('field_image') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title pb-0">{{ $field->name }}</h5>
                        <p class="card-text">{!! $field->description !!}</p>
                        <div class="row text-center mt-5">
                            <div class="col-md-6">
                                <a href="#" class="text-warning">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M4 6H2V20C2 21.11 2.9 22 4 22H18V20H4V6M18.7 7.35L17.7 8.35L15.65 6.3L16.65 5.3C16.86 5.08 17.21 5.08 17.42 5.3L18.7 6.58C18.92 6.79 18.92 7.14 18.7 7.35M9 12.94L15.06 6.88L17.12 8.94L11.06 15H9V12.94M20 4L20 4L20 16L8 16L8 4H20M20 2H8C6.9 2 6 2.9 6 4V16C6 17.1 6.9 18 8 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2Z" />
                                    </svg>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="text-danger">
                                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                        <path fill="currentColor" d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <div class="col-md-12 text-center text-danger">
                <p><h5><b>{{ $gor->name }} belum memiliki lapangan.</b></h5></p>
            </div>
        @endif
      </div>
    </div>
</div>
@endsection