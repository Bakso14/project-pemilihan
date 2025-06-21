<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create()
    {
        $projects = Project::withCount('mahasiswas')->get();
        $mahasiswas = Mahasiswa::with('project')->latest()->get();
        
        return view('form', compact('projects', 'mahasiswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'angkatan' => 'required|digits:4|integer',
            'project_id' => 'required|exists:projects,id',
        ]);

        $project = Project::withCount('mahasiswas')->findOrFail($request->project_id);

        if ($project->mahasiswas_count >= $project->kuota) {
            return back()->withErrors(['project_id' => 'Slot untuk project ini sudah penuh.']);
        }

        Mahasiswa::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function adminView()
    {
        // Ambil semua project beserta mahasiswa yang sudah memilihnya
        $projects = Project::with('mahasiswas')->get();

        return view('admin', compact('projects'));
    }

}
