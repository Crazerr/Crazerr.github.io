<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingAdminController extends Controller
{
    public function create()
    {
        // Menampilkan form booking
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'paket' => 'required|in:1,2,3',
            'tanggal_booking' => 'required|date',
            'waktu_booking' => 'required|in:jadwal 1,jadwal 2,jadwal 3,jadwal 4',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Upload bukti pembayaran
        if ($request->hasFile('bukti_pembayaran')) {
            $buktiPembayaran = $request->file('bukti_pembayaran');
            $buktiPembayaranPath = $buktiPembayaran->store('bukti_pembayaran');
            $validatedData['bukti_pembayaran'] = $buktiPembayaranPath;
        }
// dd($validatedData);

        // Simpan data booking
        Booking::create($validatedData);

        return to_route('admin.index')->with('success', 'Data berhasil di Tambah');

    }

    public function getAvailableWaktuBooking(Request $request)
    {
        $tanggalBooking = $request->input('tanggal_booking');

        // Ambil semua waktu booking yang tersedia
        $waktuBookingTersedia = [
            'Pilih Jadwal',
            'jadwal 1',
            'jadwal 2',
            'jadwal 3',
            'jadwal 4',
        ];

        // Cek waktu booking yang sudah dibooking pada tanggal tertentu
        $waktuBookingTerpakai = Booking::where('tanggal_booking', $tanggalBooking)->pluck('waktu_booking')->toArray();

        // Ambil waktu booking yang belum dibooking pada tanggal tertentu
        $waktuBookingTersedia = array_diff($waktuBookingTersedia, $waktuBookingTerpakai);

        return response()->json($waktuBookingTersedia);
    }
    public function index()
    {
        $bookings = Booking::all();

        return view('admin.index', compact('bookings'));
    }

    public function terdaftar()
    {
        $bookings = Booking::all();

        return view('booking.terdaftar', compact('bookings'));
    }

    public function edit($id)
    {
        return view('customer.edit')->with([
            'customer' => Customer::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'no_telepon' => 'required',
            'paket' => 'required|in:1,2,3',
            'tanggal_booking' => 'required|date',
            'waktu_booking' => 'required|in:jadwal 1,jadwal 2,jadwal 3,jadwal 4',
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $booking = Booking::find($id);
        $booking->nama = $request->nama;
        $booking->email = $request->email;
        $booking->alamat = $request->alamat;
        $booking->paket = $request->paket;
        $booking->tanggal_booking = $request->tanggal_booking;
        $booking->bukti_pembayaran = $request->bukti_pembayaran;
        $booking->save();

        return to_route('booking_admin.index')->with('success', 'Data berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();

        return back()->with('success', 'Data berhasil di Hapus');
    }

    public function updatestatus($id, $status)
    {
        $booking = Booking::find($id);
        $booking->status=$status;
        $booking->save();

        return back()->with('success', 'Data berhasil di Terima');
    }

    public function updatestatuslist()
    {
        $bookings = Booking::where('status', 'pending')->orderBy('created_at', 'DESC')->get();

        return view('admin.acc', compact('bookings'));
    }

}
