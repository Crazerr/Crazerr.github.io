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
                <div class="container-fluid px-5" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
                        <h1 class="h3 mb-0 text-gray-800">Tabel Customer</h1>
                    </div>
                    <div >
                        <a href="{{ route('admin.acc') }}" class="btn btn-danger mb-3">Booking pending</a>
                        <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
                    </div>
                   
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card px-3">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    {{-- <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6> --}}
                                </div>
                                <div class="table-responsive">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>

                                                <th>Tanggal Booking</th>
                                                <th>Waktu Booking</th>
                                                <th>Nama Customer</th>
                                                <th>Email</th>
                                                <th>No Telepon</th>
                                                <th>Paket</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Status</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td>{{ \Carbon\Carbon::parse($booking->tanggal_booking)->format('d, M Y') }}
                                                    </td>
                                                    <td>{{ $booking->waktu_booking }}</td>
                                                    <td>{{ $booking->nama }}</td>
                                                    <td>{{ $booking->email }}</td>
                                                    <td>{{ $booking->no_telepon }}</td>
                                                    <td>{{ $booking->paket }}</td>
                                                    <td><a href="{{ asset($booking->bukti_pembayaran) }}"
                                                            target='_blank'>Cek Bukti</a>
                                                    </td>
                                                    <td>{{ $booking->status }}</td>
                                                    <td>
                                                        <form action="{{ route('adminhapus', $booking->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('delete')
                                                            <a href="{{ route('adminedit', $booking->id) }}"
                                                                class="btn btn-success btn-sm mb-1">Edit</a>
                                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                                        </form>

                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
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
