<x-dash-com>
    <div class="p-4">
        <div class="mb-4 flex justify-between">
            <button class="bg-green-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-600"><a href="{{ route('pemasukan') }}">Tambah Pemasukan</a></button>
            <button class="bg-red-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-red-600"><a href="{{ route('pemasukan', ['pengeluaran'=>true]) }}">Tambah Pengeluaran</a></button>
        </div>

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
              <th class="px-6 py-3 bg-gray-200 text-left text-xs leading-4 font-semibold text-gray-600 uppercase tracking-wider">
                Uang Keluar
              </th>
            </tr>
          </thead>
          <tbody>
              @foreach ( $history as $h )
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
              <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300">
                {{ $h->jenis == 2 ? 'Rp ' . number_format($h->nominal, 0, ',', '.') : '-' }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
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
                        {{-- Rp {{ number_format($totalSisaUang, 0, ',', '.') }} --}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-dash-com>
