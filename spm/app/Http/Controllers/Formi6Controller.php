<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Formi6;
use PDF;

class Formi6Controller extends Controller
{
    public function store(Request $request){

        $formi6 = new Formi6([
          'company' => $request->get('company'),
          'project' => $request->get('project'),
          'objectives' => $request->get('objectives'),
          'procedures' => $request->get('procedures'),
          'methodology' => $request->get('methodology'),
          'learning' => $request->get('learning'),
          'measurable_outcome' => $request->get('measurable_outcome'),
          'effectiveness' => $request->get('effectiveness')
        ]);
  
        $formi6->save();
        return redirect('/formi6Details');
      }
      public function index(){
  
        $formi6 = Formi6::all();
  
        return view('formi6Details', compact('formi6'));
      }

      public function downloadPDF($id){
        $formi6 = Formi6::find($id);
  
        $pdf = PDF::loadView('pdf', compact('formi6'));
        return $pdf->download('sample.pdf');
  
      }
}
