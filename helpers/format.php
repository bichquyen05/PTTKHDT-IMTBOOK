<?php
/**
 * Format Class
 */
class Format{
    public function formatDate($date){
        return date('F,Y,g:i a', strtotime($date));
    }

    public function textShorten($text, $limit=400){
        $text=$text." ";
        $text=substr($text, 0, $limit);
        $text=substr($text, 0, strpos($text,' '));
        $text=$text.".....";
        return $text;
    }

    public function validation($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }

    public function title(){
        $path=$_SERVER['SCRIPT_FILENAME'];
        $title=basename($path, '.php');
        // $title=str_replace('_,'',$title);
        if($title==='index'){
            $title='home';
        }else if($title==='contact'){
            $title='contact';
        }
        return $title=ucfirst($title);
    }
}

?>