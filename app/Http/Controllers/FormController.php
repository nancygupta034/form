<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use DataTables;

class FormController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Form::all();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
          
        return view('forms.list');
    }

    public function addForm(Request $request) {
        
        $formData = $request->except(['_token', 'formTitle', 'formBgColor']);
        $formCreated = Form::create([
            'title' => $request->get('formTitle'), 
            'background_color' => $request->get('formBgColor'), 
            'data' => json_encode($formData)
        ]);
        if($formCreated) {
            return response()->json(['message' => 'Data saved successfully', 'success' => true]); 
        }
        else {
            return response()->json(['message' => 'Error while submitting data', 'success' => false]); 
        }
    }

}
