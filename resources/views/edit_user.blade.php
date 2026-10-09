@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm col-md-6 mx-auto">
        <div class="card-header bg-warning text-dark fw-bold">
            Edit Data User
        </div>
        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $user->nama }}" required>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NPM</label>
                    <input type="text" class="form-control" id="nim" name="nim" value="{{ $user->nim }}" required>
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select class="form-select" id="kelas_id" name="kelas_id" required>
                        @foreach ($kelas as $k)
                            <option value="{{ $k->id }}" {{ $user->kelas_id == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="/user" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection