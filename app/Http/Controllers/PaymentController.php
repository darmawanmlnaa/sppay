<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        return view('payment.offline.index', ['title' => 'Menu Pembayaran']);
    }

    public function studentList()
    {
        $students = Student::all();
        return view('payment.offline.list', ['title' => 'Buat Pembayaran'], compact(['students']));
    }

    public function createOfflinePayment($id)
    {
        $student = Student::find($id);
        return view('payment.offline.pay', ['title' => 'Bayar Tagihan'], compact(['student']));
    }

    public function storeOfflinePayment(Request $request)
    {
        $request->validate([
            'user_id' => ['required'],
            'student_id' => ['required'],
            'payment_type' => ['required'],
            'amount' => ['required'],
            'snap_token' => ['nullable'],
            'payment_status' => ['nullable'],
        ]);

        Payment::create([
            'user_id' => $request->user_id,
            'student_id' => $request->student_id,
            'payment_type' => $request->payment_type,
            'amount' => $request->amount,
            'snap_token' => $request->snap_token,
            'payment_status' => $request->payment_status,
        ]);

        return redirect('/payment/offline')->with('success', 'Pembayaran berhasil silahkan download bukti pembayaran anda!');
    }

    public function studentPaymentDetails($id)
    {
        $student = Student::find($id);
        // $payments = DB::table('payments')->where(function ($query) use ($id) {
        //     $query->where('student_id', '=', $id);
        // })->get();
        // $payments = DB::select('select * from payments where student_id = ?', [$id]);
        $payments = Payment::where('student_id', '=', $id)->get();
        return view('payment.offline.detail', ['title', 'Detail Pembayaran Murid'], compact(['student', 'payments']));
    }

    public function latestPayments()
    {
        $payments = Payment::all()->sortDesc();
        return view('payment.index', ['title' => 'Pembayaran Terbaru'], compact(['payments']));
    }
}
