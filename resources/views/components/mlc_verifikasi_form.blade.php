<form class="lg:mx-44 mx-4 my-4" action="/event/mlc/verifikasipembayaran/success" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="mt-4">
        <div class="">
            <div class="relative z-0 mb-6 w-full group">
                <select name="metode_pembayaran" id="metode_pembayaran" required
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option value="" selected disabled>Pilih Salah Satu</option>
                    <option value="individu">Individu</option>
                    <option value="tim">Tim</option>
                </select>
                <label for="metode_pembayaran"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Metode Pembayaran</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="nomor_pembayaran" id="nomor_pembayaran" oninput="cekRegis()"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="nomor_pembayaran"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kode
                    Pembayaran</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="jumlah_pembayaran" id="jumlah_pembayaran" oninput="cekRegis()"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="jumlah_pembayaran"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jumlah yang dibayarkan</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="nama" id="nama"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="nama"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                    Lengkap</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <select name="bank_tujuan" id="bank_tujuan" required
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                    <option value="" selected disabled>Pilih Bank Tujuan</option>
                    <option value="mandiri">Mandiri 1710068466666 Faizal Rachman</option>
                    <option value="bca">BCA 1260282961 Faizal Rachman</option>
                </select>
                <label for="bank_tujuan"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bank
                    Tujuan</label>
            </div>
        </div>
        <div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="bank_asal"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="bank_asal"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bank
                    Asal</label>
            </div>
            <div class="relative z-0 mb-6 w-full group">
                <input type="text" name="pemilik_rekening"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " required="">
                <label for="pemilik_rekening"
                    class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
                    Pemilik Rekening Asal</label>
            </div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload
                file</label>
            <input type="file" name="bukti_pembayaran"
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Silahkan Upload Bukti
                Pembayaran</div>
        </div>
    </div>
    <button class="bg-biru px-6 py-1 font-SourceSansPro text-white rounded mt-4">
        <a type="submit">Lanjut</a>
    </button>
</form>

<script type="text/javascript">
    function cekRegis() {
        const noBayar = $('#nomor_pembayaran').val();
        if (!noBayar) return false;
        if (noBayar.length <= 3) return false;
        const url = "{{ url('/regis/cek') }}"

        $.get(`${url}/${noBayar}`, function(res) {
            $('#nama').val(res.nama_lengkap)
        })
    }
</script>
