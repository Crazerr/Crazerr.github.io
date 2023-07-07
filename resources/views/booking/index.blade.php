<!-- resources/views/booking/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
</head>
<body>
    <div class="container">
        <h1 class="text-center my-5">Daftar Booking</h1>

        <table class="table table-striped table-hover border border-3 p-3">
            <thead>
                <tr>
                    
                    <th>Tanggal Booking</th>
                    <th>Waktu Booking</th>
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

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
