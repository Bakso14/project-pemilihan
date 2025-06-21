<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pilih Judul Project</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    
    <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/Logo_Lab_Mikro.png') }}" class="w-36">
        </div>
        <h1 class="text-2xl font-bold text-center">Asisten Laboratorium Mikroprosesor</h1>
        <h1 class="text-2xl font-bold mb-6 text-center">Pemilihan Project</h1>

        @if (session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="/" method="POST" class="space-y-4">
            @csrf

            <div>
                <label class="block text-sm font-semibold mb-1">Nama</label>
                <input type="text" name="nama" required class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">NIM</label>
                <input type="text" name="nim" required class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Angkatan</label>
                <input type="number" name="angkatan" required class="w-full border rounded px-3 py-2">
            </div>

            <div>
                <label class="block text-sm font-semibold mb-1">Judul Project</label>
                <select name="project_id" id="project-select" class="w-full border rounded px-3 py-2">
                    @foreach ($projects as $project)
                        <option value="{{ $project->id }}" data-deskripsi="{{ $project->deskripsi }}">
                            {{ $project->judul }} ({{ $project->mahasiswas_count }}/{{ $project->kuota  }} orang)
                        </option>
                    @endforeach
                </select>
                @error('project_id')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div id="deskripsi-container" class="mt-3 p-3 bg-gray-100 border rounded text-sm text-gray-700">
                {{ $projects->first()->deskripsi ?? 'Silakan pilih project untuk melihat deskripsi.' }}
            </div>

            <div class="text-center">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-5 py-2 rounded">
                    Kirim
                </button>
            </div>
        </form>
    </div>

<script>
    const selectElement = document.getElementById('project-select');
    const deskripsiContainer = document.getElementById('deskripsi-container');

    selectElement.addEventListener('change', function () {
        const selectedOption = this.options[this.selectedIndex];
        const deskripsi = selectedOption.getAttribute('data-deskripsi');

        deskripsiContainer.textContent = deskripsi || 'Deskripsi tidak tersedia.';
    });
</script>

</body>
</html>
