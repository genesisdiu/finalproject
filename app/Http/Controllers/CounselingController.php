<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Counseling;
use Auth;
use Exceptions;
Use DB;
use Carbon\Carbon;

class CounselingController extends Controller
{
    

    public function createCounseling(Request $r){
              


        Counseling::create([
            'startTime' => $r['startTime'],
            'endTime' => $r['endTime'],
            'day' => $r['day'],
            'no_student' => $r['no_student'],
            'faculty_id' => $r['user_id'],
        ]);
           $startTime = $r['startTime'];
           $endTime = $r['endTime'];
           $no_student = $r['no_student'];
        self::slotting($startTime , $endTime , $no_student);

        return "success";
     

    }

    public function slotting($startTime ,  $endTime , $no_student)
    
    {  
       $start = strtotime($startTime);
       $end = strtotime($endTime);
       $diff = $end - $start;
       
       $min = $diff / 60;
       $slot = $min / $no_student; 
       $hour = $min / 60;
    
       echo "Total ".$min ." minutes. or".$hour." hour. You can give each student ".number_format($slot, )." miniutes <br>" ;
       $interval = "+".number_format($slot, 0)." minutes";
        echo $interval;
       $next = strtotime("".$interval , strtotime($startTime));
       echo date('h:i a', $next);
        for ($i= 1 ;$i< $no_student; $i++ ) {
       $next = strtotime("".$interval, $next );
       echo date('h:i a', $next);
        }


       

        
    }



}
