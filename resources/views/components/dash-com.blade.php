<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Tambahkan link ke CSS Tailwind -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <!-- Navigasi -->
    <x-nav-com/>
    <div class="container">
        <div class="flex">
                <!-- Sidebar -->
                <x-side-com/>
            <!-- Konten Utama -->
            <div class="w-full bg-white p-4">
            {{ $slot }}
            <!-- Isi konten utama disini -->
            </div>
        </div>
    </div>

</body>
</html>
