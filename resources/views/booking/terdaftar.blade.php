<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DN Studio Bali</title>

	<!--Font awesome cdn link-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<!--Custom CSS File-->
    <link href="{{ asset('DNStudio') }}/css/styleBooking.css" rel="stylesheet">

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

	<!--Booking section starts-->
	<section class="book" id="book">

		<!-- <h1 class="heading"><span>book</span>now</h1> -->

		<div class="row">

			<div class="image p-5">
				<img src="{{ asset('DNStudio') }}/image/book-image.svg" alt="">
			</div>

			<table class="table table-striped table-hover border border-3 p-3">
                <thead>
                    <tr>
                        
                        <th>Tanggal dan jadwal booking</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($booking->tanggal_booking)->format('d, M Y')}}</td>
                        <td>{{ $booking->waktu_booking }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

		</div>

	</section>
	<!--Booking section end-->

	<!--My Booking section starts-->
	<section class="mybooking" id="mybooking">

		<h1 class="heading">my <span>booking</span></h1>

		<div class="box-container">
		   <div class="box" style="text-align: center;">
			  <p style="padding-bottom: .5rem; text-transform:capitalize;">no bookings found!</p>
			  <a href="#book" class="btn">book new</a>
		   </div>
		</div>
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
	<script src="{{ asset('DNStudio') }}/js/script.js"></script>


</body>   
</html>