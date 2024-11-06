@extends('layouts.app')

@section('title', 'Tambah Data Kehadiran')

@section('content')
    <h2>Tambah Data Kehadiran</h2>
    <form action="{{ route('attendances.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="student_name" class="form-label">Nama:</label>
            <input type="text" name="student_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="student_id" class="form-label">ID Mahasiswa:</label>
            <input type="text" name="student_id" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="attendance_date" class="form-label">Tanggal:</label>
            <input type="date" name="attendance_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select name="status" class="form-select" required>
                <option value="present">Hadir</option>
                <option value="absent">Tidak Hadir</option>
                <option value="late">Terlambat</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection