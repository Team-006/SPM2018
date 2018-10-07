<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
// use DB;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Http\Request;
use App\Http\Util;

class UsersController extends Controller
{
    //

    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function insert(Request $req){
        $usertype=$req->input('userType');
		$email=$req->input('email');
        $password=$req->input('password');
        $name = $req->input('name');
        $valid= false;
        $res= 'invalid';
        $date=date("Y-m-d H:i:s");
        if($usertype == 1){
            $studentId=$req->input('studentId');

            // $student = DB::table('tbl_students')->select('StudentID')
            //  ->where(['StudentID', '=', $studentId]) ->first();
$student = DB::select("SELECT StudentID From tbl_students WHERE StudentID = $studentId");
             if ($student[0]->StudentID == $studentId ){
                 $valid = true;
             }else{
                $valid= false;
             }
        }

        if($usertype == 2){
            $verification=$req->input('verification');
            // $supervisor = DB::table('tbl_supervisors')->select('reg_token')
            // ->where(['supervisor_email', '=', $email]) ->first();
            $student = DB::select("SELECT reg_token From tbl_supervisors WHERE supervisor_email = $email");

            if($supervisor[0]->reg_token == $verification){
                $valid= true;
            }else{
                $valid= false;
            }
        }

        if($valid){
            
                $data= array('name'=>$name, 'user_type'=> $usertype,'email'=> $email, 'password'=>$password, 'remember_token' =>'hO8cAl7mqv35EM6IbGyYNN8UN6HYJ7n9vg7RVLVi5RJXGMjUgVe9pP0gqxwM' ,
                'created_at' =>$date, 'updated_at' =>$date);

         $success = DB::table('users')->insert($data);

         if(!empty($success)){
            $res = 'valid';
         }
        }else{
            $res= 'invalid';
        }
		
        // $studentId=$req->input('studentId');
        
    }

    function checkuser(){
        $username = $_GET['usernames'];
		$password = $_GET['password'];
		
		$user  = DB::table('users')
        ->where('name',$username)
        ->first();

        $pass="incorrect";

        if(!empty($user)) {
           

	if($password== $user->password){
       
                session()->put('userid', $user->id);
                session()->put('usertypeid', $user->user_type);
         
                session()->put('lifetime', 120);

                $pass = "correct";



            } else {
                $pass = "incorrect";
            }
        }
        else{
            $pass = "incorrect";

        }//       echo $pass;
//        exit();
		return $pass;
            
	

    }
}
