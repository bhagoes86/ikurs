<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kursus;

class kursusController extends Controller
{
    // function function untuk kursus

    public function index() {

      $kursus_list = Kursus::all();
      $kursus_count = $kursus_list->count();
      $kursus_page = Kursus::orderBy('nama_kursus', 'asc')->paginate(5);

      $kursuss = Kursus::all('nama_kursus', 'biaya');

      return view('kursus.index', compact('kursus_list', 'kursus_count', 'kursus_page', 'kursuss'));
    }

    public function tambah() {
      $kursus_list = Kursus::all();
      $kursus_count = $kursus_list->count();
      return view('kursus.tambah', compact('kursus_count'));
    }

    public function store(Request $request) {
      Kursus::create([
        'nama_kursus' =>$request->nama_kursus,
        'biaya' =>$request->biaya,
      ]);
      return redirect('kursus');
    }

    public function edit ($id) {
      $kursus_list = Kursus::all();
      $kursus_count = $kursus_list->count();
      $kursus_limit = Kursus::orderBy('id', 'desc')->simplePaginate(5);

      $kursus = Kursus::findOrFail($id);
      return view('kursus.edit', compact('kursus','kursus_list', 'kursus_limit', 'kursus_count'));

    }

    public function update($id, Request $request) {
      $kursus = Kursus::findOrFail($id);
      $kursus->update($request->all());
      return redirect('kursus');
    }

    public function delete($id) {
      $kursus = Kursus::findOrFail($id);
      $kursus->delete();
      return redirect('kursus');
    }

    public function selectAjax($id) {

      $kursus_id = Input::get('kursus_id');
      $kursus_biaya = Kursus::where('id', '=', $kursus_id)->get();
      return $kursus_biaya;

      /*
      if($id==0) {
        $kursus_list = Kursus::all();
      } else {
        $kursus_list = Kursus::where('id', '=', $id)->get();
      }
      return $kursus_list;
      */
    }


}
