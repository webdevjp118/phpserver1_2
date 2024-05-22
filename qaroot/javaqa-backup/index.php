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
            array_push($all_lines, preg_replace( "/\r|\n/", "", $line ));
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
        $starting = explode("\"<starting>",$line);
        if(count($starting)>1) {
            $count = $count+1;
            echo "'".strtolower(str_replace("</heading>", "", $starting[1]))."',";
        }
    }
    echo "];";
?>
</script>
<body>
<?php
foreach ($all_lines as $line) {
    $line = str_replace("\\t",'',$line);
    echo $line;
}
exit;
?>
    <div class="top_search"><span class="top_result"></span><input type="text" id="top_input" name="top_input"></div>
    <div class="side_heading">
        <input type="text" id="search_input" name="search_input">
        <ul class="ul_heading">
<?php
    $starting = [];
    $count = 0;
    foreach ($all_lines as $line) {
        $starting = explode("\"<starting>",$line);
        if(count($starting)>1) {
            $count = $count+1;
            echo "<li data-id='heading".$count."'>".$starting[1]."</li>";
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
            array("<", ">", "\"\"", "  "), 
            array("&#60;","&#62;", "\"", "&nbsp;&nbsp;" ), 
            $result);
        if(substr($text, 0, 1) == " ") return "&nbsp;".$result;
        return $result;
    }
    $starting = [];
    $count = 0;
    foreach ($all_lines as $line) {
        $starting = explode("\"<starting>",$line);
        if(count($starting)>1) {
            $count = $count+1;
            echo "<div class='content_item' data-id='heading".$count."'><h3>".$starting[1]."</h3><p>";
        }
        else{
            $ending = explode("</ending>\"",$line);
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