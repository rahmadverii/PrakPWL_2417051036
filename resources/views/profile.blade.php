<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Praktikum</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-lg p-6 w-full max-w-sm text-center">
        <!-- Avatar Lingkaran -->
        <div class="w-28 h-28 mx-auto mb-6 rounded-full bg-gray-200 border-2 border-gray-300 flex items-center justify-center overflow-hidden">
            <svg class="w-16 h-16 text-gray-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
            </svg>
        </div>

        <!-- Kartu Informasi -->
        <div class="space-y-3">
            <div class="bg-gray-200 py-2 px-4 rounded-md font-semibold text-gray-700">
                Nama: {{ $nama }}
            </div>
            <div class="bg-gray-200 py-2 px-4 rounded-md font-semibold text-gray-700">
                Kelas: {{ $kelas }}
            </div>
            <div class="bg-gray-200 py-2 px-4 rounded-md font-semibold text-gray-700">
                NPM: {{ $npm }}
            </div>
        </div>
    </div>
</body>
</html>