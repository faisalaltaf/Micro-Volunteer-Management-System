<?php 
use App\Models\User;

if(!function_exists('p')){
    function p($data){
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}
if(!function_exists('get_formatted_date')){
    function get_formatted_date($data,$formate){
       $formatted_date = date($formate,strtotime($data));

    //    to paramter pass get_formatted_date($customer->date, 'd-M-Y');
       return $formatted_date;
    }
}
if(!function_exists('top_bar_get_image')){
    function top_bar_get_image($id){
        
        $id = $id;
        $top_image = User::where('id', $id)->first();
        
        $top_image = $top_image->file;
       
    //    to paramter pass get_formatted_date($customer->date, 'd-M-Y');
       return $top_image;
    }
}
?>