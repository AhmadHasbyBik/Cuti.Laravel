<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;
use App\Models\Employee;
use App\Models\Spd;
use PhpOffice\PhpWord\TemplateProcessor;

class SpdController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Spd::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        }
        else{
    	   $data = Spd::paginate(5);
        }
    	return view('spd/datapegawaispd',compact('data'));
        
    }

    public function tambahspd()
    {
        $datae = Employee::all();
    	return view('spd/tambahdataspd', compact('datae'));
    }

    public function insertdataspd(Request $request)
    {
    	//dd($request->all());
    	$data = Spd::create($request->all());
    	return redirect()->route('spd')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandataspd($id)
    {
    	$data = Spd::find($id);
    	return view('spd/tampildataspd', compact('data'));
    }

    public function updatespd(Request $request)
    {
        if ($request->ajax()) {
            Spd::find($request->pk)->update([
                $request->name => $request->value
            ]);
            return response()->json(['success' => true]);
        }
    }

    public function updatedataspd(Request $request, $id)
    {
    	$data = Spd::find($id);
    	$data->update($request->all());
    	return redirect()->route('spd')->with('success','Data Berhasil Di Update');
    }

    public function deletespd($id)
    {
    	$datae = Spd::find($id);
    	$datae->delete();
        return redirect()->route('spd')->with('success','Data Berhasil Di Hapus');
     }

     public function wordExportspd($id)
     {
         $data = Spd::findOrFail($id);
         $templateProcessor = new TemplateProcessor('word/spd.docx');
         $templateProcessor->setValue('id', $data->id);
         $templateProcessor->setValue('nama', $data->nama);
         $templateProcessor->setValue('nip', $data->nip);
         $templateProcessor->setValue('no_srt', $data->no_srt);
         $templateProcessor->setValue('pangkat', $data->pangkat);
         $templateProcessor->setValue('jabatan', $data->jabatan);
         $templateProcessor->setValue('tingkat_biaya', $data->tingkat_biaya);
         $templateProcessor->setValue('perjalanan_dinas', $data->perjalanan_dinas);
         $templateProcessor->setValue('kendaraan', $data->kendaraan);
         $templateProcessor->setValue('tempat_berangkat', $data->tempat_berangkat);
         $templateProcessor->setValue('tempat_tujuan', $data->tempat_tujuan);
         $templateProcessor->setValue('lama_perjalanan', $data->lama_perjalanan);
         $templateProcessor->setValue('tgl_berangkat', $data->tgl_berangkat->format('d/m/Y'));
         $templateProcessor->setValue('tgl_kembali', $data->tgl_kembali->format('d/m/Y'));
         $templateProcessor->setValue('created_at', $data->created_at->format('d/m/Y'));
         $templateProcessor->setValue('instansi', $data->instansi);
         $templateProcessor->setValue('kode_rekening', $data->kode_rekening);
         $templateProcessor->setValue('keterangan_lain', $data->keterangan_lain);
         $fileName = $data->nama;
         $templateProcessor->saveAs($fileName . '.docx');
         return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
     }
}
