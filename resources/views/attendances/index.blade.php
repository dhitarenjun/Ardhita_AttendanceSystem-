@extends('layouts.app')

@section('title', 'Data Kehadiran Mahasiswa')

@section('content')
    <h1>Data Kehadiran Mahasiswa</h1>
    <a href="{{ route('attendances.create') }}" class="btn btn-primary mb-3">Tambah Kehadiran</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>ID Mahasiswa</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->student_name }}</td>
                    <td>{{ $attendance->student_id }}</td>
                    <td>{{ $attendance->attendance_date }}</td>
                    <td>{{ ucfirst($attendance->status) }}</td>
                    <td>
                        <a href="{{ route('attendances.edit', $attendance->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('attendances.destroy', $attendance->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection