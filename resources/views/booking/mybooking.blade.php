<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DN Studio Bali</title>

	<!--Font awesome cdn link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<!--Custom CSS File-->
	<link rel="stylesheet" href="/DNStudio/css/style.css">

</head>
<body>

	<!--Header starts-->
	<header class="header">

		<a href="#" class="logo"><i class="fas fa-camera"></i> DNStudio</a>

		<nav class="navbar">
			<a href="/customer">home</a>
		</nav> 

		<div id="menu-btn" class="fas fa-bars"></div>

	</header>
	<!--End of Header-->

	<!--My Booking section starts-->
	<section class="mybooking" id="mybooking" style="padding-top: 10rem; min-height:60vh;">

		<h1 class="heading">my <span>booking</span></h1>

		<div class="row">
                        <div class="col-lg-12 mb-4">
                            <!-- Simple Tables -->
                            <div class="card px-3">
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
                                                <th>Status</th>
                                                <th>Email</th>
                                                <th>Alamat</th>
                                                <th>No Telepon</th>
                                                <th>Paket</th>
                                                <th>Bukti Pembayaran</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($bookings as $booking)
                                                <tr>
                                                    <td>{{ \Carbon\Carbon::parse($booking->tanggal_booking)->format('d, M Y') }}
                                                    </td>
                                                    <td>{{ $booking->waktu_booking }}</td>
                                                    <td>{{ $booking->nama }}</td>
                                                    <td>{{ $booking->status }}</td>
                                                    <td>{{ $booking->email }}</td>
                                                    <td>{{ $booking->alamat }}</td>
                                                    <td>{{ $booking->no_telepon }}</td>
                                                    <td>{{ $booking->paket }}</td>
                                                    <td><a href="{{ asset($booking->bukti_pembayaran) }}" target='_blank'>Cek Bukti</a></td>
                                                    
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
	 </section>
	<!--My Booking section end-->


	<!--Footer Section Starts-->
	<section class="footer">
		<div class="share">
			<a href="https://instagram.com/dn.studiobali/" class="fab fa-instagram"></a>
		</div>

		<div class="credit">created by <span>Dn Studio Team</span> | all right reserved</div>
	</section>
	<!--Footer Section End-->

	

	<!--Custom JS file link-->
	<script src="/DNStudio/js/script.js"></script>


</body>   
</html>