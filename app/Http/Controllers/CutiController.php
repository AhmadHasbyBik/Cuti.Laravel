<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cuti;
use App\Models\Employee;
use PhpOffice\PhpWord\TemplateProcessor;
use Illuminate\Support\Facades\DB;

class CutiController extends Controller
{
    public function index(Request $request)
    {
        // $data = Employee::join('cutis', 'cutis.nip_cuti', '=', 'employees.nip')
        //    ->get(['employees.nama', 'employees.nip', 'employees.jabatan', 'cutis.masakerja', 
        //    'cutis.masakerja', 'cutis.alasancuti', 'cutis.alamatcuti', 'cutis.ttd', 
        //    'cutis.notelepon', 'cutis.tgl_awal', 'cutis.tgl_akhir', 'cutis.approved']);
         
        $datas = DB::table('cutis')
        ->join('employees', 'employees.id', '=', 'cutis.id_employee')
        ->select('employees.jatahcuti', 'cutis.id', 'employees.id')
        ->get();
        // echo var_dump ($datas);
           
        if($request->has('search')){
            $data = Cuti::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        }
        else{
    	   $data = Cuti::paginate(5);
           
        }
    	return view('cuti/datapegawaicuti',compact('data'));
        
    }

    public function tambahcuti()
    {
        $datae = Employee::all();
    	return view('cuti/tambahdatacuti', compact('datae'));
    }

    public function insertdatacuti(Request $request)
    {
        $folderPath = public_path('upload/');
       
        $image_parts = explode(";base64,", $request->ttd);
             
        $image_type_aux = explode("image/", $image_parts[0]);
           
        $image_type = $image_type_aux[1];
           
        $image_base64 = base64_decode($image_parts[1]);
 
        $ttd = uniqid() . '.'.$image_type;
           
        $file = $folderPath . $ttd;
 
        file_put_contents($file, $image_base64);
        

        $save = new Cuti;
        $save->id = $request->id;
        $save->id_employee = $request->id_employee;
        $save->nama = $request->nama;
        $save->nip = $request->nip;
        $save->jabatan = $request->jabatan;
        $save->masakerja = $request->masakerja;
        $save->alasancuti = $request->alasancuti;
        $save->alamatcuti = $request->alamatcuti;
        $save->notelepon = $request->notelepon;
        $save->tgl_awal = $request->tgl_awal;
        $save->tgl_akhir = $request->tgl_akhir;
        $save->ttd = $ttd;
        $save->save();


    	//dd($request->all());
    	//$data = Cuti::create($request->all());
    	
    	return redirect()->route('cuti')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandatacuti($id)
    {
    	$data = Cuti::find($id);
    	return view('cuti/tampildatacuti', compact('data'));
    }

    public function updatecuti(Request $request)
    {
        if ($request->ajax()) {
            Cuti::find($request->pk)->update([
                $request->name => $request->value
            ]);
            return response()->json(['success' => true]);
        }
    }

    public function updatedatacuti(Request $request, $id)
    {
    	$data = Cuti::find($id);
    	$data->update($request->all());
    	return redirect()->route('cuti')->with('success','Data Berhasil Di Update');
    }

    public function deletecuti($id)
    {
    	$datae = Cuti::find($id);
    	$datae->delete();
        return redirect()->route('cuti')->with('success','Data Berhasil Di Hapus');
     }

     public function wordExport($id)
     {
         $data = Cuti::findOrFail($id);
         $templateProcessor = new TemplateProcessor('word/cuti.docx');
         $templateProcessor->setValue('id', $data->id);
         $templateProcessor->setValue('nama', $data->nama);
         $templateProcessor->setValue('nip', $data->nip);
         $templateProcessor->setValue('jabatan', $data->jabatan);
         $templateProcessor->setValue('masakerja', $data->masakerja);
         $templateProcessor->setValue('alasancuti', $data->alasancuti);
         $templateProcessor->setValue('alamatcuti', $data->alamatcuti);
         $templateProcessor->setValue('notelepon', $data->notelepon);
         $templateProcessor->setImageValue('ttd', array('path' => "upload/{$data->ttd}", 'width' => 150, 'height' => 100, 'ratio' => false));
         $templateProcessor->setValue('tgl_awal', $data->tgl_awal->format('d/m/Y'));
         $templateProcessor->setValue('tgl_akhir', $data->tgl_akhir->format('d/m/Y'));
         $fileName = $data->nama;
         $templateProcessor->saveAs($fileName . '.docx');
         return response()->download($fileName . '.docx')->deleteFileAfterSend(true);
     }

     public function approved($id)
     {
         $data = Cuti::findOrFail($id);
         $data->approved = true;
         $data->save();

         $this->updatejatahcuti($data->id_employee, $data->masakerja);
         return redirect()->route('cuti')->with('success', 'Item approved successfully');
     }

     public function updatejatahcuti($id_employee, $masakerja)
     {
         $data = Employee::find($id_employee);
         $data->jatahcuti = $data->jatahcuti - $masakerja;
        
         $data->save();
        //echo var_dump($data->jatahcuti);
     }

     public function getDetails($id = 0)
     {
         $data = Employee::where('id', $id)->first();
         return response()->json($data);
     }
}
