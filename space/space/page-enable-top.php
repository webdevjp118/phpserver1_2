<?php
if(session_id()) {
    $_SESSION['country_code'] ="kkk";
	$country_code = $_SESSION['country_code'];
	$top_enabled = $_SESSION['top_enabled'];
    echo $country_code;
    echo "<br>";
	if($country_code != "JP") {
		if($top_enabled != 'true') {
            $_SESSION['top_enabled'] = 'true';
            echo "h1<br>";
			wp_redirect(home_url());
			exit;
		} else {
            echo "h2<br>";
            // wp_redirect(home_url());
			// exit;
        }
	} else {
        echo "h3<br>";
        // wp_redirect(home_url());
		// exit;
    }
} else {
    echo "h4<br>";
    // wp_redirect(home_url().'/lp/');
    // exit;
}
?>
