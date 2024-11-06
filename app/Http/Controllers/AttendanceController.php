<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function index()
    {
        $attendances = Attendance::all();
        return view('attendances.index', compact('attendances'));
    }

    public function create()
    {
        return view('attendances.create');
    }

    public function store(Request $request)
    {
        Attendance::create($request->all());
        return redirect()->route('attendances.index')->with('success', 'Kehadiran berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('attendances.edit', compact('attendance'));
    }

    public function update(Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->update($request->all());
        return redirect()->route('attendances.index')->with('success', 'Kehadiran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
        return redirect()->route('attendances.index')->with('success', 'Kehadiran berhasil dihapus.');
    }
}