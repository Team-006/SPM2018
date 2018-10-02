<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\Style\TablePosition;
use PhpOffice\PhpWord\Element\TextRun;



class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_i_1');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        
        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $section = $phpWord->addSection();
        $header = array('size' => 16, 'bold' => true);
        // $textrun = $section->addTextRun();

        $section ->addText('Filled By The Student',$header);
        $section->addTextBreak(2);

        $section ->addText('Student ID No :',array('bold' => true));
        $section->addText($request->get('inputStudenId'));
        //$textrun ->addText($section->addText($request->get('inputStudenId')));
        
        $section ->addText('Student Name :',array('bold' => true));
        $text = $section->addText($request->get('inputName'));

        $section ->addText('Address :',array('bold' => true));
        $text = $section->addText($request->get('address'));

        $section ->addText('Home Phone No :',array('bold' => true));
        $text = $section->addText($request->get('homephone'));

        $section ->addText('Mobile Phone No :',array('bold' => true));
        $text = $section->addText($request->get('mobilephone'));


        $section ->addText('E-mail Address :',array('bold' => true));
        $text = $section->addText($request->get('email'));


        $section ->addText('Semester :',array('bold' => true));
        $text = $section->addText($request->get('semester'));


        $section ->addText('Year :',array('bold' => true));
        $text = $section->addText($request->get('year'));


        $section ->addText('CGPA :',array('bold' => true));
        $text = $section->addText($request->get('cgpa'));

        $section->addTextBreak(3);

        $section ->addText('To Be Filled By The Employer',$header);
        $section->addTextBreak(2);
                
        //$textrun = $section->addTextRun(array('alignment' => \PhpOffice\PhpWord\SimpleType\Jc::CENTER));

        //$textrun->addText('Employer\'s Name');
        $paragraphStyleName = 'pStyle';
        $phpWord->addParagraphStyle($paragraphStyleName, array('spacing' => 100));
        
        $textrun = $section->addTextRun($paragraphStyleName);
        $textrun->addText('Each textrun can contain native text, link elements or an image.');

        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::CENTER,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Text box content in section.');

        // $header = $section->addHeader();
        // $textbox = $header->addTextBox(array('width' => 600, 'borderSize' => 1, 'borderColor' => '#000000'));
        // $textrun = $textbox->addTextRun();
        // $textrun->addText('TextBox in header. TextBox can contain a TextRun ');

        // $table = $section->addTable(array('borderSize' => 6, 'borderColor' => '999999', 'position' => array('vertAnchor' => TablePosition::VANCHOR_TEXT, 'bottomFromText' => Converter::cmToTwip(1))));

        // $cell = $table->addRow()->addCell();

        // $cell->addText('Student ID No :',$request->get('inputStudenId'));


        
        
       // $section->addImage("./images/Krunal.jpg");  
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('FormI1.docx');
        return response()->download(public_path('FormI1.docx'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
