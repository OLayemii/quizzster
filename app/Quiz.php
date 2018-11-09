<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Quiz extends Model
{
    public function csv_to_array($filename='', $quizid, $delimiter=','){
        if(!file_exists($filename) || !is_readable($filename))
            return FALSE;
        $header = NULL;
        $data = array();
        if (($handle = fopen($filename, 'r')) !== FALSE)
        {
            while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
            {
                if(!$header){
                    $header = $row;
                    $header[] = 'quizid';
                }else{
                    $row['quizid'] = $quizid;
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }
        
        return $data;
    }


    public function upload_quiz($path, $quizid){
        $data = $this->csv_to_array($path, $quizid);
        print_r($data);
        DB::table('questions')->insert($data);
    }


    public function create_quiz($data){
        DB::table('quizzes')->insert($data);
    }
}