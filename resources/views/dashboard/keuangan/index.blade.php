<x-dash-com>
    <div class="p-4">
        <div class="mb-4 flex justify-between">
            <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-600"><a href="{{ route('pemasukan') }}">Tambah Pemasukan</a></button>
            <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-red-600"><a href="{{ route('pemasukan', ['pengeluaran'=>true]) }}">Tambah Pengeluaran</a></button>
        </div>
        <div class="tab-content">
            <div class="flex">
                <button class="px-4 py-2 border rounded-l-lg bg-blue-400" id="tab1">Pemasukan</button>
                <button class="px-4 py-2 border border-l-0 " id="tab2">Pengeluaran</button>
            </div>
            <div id="content1" class="tab-pane">
                <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg">
                <thead>
                    <tr>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                        Tanggal
                    </th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                        Uang Masuk
                    </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $history as $h )
                    @if ($h->jenis == 1)
                    <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        {{ $h->deskripsi }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        {{ $h->tanggal }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        {{ $h->jenis == 1 ? 'Rp ' . number_format($h->nominal, 0, ',', '.') : '-' }}
                    </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                </table>
            </div>
            <div id="content2" class="tab-pane hidden">
                <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg">
                <thead>
                    <tr>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                        Tanggal
                    </th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                        Uang Keluar
                    </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $history as $h )
                    @if ($h->jenis == 2)
                    <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        {{ $h->deskripsi }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        {{ $h->tanggal }}
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        {{ $h->jenis == 2 ? 'Rp ' . number_format($h->nominal, 0, ',', '.') : '-' }}
                    </td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="p-4 mt-4">
        <table class="min-w-full bg-white border border-gray-300 shadow-lg rounded-lg">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                        Deskripsi
                    </th>
                    <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                        Jumlah
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        Total Uang Masuk
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        Rp {{ number_format($totalUangMasuk, 0, ',', '.') }}
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        Total Uang Keluar
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        Rp {{ number_format($totalUangKeluar, 0, ',', '.') }}
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        Total Sisa Uang
                    </td>
                    <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                        Rp {{ number_format($totalSisaUang, 0, ',', '.') }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        // Fungsi untuk menampilkan tab yang dipilih
        function showTab(tabName) {
        // Semua konten tab dijadikan sembunyi
        var tabContents = document.querySelectorAll(".tab-pane");
        tabContents.forEach(function (content) {
            content.style.display = "none";
        });

        // Menghapus kelas "active" dari semua tombol tab
        var tabButtons = document.querySelectorAll(".tab-content button");
        tabButtons.forEach(function (button) {
            button.classList.remove("bg-blue-400");
        });

        // Menampilkan konten tab yang dipilih dan menandainya sebagai aktif
        document.getElementById(tabName).style.display = "block";
        document.getElementById("tab" + tabName.charAt(tabName.length - 1)).classList.add("bg-blue-400");
    }

        // Inisialisasi dengan menampilkan tab pertama saat halaman dimuat
        showTab("content1");

        // Menambahkan event listener ke tombol tab
        document.getElementById("tab1").addEventListener("click", function () {
            showTab("content1");
        });

        document.getElementById("tab2").addEventListener("click", function () {
            showTab("content2");
        });

    </script>
</x-dash-com>
