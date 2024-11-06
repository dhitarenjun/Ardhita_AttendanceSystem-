@extends('layouts.app')

@section('title', 'Edit Data Kehadiran')

@section('content')
    <h2>Edit Data Kehadiran</h2>
    <form action="{{ route('attendances.update', $attendance->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="student_name" class="form-label">Nama:</label>
            <input type="text" name="student_name" class="form-control" value="{{ $attendance->student_name }}" required>
        </div>
        <div class="mb-3">
            <label for="student_id" class="form-label">ID Mahasiswa:</label>
            <input type="text" name="student_id" class="form-control" value="{{ $attendance->student_id }}" required>
        </div>
        <div class="mb-3">
            <label for="attendance_date" class="form-label">Tanggal:</label>
            <input type="date" name="attendance_date" class="form-control" value="{{ $attendance->attendance_date }}" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select name="status" class="form-select" required>
                <option value="present" {{ $attendance->status == 'present' ? 'selected' : '' }}>Hadir</option>
                <option value="absent" {{ $attendance->status == 'absent' ? 'selected' : '' }}>Tidak Hadir</option>
                <option value="late" {{ $attendance->status == 'late' ? 'selected' : '' }}>Terlambat</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
@endsection