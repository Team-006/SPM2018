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
       

        $section->addText('Employer\'s Name',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Employer\'s Name', array('color' => '555555'));


        $section->addText('Employer\'s Address',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Employer\'s Address', array('color' => '555555'));


        $section->addText('Supervisor\'s Name',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Supervisor\'s Name', array('color' => '555555'));


        $section->addText('Supervisor\'s Phone No',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Supervisor\'s Phone No', array('color' => '555555'));


        $section->addText('Intership Start Date',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Intership Start Date', array('color' => '555555'));


        $section->addText('Intership End Date',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Intership End Date', array('color' => '555555'));


        $section->addText('Supervisor\'s Title',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Supervisor\'s Title', array('color' => '555555'));


        $section->addText('Supervisor\'s E-mail',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('Supervisor\'s E-mail', array('color' => '555555'));


        $section->addText('No of Hours/Week',array('bold' => true));
        $textbox = $section->addTextBox(

            array(
        
                'alignment'   => \PhpOffice\PhpWord\SimpleType\Jc::LEFT,
        
                'width'       => 200,
        
                'height'      => 20,
        
                'borderSize'  => 1,
        
                'borderColor' => '#000000',
            )
        );
        $textbox->addText('No of Hours/Week', array('color' => '555555'));


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
