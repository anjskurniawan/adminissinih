<div class="bg-biru lg:mx-32 mx-4 rounded-lg my-4">
    <div class="mx-8 py-8">
        <h1 class="text-white font-Montserrat font-bold lg:text-xl text-lg">Mohon periksa kembali data diri dengan benar</h1>
        {{-- {{ dd($regisConfirmation[0]) }} --}}
        <div class="mt-4 space-y-2">
            <div class="grid grid-cols-3 text-white text-xs">
                <div>Nama</div>
                <div>{{ $regisConfirmation[0]->nama_lengkap }}</div>
            </div>
            <div class="grid grid-cols-3 text-white text-xs">
                <div>Tempat, Tanggal lahir</div>
                <div>{{ $regisConfirmation[0]->tempat_lahir }},{{ $regisConfirmation[0]->tanggal_lahir }}</div>
            </div>
            <div class="grid grid-cols-3 text-white text-xs">
                <div>Jenis Kelamin</div>
                <div class="col-span-2">{{ $regisConfirmation[0]->jenis_kelamin }}</div>
            </div>
            <div class="grid grid-cols-3 text-white text-xs">
                <div>Tim</div>
                <div class="col-span-2">{{ $regisConfirmation[0]->tim }}</div>
            </div>
            <div class="grid grid-cols-3 text-white text-xs">
                <div>Kelas</div>
                <div class="col-span-2">{{ $regisConfirmation[0]->kelas }} ({{ $regisConfirmation[0]->jenis_sepeda }})</div>
            </div>
            <div class="grid grid-cols-3 text-white text-xs">
                <div>Email</div>
                <div class="col-span-2">{{ $regisConfirmation[0]->email }}</div>
            </div>
            <div class="grid grid-cols-3 text-white text-xs">
                <div>No. Whatsapp</div>
                <div class="col-span-2">{{ $regisConfirmation[0]->no_wa }}</div>
            </div>
            <div class="grid grid-cols-3 text-white text-xs">
                <div>Golongan Darah</div>
                <div class="col-span-2">{{ $regisConfirmation[0]->golongan_darah }}</div>
            </div>
            <div class="grid grid-cols-3 text-white text-xs">
                <div>Ukuran jersey</div>
                <div class="col-span-2">{{ $regisConfirmation[0]->ukuran_jersey }}</div>
            </div>
        </div>
        <div class="flex items-center mt-4">
            <input id="checkbox-1" aria-describedby="checkbox-1" type="checkbox"
                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="checkbox-1" class="ml-3 text-xs font-normal text-white">Saya telah memeriksa Kembali data
                diri
                saya dengan benar. Saya bertanggung jawab atas keaslian data diri yang saya kirimkan.</label>
        </div>
        <div class="mt-8">

            <a onclick="history.back()">
                <button class="bg-white w-32 rounded-md py-1 font-Montserrat font-bold" type="button">
                    Kembali
                </button>
            </a>
            <a href="/event/mlc/register/success/{{ $regisConfirmation[0]->id }}"
                class=" text-biru font-Montserrat font-bold">
                <button class="bg-kuning w-32 rounded-md py-1 font-Montserrat font-bold" type="button">
                    Lanjut
                </button>
            </a>
        </div>
    </div>
</div>
