<x-dash-com>
    @php
        $route = (!request()->get('pengeluaran'))?true:false
    @endphp
    <div class="p-4">
        <form class="max-w-md" action="{{ route('store', ['jenis'=>$route]) }}" method="POST">
            @csrf
          <div class="mb-4">
            <label for="nominal" class="block text-gray-700 font-bold mb-2">Nominal:</label>
            <input
              type="number"
              id="nominal"
              name="nominal"
              class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none focus:border-blue-500"
              placeholder="000000"
            />
          </div>
          <div class="mb-4">
            <label for="deskripsi" class="block text-gray-700 font-bold mb-2">Deskripsi:</label>
            <textarea
              id="deskripsi"
              name="deskripsi"
              class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none focus:border-blue-500"
              rows="4"
              placeholder="Tulis Deskripsi"
            ></textarea>
          </div>
          <div class="mb-4">
            <label for="tanggal" class="block text-gray-700 font-bold mb-2">Tanggal:</label>
            <input
              type="date"
              id="tanggal"
              name="tanggal"
              class="w-full px-3 py-2 border rounded-md text-gray-700 focus:outline-none focus:border-blue-500"
            />
          </div>
          <button
            type="submit"
            class="w-full bg-blue-500 text-white font-bold py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600"
          >
            Kirim
          </button>
        </form>
    </div>
</x-dash-com>
