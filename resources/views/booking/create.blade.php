<!-- create.blade.php -->
<form method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>
    <div>
        <label for="alamat">Alamat</label>
        <input type="text" id="alamat" name="alamat" required>
    </div>
    <div>
        <label for="no_telepon">No Telepon</label>
        <input type="text" id="no_telepon" name="no_telepon" required>
    </div>
    <div>
        <label for="paket">Paket</label>
        <select id="paket" name="paket" required>
            <option value="1">Paket 1</option>
            <option value="2">Paket 2</option>
            <option value="3">Paket 3</option>
        </select>
    </div>
    <div>
        <label for="tanggal_booking">Tanggal Booking</label>
        <input type="date" id="tanggal_booking" name="tanggal_booking" required>
    </div>
    <div>
        <label for="waktu_booking">Waktu Booking</label>
        <select id="waktu_booking" name="waktu_booking" required></select>
    </div>
    <div>
        <label for="bukti_pembayaran">Bukti Pembayaran</label>
        <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
    </div>
    <button type="submit">Submit</button>
</form>

<script>
    function getAvailableWaktuBooking(tanggalBooking) {
        const waktuBookingSelect = document.getElementById('waktu_booking');
        waktuBookingSelect.innerHTML = '';

        fetch(`/booking/waktu?tanggal_booking=${tanggalBooking}`)
            .then(response => debugger response.json())
            .then(data => {
                debugger
                data.booking(waktuBooking => {
                    const option = document.createElement('option');
                    option.value = waktuBooking;
                    option.text = waktuBooking;
                    waktuBookingSelect.appendChild(option);
                });
            });
    }

    const tanggalBookingInput = document.getElementById('tanggal_booking');
    tanggalBookingInput.addEventListener('change', () => {
        const tanggalBooking = tanggalBookingInput.value;
        getAvailableWaktuBooking(tanggalBooking);
    });

    const tanggalBookingAwal = tanggalBookingInput.value;
    getAvailableWaktuBooking(tanggalBookingAwal);
</script>
