<!-- waktu.blade.php -->
<html>
<head>
    <title>Waktu Booking Tersedia</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Waktu Booking Tersedia</h1>
        <ul>
            @foreach($waktuBookingTersedia as $waktuBooking)
                <li>{{ $waktuBooking }}</li>
            @endforeach
        </ul>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>