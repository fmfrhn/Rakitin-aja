<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function history(Request $request)
    {
        // Validasi input
        $request->validate([
            'data_history' => 'required|array',
        ]);

        // Simpan ke database
        foreach ($request->data_history as $historyData) {
            $data = json_decode($historyData, true);

            History::create([
                'user_id' => auth()->id(), // Ambil ID pengguna yang login
                'spesifikasi' => $data['spesifikasi'],
                'image' => $data['image'],
                'price' => $data['price'],
                'link' => $data['link'],
            ]);
        }

        // Redirect ke halaman history
        return redirect()->route('history.page')->with('success', 'Data berhasil disimpan ke history!');
    }


    public function historyPage() {
        $histories = History::where('user_id', auth()->id())->get();
    
        // Periksa apakah history kosong
        if ($histories->isEmpty()) {
            return redirect()->route('homepage')->with('no_history', 'Tidak ada riwayat. Lakukan kuisioner terlebih dahulu!');
        }
    
        // Tampilkan view dengan data history
        return view('history', [
            'histories' => $histories
        ]);
    }
}
