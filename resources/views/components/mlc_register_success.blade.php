<div class="bg-biru lg:mx-32 mx-4 rounded-lg my-4">
    <div class="mx-8 py-8">
        <table class="table-fixed font-Montserrat font-bold lg:text-xl text-sm  text-white">
            <tbody>
                <thead>
                    <tr>
                        <th class="w-64"></th>
                        <th class="w-[32rem]"></th>
                    </tr>
                </thead>
                <tr>
                    <td class="tg-0lax">KODE REGISTRASI</td>
                    <td class="tg-0lax">{{ $regisConfirmation->nomor_registrasi }}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">KODE PEMBAYARAN</td>
                    <td class="tg-0lax">{{ $regisConfirmation->nomor_pembayaran }}</td>
                </tr>
                <tr>
                    <td class="tg-0lax">TOTAL HARGA</td>
                    <td class="tg-0lax">IDR {{ number_format($regisConfirmation->total, 2, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
        <div class="text-white font-Montserrat lg:text-base text-xs font-normal mt-8">
            <h1>Silahkan melakukan pembayaran melalui transfer ke Rekening berikut</h1>
            <ul class="my-4">
                <li class="font-bold">BCA</li> 
                <li>Faizal Rachman </li>
                <li class="font-normal">1260282961</li>
                <li class="mt-4 font-bold">Mandiri</li> 
                <li>Faizal Rachman </li>
                <li class="font-normal">1710068466666</li>
            </ul>
            <h1>Simpan kode registrasi dan kode pembayaran dan bukti transfer, jika perlu lakukan tangkapan layar / screenshoot. Selanjutnya lakukan verifikasi pembayaran</h1>
        </div>
        <div class="mt-8">
            <button class="bg-kuning px-6 rounded-md py-1">
                <a href="/event/mlc/verifikasipembayaran" class="text-biru font-Montserrat font-bold">Verifikasi
                    Pembayaran</a>
            </button>
        </div>
    </div>
</div>
