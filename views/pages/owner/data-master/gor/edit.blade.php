@extends('layouts.coordinator')

@section('section-coordinator')
<form action="{{ route('master.gor.update', $gor->slug) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="row">

        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Ubah Identitas Gor</h5>

                    <div class="row mb-3">
                        <label for="name" class="col-sm-3 col-form-label">Nama Gor</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $gor->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="type_duration" class="col-sm-3 col-form-label">Pilih Durasi Sewa</label>
                        <div class="col-sm-9">
                            <select name="type_duration" id="type_duration" class="form-select text-capitalize">
                                <option value="hours" {{ old('type_duration', $gor->type_duration) == 'hours' ? 'selected' : '' }}>Per-Jam</option>
                                <option value="in" {{ old('type_duration', $gor->type_duration) == 'in' ? 'selected' : '' }}>Sekali Masuk</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="price" class="col-sm-3 col-form-label">Harga Sewa</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">Rp.</span>
                                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price', $gor->price) }}" required>
                                @error('price')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-sm-3 col-form-label">Alamat Lengkap</label>
                        <div class="col-sm-9">
                            <textarea name="address" id="address" cols="10" rows="5" class="form-control">{{ old('address', $gor->address) }}</textarea>
                            @error('address')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="standard" class="col-sm-3 col-form-label">Patokan</label>
                        <div class="col-sm-9">
                            <textarea name="standard" id="standard" cols="10" rows="5" class="form-control">{{ old('standard', $gor->standard) }}</textarea>
                            @error('standard')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Tambah Foto Gor</h5>

                    <div class="row mb-3">
                        <label for="photo" class="col-sm-3 col-form-label">Foto Gor</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control @error('gor_image') is-invalid @enderror" id="photo" name="gor_image" onchange="previewImage()" required>
                            <div class="col-12">
                                @if ($gor->getFirstMediaUrl('gor_image'))
                                    <img src="{{ $gor->getFirstMediaUrl('gor_image') }}" class="img-preview img-fluid mt-3" />
                                @endif
                            </div>
                            @error('field_image')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <button type="reset" class="btn btn-secondary">Batal</button>
                    </div>

                </div>
            </div>
        </div>

    </div>
</form>
@endsection