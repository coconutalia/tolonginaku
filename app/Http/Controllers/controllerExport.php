<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use Auth;
use PDF;

class controllerExport extends Controller
{
    public function exportPDF()
    {
        $peminjaman = DB::table('peminjaman')->get();
        //$peminjaman = DB::table('peminjaman')->whereDate("Tanggal","2020-07-09")->get();

        //return view('admin/pdf_peminjaman', compact('peminjaman'));
        $pdf = PDF::loadView('admin/pdf_peminjaman', compact('peminjaman'));
        return $pdf->download('laporan_peminjaman_'.date('Y-m-d_H-i-s').'.pdf');
    }
    public function exportPDF_month()
    {
        //$peminjaman = DB::table('peminjaman')->get();
        $peminjaman = DB::table('peminjaman')->whereMonth("Tanggal",date("m"))->whereYear("Tanggal", date("Y"))->get();

        //return view('admin/pdf_peminjaman', compact('peminjaman'));
        $pdf = PDF::loadView('admin/pdf_peminjaman', compact('peminjaman'));
        return $pdf->download('laporan_peminjaman_'.date('Y-m-d_H-i-s').'.pdf');
    }
    public function exportPDF_year()
    {
        //$peminjaman = DB::table('peminjaman')->get();
        $peminjaman = DB::table('peminjaman')->whereYear("Tanggal", date("Y"))->get();

        //return view('admin/pdf_peminjaman', compact('peminjaman'));
        $pdf = PDF::loadView('admin/pdf_peminjaman', compact('peminjaman'));
        return $pdf->download('laporan_peminjaman_'.date('Y-m-d_H-i-s').'.pdf');
    }
}
