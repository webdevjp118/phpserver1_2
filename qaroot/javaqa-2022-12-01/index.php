<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>NEW QA</title>
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<?php
    $all_lines = [];
    $qa_files = [
        'qa-new.txt',
        // 'qa-android.txt',
        // 'qa-java.txt',
        // 'qa-kotlin.txt',
        // 'qa-pattern.txt',
        // 'qa-jetpack.txt',
        // 'qa-rxjava.txt',
        // 'qa-thirdparty.txt',
        // 'qa-material.txt',
    ];
    function get_all_lines($file_handle) { 
        while (!feof($file_handle)) {
            yield fgets($file_handle);
        }
    }
    foreach($qa_files as $qa_file) {
        $file_handle = fopen($qa_file, 'r');
        foreach (get_all_lines($file_handle) as $line) {
            // array_push($all_lines, $line);
            array_push($all_lines, preg_replace( "/\r|\n|\t/", "", $line ));
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
            $title = explode("<chare>", $starting[1]); //0=data-binding expression language, 1=1	<pext>	<starting>data-binding expression language</heading>
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
    <div class="top_search"><span class="top_result">/</span><input type="text" id="top_input" name="top_input"></div>
    <div class="side_heading">
    <div class="opt_words">
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
        <span class="opt_word" data-disable="false"></span>
    </div>
    <ul class="ul_heading">
<?php
    $starting = [];
    $count = 0;
    foreach ($all_lines as $line) {
        $starting = explode("<hitle>",$line);
        if(count($starting)>1) {
            if(count($starting)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $count = $count+1;
            $title = explode("<chare>", $starting[1]); //0=data-binding expression language, 1=1	<pext>	<starting>data-binding expression language</heading>
            if(count($title)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $chare = explode("<pext>", $title[1]);
            if(count($chare)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            echo "<li class='left_title' data-id='heading".$count."' data-chare='".$chare[0]."'>".$title[0]."</li>";
        }
    }
?>   
        </ul>     
    </div>
    <div class="main_content">
        <!-- <div class="content_scroll"> -->
<?php
    function get_html_text($text) {
        $result = $text;
        // $result = preg_replace( "/</", "&#60;", $text );
        // $result = preg_replace( "/>/", "&#62;", $result );
        // $result = preg_replace( "/\"/", "&#62;", $result );
        $result = str_replace(
            array("</ending>", "<", ">", "\"\"", "  ",), 
            array("", "&#60;","&#62;", "\"", "&nbsp;&nbsp;"), 
            $result);
        if(substr($text, 0, 1) == " ") return "&nbsp;".$result;
        return $result;
    }
    $starting = [];
    $count = 0;
    foreach ($all_lines as $line) { //<hitle>	data-binding expression language	<chare>	1	<pext>	<starting>data-binding expression language</heading>
        $starting = explode("<hitle>",$line); // 0="",1= data-binding expression language	<chare>	1	<pext>	<starting>data-binding expression language</heading>
        if(count($starting)>1) {
            if(count($starting)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $count = $count+1;
            $title = explode("<chare>", $starting[1]); //0=data-binding expression language, 1=1	<pext>	<starting>data-binding expression language</heading>
            if(count($title)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $chare = explode("<pext>", $title[1]);
            echo "<div class='content_item' data-id='heading".$count."'>";
            if(count($title)>1) {
                echo "<h3>".$title[0]."</h3>";
            }
            echo "<p>";
            if(count($title)>1) {
                if(!strpos($title[1], '<starting>') && !strpos($title[1], '</heading>') && !empty($title[1])) 
                    echo get_html_text($title[1])."<br>";
            }
        }
        else{
            $ending = explode("</end>",$line);
            if(count($ending)>1) {
                echo get_html_text($ending[0])."</p></div>";
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
<script src="js/control.js"></script>
</html>