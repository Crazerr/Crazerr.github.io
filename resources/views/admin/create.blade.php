<!DOCTYPE html>
<html lang="en">

@include('layout.header')

<body id="page-top">
    <div id="wrapper">

        @include('layout.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">

                @include('layout.navbar')

                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Form Tambah Data Customer</h1>
                        <a href="{{ route('admin.index') }}" class="btn btn-primary mb-3">Tabel Data Customer</a>
                        {{-- <a href="{{ route('admin.index') }}" class="btn btn-primary mb-3">Data Customer</a> --}}
                        {{-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
            </ol> --}}
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    {{-- <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6> --}}
                                </div>
                                 <form method="POST" action="{{ route('bookingAdmin.store') }}" enctype="multipart/form-data" class="px-5 pb-5">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">Nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" name="email" id="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telepon" class="form-label">No Telepon</label>
                                        <input type="text" class="form-control" name="no_telepon" id="no_telepon">
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">Alamat</label>
                                        <input type="text" class="form-control" name="alamat" id="alamat">
                                    </div>
                                    <div class="mb-3">
                                        <label for="Tanggal_booking" class="form-label">Tanggal Booking</label>
                                        <input type="date" id="tanggal_booking" name="tanggal_booking" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="paket" class="form-label">Paket Foto</label>
                                        <select id="paket" name="paket" required>
                                            <option value=""> Pilih paket</option>
                                           <option value="1"> Paket 1</option>
                                           <option value="2">Paket 2</option>
                                           <option value="3">Paket 3</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="waktu_booking" class="form-label">Waktu booking</label>
                                        <select id="waktu_booking" name="waktu_booking" required></select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran</label>
                                        <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                    
                            {{-- Mengambil data waktu booking yang belum dibooking pada tanggal tertentu --}}
                                 <script>
                                    function getAvailableWaktuBooking(tanggalBooking) {
                                        const waktuBookingSelect = document.getElementById('waktu_booking');
                                        waktuBookingSelect.innerHTML = '';
                                
                                        fetch(`/booking/waktu?tanggal_booking=${tanggalBooking}`)
                                            .then(response => response.json())
                                            .then(data => {
                                                data.forEach(waktuBooking => {
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


                                {{-- <div class="card-footer"></div> --}}
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Modal Logout -->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to logout?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary"
                                        data-dismiss="modal">Cancel</button>
                                    <a href="login.html" class="btn btn-primary">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!---Container Fluid-->
            </div>
            @include('layout.footer')
        </div>
    </div>

</body>

</html>
