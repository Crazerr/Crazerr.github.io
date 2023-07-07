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

			<form method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data">
				@csrf
				<h3>make a reservation</h3>
				   <div class="box">
					  <p>your name <span>*</span></p>
					  <input type="text" id="nama" name="nama" maxlength="100" required placeholder="Enter Your Name " class="box">
				   </div>
				   <div class="box">
					  <p>your email <span>*</span></p>
					  <input type="email" id="email" name="email" maxlength="50" required placeholder="Enter Your Email" class="box">
				   </div>
				   <div class="box">
					  <p>your phone number <span>*</span></p>
					  <input type="text" id="no_telepon" name="no_telepon" maxlength="15" required placeholder="WhatsApp Number" class="box">
				   </div>
				   <div class="box">
					<p>Alamat <span>*</span></p>
					<input type="text" id="alamat" name="alamat" maxlength="100" required placeholder="Enter Your Alamat " class="box">
				 </div>
				   <div class="box">
					  <p>Booking date<span>*</span></p>
					  <input type="date" id="tanggal_booking" name="tanggal_booking" required>
				   </div>
				   <div class="box">
					<p>select package<span>*</span></p>
					<select id="paket" name="paket" required>
						<option value=""> Pilih paket</option>
					   <option value="1"> Paket 1</option>
					   <option value="2">Paket 2</option>
					   <option value="3">Paket 3</option>
					</select>
				 </div>

                 <div class="box">
					<p>select time<span>*</span></p>
					<select id="waktu_booking" name="waktu_booking" required></select>
				 </div>

                 <div class="box">
                    <p>proof of payment<span>*</span></p>
                        <input type="file" id="bukti_pembayaran" name="bukti_pembayaran" required>
                 </div>
				  
				<input  type="submit" class="btn">
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

				function isJson(str) {
					try {
						JSON.parse(str);
					} catch (e) {
						return false;
					}
					return true;
				}
            </script>

		</div>

	</section>
	<!--Booking section end-->

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