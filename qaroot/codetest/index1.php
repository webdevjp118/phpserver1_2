<!DOCTYPE html>
<html lang="en">
<?php $qa_type = "code"; ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title><?php echo $qa_type=="text"?"Android QA":"Code Test"; ?></title>
    <link rel="stylesheet" href="../style.css">
    <script src="../js/jquery-3.6.1.js"></script>
    <script src="../js/mark.js"></script>
</head>
<?php
    function wrap_tag_open() {
        global $qa_type;
        return $qa_type=="text"?"<p>":"<code>";
    }
    function wrap_tag_close() {
        global $qa_type;
        return $qa_type=="text"?"</p>":"</code>";
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
    $all_lines = [];
    if($qa_type == "text") {
        $qa_files = [
            'qa-general.txt',
            'qa-android.txt',
            'qa-java.txt',
            'qa-kotlin.txt',
            'qa-pattern.txt',
            'qa-jetpack.txt',
            'qa-rxjava.txt',
            'qa-thirdparty.txt',
            'qa-material.txt',
            'qa-coroutine.txt',
        ];
    }
    else {
        $qa_files = [
            'codetest.txt',
            'codestyle.txt',
            'android-code.txt'
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
            array_push($all_lines,  delete_all_between("<starting>","</heading>",preg_replace( "/\r|\n|\t/", "", $line)));
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
            $title = explode("<chare>", $starting[1]); //0=data-binding expression language, 1=1	<pext>
            if(count($title)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            $chare = explode("<pext>", $title[1]);
            if(count($chare)<2) { echo '<div class="php_error">오유발견:'.$line.'</div>';exit; }
            echo "<li class='left_title' data-id='".$count."' data-chare='".$chare[0]."'>".$title[0]."</li>";
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
            array("<", ">", "\"\"", "  ",), 
            array("&#60;","&#62;", "\"", "&nbsp;&nbsp;"), 
            $result);
        if(substr($text, 0, 1) == " ") return "&nbsp;".$result;
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
                echo get_html_text($chare[1])."<br>";
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