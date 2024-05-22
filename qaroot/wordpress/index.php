<!DOCTYPE html>
<html lang="en">
<?php $qa_type = "code"; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Wordpress Code</title>
    <link rel="stylesheet" href="../style.css">
    <script src="../js/jquery-3.6.1.js"></script>
    <script src="../js/mark.js"></script>
</head>
<?php
    function wrap_tag_open() {
        global $qa_type;
        return $qa_type=="text"?"<p>":"<pre>";
    }
    function wrap_tag_close() {
        global $qa_type;
        return $qa_type=="text"?"</p>":"</pre>";
    }
    function delete_all_between($beginning, $end, $string) {
        $beginningPos = strpos($string, $beginning);
        $endPos = strpos($string, $end);
        if ($beginningPos === false || $endPos === false) {
          return $string;
        }
      
        $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);
      
        return delete_all_between($beginning, $end, str_replace($textToDelete, '', $string)); // recursion to ensure all occurrences are replaced
    }
    function get_subtitle_pairs($candidate) {
        $chars = str_split($candidate);
        $subPairs = [];
        for($i=0;$i<count($chars);$i++) {
            if($i>=3 && $chars[$i-3] == '-' && $chars[$i-2] == '-' && $chars[$i-1] == '-' && $chars[$i] != '-') {
                
                if(count($subPairs) > 0) {
                    $lastPair = $subPairs[count($subPairs)-1];
                    if($lastPair[0] >= 0 && $lastPair[1] >= 0) {
                        $lastPair = [$i, -1];
                        array_push($subPairs, $lastPair);
                    }
                    else {
                        $lastPair[0] = $i;
                    }
                } 
                else {
                    $lastPair = [$i, -1];
                    array_push($subPairs, $lastPair);
                }
            }
            if($i < count($chars)-3 && $chars[$i] != '-' && $chars[$i+1] == '-' && $chars[$i+2] == '-' && $chars[$i+3] == '-') {
                
                if(count($subPairs) > 0) {
                    $eId = count($subPairs)-1;
                    if($subPairs[$eId][0] >= 0 && $subPairs[$eId][1] < 0) {
                        $subPairs[$eId][1] = $i;
                    }
                }
            }
        }
        $res = [];
        foreach($subPairs as $subPair) {
            if($subPair[0] >= 0 && $subPair[1] >= 0) {
                array_push($res, $subPair);
            } 
        }
        return $res;
    }
    $all_lines = [];
    if($qa_type == "text") {
        $qa_files = [
            'qa-wordpress.txt',
        ];
    }
    else {
        $qa_files = [
            'qa-wordpress.txt',
        ];
    
    }
    function get_all_lines($file_handle) { 
        while (!feof($file_handle)) {
            yield fgets($file_handle);
        }
    }
    foreach($qa_files as $qa_file) {
        $file_handle = fopen($qa_file, 'r');
        foreach (get_all_lines($file_handle) as $line) {
            // array_push($all_lines, $line);
            $line = str_replace("</ending>","", $line);
            if(strpos($line, "<hitle>") !== false){
                array_push($all_lines,  delete_all_between("<starting>","</heading>",preg_replace( "/\r|\n|\t/", "", $line)));
            }
            else {
                array_push($all_lines,  delete_all_between("<starting>","</heading>",preg_replace( "/\r|\n/", "", $line)));
            }
        }
        fclose($file_handle);
    }
?>
<script>
<?php
    $starting = [];
    $count = 0;
    echo "var heading_list = [";
    foreach ($all_lines as $line) {
        $starting = explode("<hitle>",$line);
        if(count($starting)>1) {
            if(count($starting)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $count = $count+1;
            $title = explode("<chare>", $starting[1]); //0=data-binding expression language, 1=1	<pext>
            if(count($title)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $chare = explode("<pext>", $title[1]);
            echo "'".strtolower($title[0])."',";
        }
    }
    echo "];";
?>
</script>
<body>
<?php
// echo '<code>';
// foreach ($all_lines as $line) {
//     $line = str_replace("</ending>",'',$line);
//     echo $line;
// }
// echo '</code>';
// exit;
?>
    <div class="top_search"><span class="top_result">/</span><input type="text" id="top_input" name="top_input"><input type="text" id="second_input" name="second_input" readonly></div>
    <div class="side_heading">
    <div class="opt_words">
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="switch_heading" data-disable="false"></span>
    </div>
    <div class="ul_headings">
        <ul class="ul_heading">
<?php
    $starting = [];
    $count = 0;
    foreach ($all_lines as $line) {
        $starting = explode("<hitle>",$line);
        if(count($starting)>1) {
            if(count($starting)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $count = $count+1;
            $title = explode("<chare>", $starting[1]); //0=data-binding expression language, 1=1	<pext>
            if(count($title)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $chare = explode("<pext>", $title[1]);
            if(count($chare)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            echo "<li class='left_title' data-id='".$count."' data-chare='".$chare[0]."'>".$title[0]."</li>";
        }
    }
    function get_chare_sign($chare_val) {
        if($chare_val == 2) return "⠴";
        if($chare_val == 3) return "…";
        if($chare_val == 4) return "»";
        return "";
    }
?>   
        </ul>  
        <ul class="ur_heading" style="display:none">
<?php
    $starting = [];
    $count = 0;
    $last_chare = 1;
    foreach ($all_lines as $line) {
        $starting = explode("<hitle>",$line);
        $subtitle_candiate = $line;
        if(count($starting)>1) {
            if(count($starting)<2) { echo '<div class="php_error">hitle-start오유발견:'.$line.'</div>';exit; }
            $count = $count+1;
            $title = explode("<chare>", $starting[1]); //0=data-binding expression language, 1=1	<pext>
            if(count($title)<2) { echo '<div class="php_error">chare-start오유발견:'.$line.'</div>';exit; }
            $chare = explode("<pext>", $title[1]);
            if(count($chare)<2) { echo '<div class="php_error">pext-start오유발견:'.$line.'</div>';exit; }
            echo "<li class='right_title' data-id='".$count."' data-chare='".$chare[0]."'>".$title[0]."</li>";
            $subtitle_candiate = $chare[1];
            $last_chare = intval($chare[0]);
        }
        $subPairs = get_subtitle_pairs($subtitle_candiate);
        foreach($subPairs as $subPair) {
            $count = $count+1;
            $sub_title = substr($subtitle_candiate, $subPair[0], $subPair[1]-$subPair[0]+1);
            echo "<li class='right_title' data-id='".$count."' data-chare='".($last_chare + 1)."'>".$sub_title."</li>";
        }
    }
?>   
        </ul>  
        </div>   
    </div>
    <div class="main_content">
        <!-- <div class="content_scroll"> -->
<?php
    function get_html_text($text) {
        $result = $text;
        // $result = preg_replace( "/</", "&#60;", $text );
        // $result = preg_replace( "/>/", "&#62;", $result );
        // $result = preg_replace( "/\"/", "&#62;", $result );
        // $result = str_replace(
        //     array("<", ">", "\"\"", "  ", "\t"), 
        //     array("&#60;","&#62;", "\"", "&nbsp;&nbsp;", "&nbsp;&nbsp;"), 
        //     $result);
        $result = str_replace(
            array("<", ">",), 
            array("&#60;","&#62;",), 
            $result);
        // if(substr($text, 0, 1) == " ") return "&nbsp;".$result;
        return $result;
    }
    $starting = [];
    $count = 0;
    foreach ($all_lines as $line) { //<hitle>	data-binding expression language	<chare>	1	<pext>
        $starting = explode("<hitle>",$line); // 0="",1= data-binding expression language	<chare>	1	<pext>
        if(count($starting)>1) {
            if(count($starting)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $count = $count+1;
            $title = explode("<chare>", $starting[1]); //0=data-binding expression language, 1=1	<pext>
            if(count($title)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $chare = explode("<pext>", $title[1]);
            echo "<div class='content_item' data-id='".$count."'>";
            if(count($title)>1) {
                echo "<h3>".$title[0]."</h3>";
            }
            echo wrap_tag_open();
            if(count($chare)>1 && !empty($chare[1])) {
                $ending = explode("</end>",$chare[1]);
                if(count($ending)>1) {
                    echo get_html_text($ending[0]).wrap_tag_close()."</div>";
                }
                else {
                    echo get_html_text($chare[1])."<br>";
                }
            }
        }
        else{
            $ending = explode("</end>",$line);
            if(count($ending)>1) {
                echo get_html_text($ending[0]).wrap_tag_close()."</div>";
            }
            else {
                echo get_html_text($line)."<br>";
            }
        }
    }
?>
        <!-- </div> -->
    </div>
</body>
<script src="../js/control.js"></script>
</html>