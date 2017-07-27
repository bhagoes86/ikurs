<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruangan;

class ruanganController extends Controller
{
  // function function untuk ruangan

  public function index() {

    $ruangan_list = Ruangan::all();
    $ruangan_count = $ruangan_list->count();
    $ruangan_page = Ruangan::orderBy('nama_ruangan', 'asc')->paginate(5);

    return view('ruangan.index', compact('ruangan_list', 'ruangan_count', 'ruangan_page'));
  }

  public function tambah() {
    $ruangan_list = Ruangan::all();
    $ruangan_count = $ruangan_list->count();
    return view('ruangan.tambah', compact('ruangan_count'));
  }

  public function store(Request $request) {
    Ruangan::create([
      'id_card' =>$request->id_card,
      'nama_ruangan' =>$request->nama_ruangan,
    ]);
    return redirect('ruangan');
  }

  public function edit ($id) {
    $ruangan_list = Ruangan::all();
    $ruangan_count = $ruangan_list->count();
    $ruangan_limit = Ruangan::orderBy('id', 'desc')->simplePaginate(5);

    $ruangan = Ruangan::findOrFail($id);
    return view('ruangan.edit', compact('ruangan','ruangan_list', 'ruangan_limit', 'ruangan_count'));

  }

  public function update($id, Request $request) {
    $ruangan = Ruangan::findOrFail($id);
    $ruangan->update($request->all());
    return redirect('ruangan');
  }

  public function delete($id) {
    $ruangan = Ruangan::findOrFail($id);
    $ruangan->delete();
    return redirect('ruangan');
  }
}
