<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmployeeImport;
use App\Exports\EmployeeExport;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')){
            $data = Employee::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        }
        else{
    	   $data = Employee::paginate(5);
        }
    	return view('pegawai/datapegawai',compact('data'));
        
    }

    public function tambahpegawai()
    {
    	return view('pegawai/tambahdata');
    }

    public function insertdata(Request $request)
    {
    	//dd($request->all());
    	$data = Employee::create($request->all());
    	if($request->hasFile('foto')){
    		$request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
    		$data->foto = $request->file('foto')->getClientOriginalName();
    		$data->save();
    	}
    	return redirect()->route('pegawai')->with('success','Data Berhasil Di Tambahkan');
    }

    public function tampilkandata($id)
    {
    	$data = Employee::find($id);
    	return view('pegawai/tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {
    	$data = Employee::find($id);
    	$data->update($request->all());
    	return redirect()->route('pegawai')->with('success','Data Berhasil Di Update');
    }
    
    public function update(Request $request)
    {
        if ($request->ajax()) {
            Employee::find($request->pk)->update([
                $request->name => $request->value
            ]);
            return response()->json(['success' => true]);
        }
    }

    public function delete($id)
    {
    	$data = Employee::find($id);
    	$data->delete();
    	return redirect()->route('pegawai')->with('success','Data Berhasil Di Hapus');
    }

    public function exportpdf()
    {
        $data = Employee::all();
        view()->share('data', $data);
        $pdf = PDF::loadview('pegawai/datapegawai-pdf');  
        return $pdf->download('data.pdf');
    }

    public function exportexcel()
    {
        return Excel::download(new EmployeeExport, 'data.xlsx');
    }

    public function importexcel(Request $request)
    {
        $data = $request->file('file');

        $namafile = $data->getClientOriginalName();
        $data->move('EmployeeData', $namafile);

        Excel::import(new EmployeeImport, \public_path('/EmployeeData/'.$namafile));
        return \redirect()->back();
    }
}
