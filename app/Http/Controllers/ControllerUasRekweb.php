<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\UasRekweb;
use PhpParser\Builder\Class_;
use Symfony\Component\Mime\Message;
use Symfony\Component\VarDumper\Cloner\Data;

Class ControllerUasRekweb extends Controller
{
    public function create(Request $request)
    {
        $data = $request->all();
        $uasrekweb = UasRekweb::create($data);

        return response()->json($uasrekweb);
    }
    public function index()
    {
        $uasrekweb = UasRekweb::all();
        return response()->json($uasrekweb);
    }
    public function detail($id)
    {
        $uasrekweb = UasRekweb::find($id);
        return response()->json($uasrekweb);
    }
    public function update (Request $request, $id)
    {
        $uasrekweb = UasRekweb::whereId($id)->update([
            'NoPendaftaran' => $request->input('NoPendaftaran'),
            'Nisn' => $request->input('Nisn'),
            'NamaLengkap'     => $request->input('NamaLengkap'),
            'JenisKelamin'     => $request->input('JenisKelamin'),
            'Agama' => $request->input('Agama'),
            'GolonganDarah' => $request->input('GolonganDarah'),
            'NoTelepon' => $request->input('NoTelepon'),
            'Email' => $request->input('Email'),
            'Alamat' => $request->input('Alamat'),
            'TempatLahir' => $request->input('TempatLahir'),
            'TanggalLahir' => $request->input('TanggalLahir'),
            'AsalSekolah' => $request->input('AsalSekolah'),
            'ProgramStudi' => $request->input('ProgramStudi'),
        ]);

        if($uasrekweb){
            return response()->json([
                'success'  => true,
                'message'  => 'Data berhasil di update',
                'data'     => $uasrekweb
            ],201);
        }
        else{
            return response()->json([
                'succes'    => false,
                'message'   =>'Data gagal di update',
            ],400);
        }
    }
    public function delete($id)
    {
        $uasrekweb = UasRekweb::whereId($id)->first();
        $uasrekweb->delete();

        if($uasrekweb)
        {
            return response()->json([
                'succes' => true,
                'message' => 'Data Berhasil Dihapus'
            ],200);
        }
    }
}