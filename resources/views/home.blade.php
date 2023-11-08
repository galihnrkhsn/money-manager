{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<x-dash-com>
    <h1 class="text-2xl font-bold">Dashboard</h1>

    <div class="w-full p-4">
        <div class="flex">
            <button class="px-4 py-2 border rounded-l-lg focus:outline-none bg-gray-200" id="tab1">Tab 1</button>
            <button class="px-4 py-2 border border-l-0 focus:outline-none" id="tab2">Tab 2</button>
            <button class="px-4 py-2 border rounded-r-lg border-l-0 focus:outline-none" id="tab3">Tab 3</button>
        </div>

        <div class="tab-content mt-4">
            <div id="content1" class="tab-pane">
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
                                Total Uang Masuk
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                                Total Uang Masuk
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                                Total Uang Masuk
                            </td>
                        </tr>
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
                                Jumlah
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                                TAB 2
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                                TAB 2
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
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
        button.classList.remove("bg-gray-200");
    });

    // Menampilkan konten tab yang dipilih dan menandainya sebagai aktif
    document.getElementById(tabName).style.display = "block";
    document.getElementById("tab" + tabName.charAt(tabName.length - 1)).classList.add("bg-gray-200");
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

    document.getElementById("tab3").addEventListener("click", function () {
        showTab("content3");
    });

    </script>

</x-dash-com>
