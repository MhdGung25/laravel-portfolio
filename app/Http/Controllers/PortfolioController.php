<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of all portfolio projects.
     */
    public function index()
    {
        // Ambil semua proyek urut dari terbaru
        $projects = Portfolio::orderBy('created_at', 'desc')->get();

        // Jika belum ada proyek, tampilkan pesan
        if ($projects->isEmpty()) {
            return view('portfolio.index', [
                'projects' => [],
                'message' => 'Belum ada proyek. Jalankan seeder untuk menambahkan contoh proyek.',
            ]);
        }

        // Tampilkan view dengan data proyek
        return view('portfolio.index', compact('projects'));
    }

    /**
     * Display a single project detail by slug.
     */
    public function show($slug)
    {
        // Cari project berdasarkan slug
        $project = Portfolio::where('slug', $slug)->first();

        // Jika tidak ditemukan, kembalikan ke halaman portfolio
        if (!$project) {
            return redirect('/portfolio')->with('error', 'Proyek tidak ditemukan.');
        }

        // Tampilkan halaman detail proyek
        return view('portfolio.show', compact('project'));
    }
}
