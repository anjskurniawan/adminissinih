<form class="lg:mx-44 mx-4 my-4" method="POST" action="/event/mlc/register/confirmation" enctype="multipart/form-data">
    @csrf
    
<fieldset>
    <legend class="sr-only">Jenis Sepeda</legend>
    <div class="flex items-center mb-4">
    <input id="road_bike" type="radio" name="jenis_sepeda" value="Road Bike" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="road_bike" aria-describedby="road_bike" checked="">
    <label for="road_bike" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
    Road Bike
    </label>
    </div>
    <div class="flex items-center mb-4">
    <input id="seli" type="radio" name="jenis_sepeda" value="SeLi / Brompton" class="w-4 h-4 border-gray-300 focus:ring-2 focus:ring-blue-300 dark:focus:ring-blue-600 dark:focus:bg-blue-600 dark:bg-gray-700 dark:border-gray-600" aria-labelledby="seli" aria-describedby="seli">
    <label for="seli" class="block ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
    SeLi / Brompton <br><span class="text-blue-600">(Anda masuk dalam kategori kelas OPEN. Abaikan kelas pendekar apabila anda menggunakan Sepeda Lipat atau Brompton)</span>
    </label>
    {{-- <div>Anda masuk dalam kategori kelas OPEN. Abaikan kelas pendekar apabila anda menggunakan Sepeda Lipat atau brompton</div> --}}
    </div>
</fieldset>
    <div class="relative z-0 mb-6 w-full group">
        <input type="name" name="nama"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required="">
        <label for="nama"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nama
            Lengkap</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="tempat_lahir" name="tempat_lahir"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required="">
        <label for="tempat_lahir"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tempat Lahir</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" onchange="cekKelas()"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required="">
        <label for="tanggal_lahir"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tanggal
            Lahir</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <select name="jenis_kelamin" id="jenis_kelamin" required onchange="cekKelas()"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
            <option value="" selected disabled>Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Wanita</option>
        </select>
        <label for="jenis_kelamin"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Jenis
            Kelamin</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="text" name="kelas" id="kelas"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required="" disabled readonly>
        <label for="kelas"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kelas</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="text" name="tim"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required="">
        <label for="tim"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tim</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="text" name="kota_asal" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
        <label for="kota_asal" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Kota Asal</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <label for="golongan_darah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Golongan Darah</label>
        <select id="golongan_darah" name="golongan_darah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Pilih salah satu</option>
            <option value="O-">O-</option>
            <option value="O+">O+</option>
            <option value="A-">A-</option>
            <option value="A+">A+</option>
            <option value="B-">B-</option>
            <option value="B+">B+</option>
            <option value="AB-">AB-</option>
            <option value="AB+">AB+</option>
        </select>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <label for="ukuran_jersey" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Ukuran Jersey</label>
        <select id="ukuran_jersey" name="ukuran_jersey" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Pilih salah satu</option>
            <option value="2XS">2XS</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="2XL">2XL</option>
            <option value="3XL">3XL</option>
            <option value="4XL">4XL</option>
        </select>
        <p class="text-[10px] mt-1 opacity-70">untuk ukuran size chart bisa dilihat pada gambar dibawah</p>
        <img src="{{ asset('assets/global/sizechart.png') }}" alt="">
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="email" name="email"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required="">
        <label for="email"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
    </div>
    <div class="relative z-0 mb-6 w-full group">
        <input type="number" name="no_wa"
            class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
            placeholder=" " required="">
        <label for="no_wa"
            class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">No.
            Whatsapp</label>
    </div>
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="user_avatar">Upload
        Kartu Identitas Diri</label>
    <input name="kartu_identitas" accept="image/*"
        class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none focus:border-transparent dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
        aria-describedby="user_avatar_help" id="user_avatar" type="file">
    <div class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="user_avatar_help">Silahkan Upload Kartu Identitas diri</div>
    <button type="submit" class="bg-biru rounded-md text-white px-4 py-1 mt-4">Lanjut</button>
</form>
<script type="text/javascript">
    function cekKelas() { // birthday is a date
        var date = $('#tanggal_lahir').val();
        var sex = $('#jenis_kelamin').val();

        if (!sex) return false;

        var today = new Date();
        var birthDate = new Date(date);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
            age--;
        }

        var kelas = $('#kelas')

        if (sex == 'P') {
            if (age >= 31) {
                kelas.val('OPEN')
            } else if (age > 14 && age < 31) {
                kelas.val('JUNIOR')
            }
        } else {
            if (age >= 14 && age <= 16) {
                kelas.val('PENDEKAR A')
            } else if (age >= 17 && age <= 24) {
                kelas.val('PENDEKAR B')
            } else if (age >= 25 && age <= 35) {
                kelas.val('PENDEKAR C')
            } else if (age >= 36 && age <= 45) {
                kelas.val('PENDEKAR D')
            } else if (age >= 46 && age <= 50) {
                kelas.val('PENDEKAR E')
            } else if (age >= 51) {
                kelas.val('PENDEKAR F')
            }
        }

    }

    function onChangeSelect(url, id, name) {
        // send ajax request to get the cities of the selected province and append to the select tag
        $.ajax({
            url: url,
            type: 'GET',
            data: {
                id: id
            },
            success: function(data) {
                $('#' + name).empty();
                $('#' + name).append('<option>==Pilih Salah Satu==</option>');
                $.each(data, function(key, value) {
                    $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                });
            }
        });
    }
    $(function() {
        $('#provinsi').on('change', function() {
            onChangeSelect('', $(this).val(), 'kota');
        });
        $('#kota').on('change', function() {
            onChangeSelect('', $(this).val(), 'kecamatan');
        })
        $('#kecamatan').on('change', function() {
            onChangeSelect('', $(this).val(), 'desa');
        })
    });
</script>
