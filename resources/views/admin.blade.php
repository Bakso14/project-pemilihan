<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Project</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 p-6">
    <div class="max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold mb-8 text-center">Dashboard Admin</h1>

        @foreach ($projects as $project)
            <div class="bg-white shadow rounded-lg mb-6 p-6">
                <h2 class="text-xl font-semibold text-blue-700 mb-2">{{ $project->judul }}</h2>
                <p class="mb-4">Dipilih oleh <strong>{{ $project->mahasiswas->count() }}</strong> mahasiswa</p>

                @if ($project->mahasiswas->isEmpty())
                    <p class="text-gray-500 italic">Belum ada mahasiswa yang memilih project ini.</p>
                @else
                    <table class="w-full border border-gray-300 rounded">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="p-2 border">No</th>
                                <th class="p-2 border">Nama</th>
                                <th class="p-2 border">NIM</th>
                                <th class="p-2 border">Angkatan</th>
                                <th class="p-2 border">Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($project->mahasiswas as $index => $mhs)
                                <tr class="text-sm text-center">
                                    <td class="p-2 border">{{ $index + 1 }}</td>
                                    <td class="p-2 border">{{ $mhs->nama }}</td>
                                    <td class="p-2 border">{{ $mhs->nim }}</td>
                                    <td class="p-2 border">{{ $mhs->angkatan }}</td>
                                    <td class="p-2 border">{{ $mhs->created_at->format('d-m-Y H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        @endforeach
    </div>
</body>
</html>
