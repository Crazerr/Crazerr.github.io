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
                        <a href="{{ route('admin.index') }}" class="btn btn-primary mb-3">Tabel Data Customer</a>
                        {{-- <a href="{{ route('admin.create') }}" class="btn btn-primary mb-3">Tambah Data</a> --}}

                        {{-- <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Simple Tables</li>
            </ol> --}}
                    </div>
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card px-3 pb-3">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    {{-- <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6> --}}
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover border border-3 p-3">
                                        <thead>
                                            <tr>
                                                <th>Tanggal Booking</th>
                                                <th>Waktu Booking</th>
                                                <th>Nama Customer</th>
                                                <th>Email</th>
                                                <th>No Telepon</th>
                                                <th>Paket</th>
                                                <th>Bukti Pembayaran</th>
                                                <th>Option</th>
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
                                                    <td><a href="{{ asset($booking->bukti_pembayaran) }}" target='_blank'>Cek Bukti</a></td>
                                                    <td> <a href="/admin/updatestatus/{{ $booking->id }}/terima">Terima</a>
                                                        <a href="/admin/updatestatus/{{ $booking->id }}/tolak">Tolak</a></td>
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
