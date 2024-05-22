<?php
get_header();
?>
<?php
if(isset($_POST['submit-confirm']) && ($_POST['submit-confirm'] == 'submit-confirm')) {

    $field1 = isset($_POST['field1']) ? $_POST['field1']: '';
    $field2_1 = isset($_POST['field2_1']) ? $_POST['field2_1']: '';
    $field2_2 = isset($_POST['field2_2']) ? $_POST['field2_2']: '';
    $field3 = isset($_POST['field3']) ? $_POST['field3']: '';
    $field4 = isset($_POST['field4']) ? $_POST['field4']: '';
    $field5 = isset($_POST['field5']) ? $_POST['field5']: '';
    $field5 = isset($_POST['field6']) ? $_POST['field6']: '';
    
    $to      = 'prgfinal216@gmail.com';

    $message = "
    お問い合わせ種別 : ".$field1."<br>
    お名前 : ".$field2_1.$field2_2."<br>
    会社名 : ".$field3."<br>
    メールアドレス : ".$field4."<br>
    電話番号 : ".$field5."<br>
    お問い合わせ内容 : <br>".$field6."<br>
    ";

    $subject = 'お問い合わせがありました';

    $headers = "From: " . $field4 . "\r\n";
    $headers .= "Reply-To: " . $field4 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
      echo '<script>location.href="'.home_url().'/success"</script>';
    } else {
      echo '<script>location.href="'.home_url().'/failed"</script>';
    }
}
?>
<!-- CONTAIN_START -->
<section id="contain">    	        
    <div class="banner_block_rp" style="background:url(<?php echo get_stylesheet_directory_uri(); ?>/images/banner_2.png) no-repeat center center; background-size:cover;">             
        <div class="container">
            <div class="row">
                <div class="col banner_block_in_rp">                    	
                    <div class="banner_middle_rp"> 
                        <div class="banner_top_rp">                            	
                            <div class="banner_title_rp">
                                <h3>Product</h3>
                                <p>QBIT handles a variety of robot products, <br>including arm robot solutions.</p>
                            </div>
                        </div>
                        <div class="banner_boxes_rp">
                            <div class="banner_box_rp">
                                <div class="banner_box_in_rp">
                                    <div class="banner_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_box_img1.png" alt="" /></a>
                                    </div>
                                    <div class="banner_box_title_rp">
                                    Cafe Robot Package
                                    </div>
                                    <div class="banner_box_btn_rp">
                                        <a href="#caferobot" class="common_btn_hp">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_box_rp">
                                <div class="banner_box_in_rp">
                                    <div class="banner_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_box_img2.png" alt="" /></a>
                                    </div>
                                    <div class="banner_box_title_rp">
                                    Delivery Robot DR1
                                    </div>
                                    <div class="banner_box_btn_rp">
                                        <a href="#deliveryrobot" class="common_btn_hp">See More <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common_btn_icon.svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>		     
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="robot_block_rp" id="caferobot">             
        <div class="container">
            <div class="row">
                <div class="col robot_block_in_rp">                    	
                    <div class="robot_middle_rp"> 
                        <div class="robot_top_rp">
                            <div class="robot_imgpart_rp">
                                <div class="robot_img1_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/robot_img_1.png" alt="" /></a>
                                </div>
                                <div class="robot_img2_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_box_img1.png" alt="" /></a>
                                </div>
                            </div>                            	
                        </div>
                        <div class="robot_bottom_rp">
                            <div class="robot_title_rp">
                            Cafe Robot Package
                            </div>
                            <div class="robot_info_rp">    
                            A cafe package that uses an arm robot. We made a robot-specific housing (KIOSK type). The enclosure incorporates the necessary infrastructure such as water supply and drainage, power supply, and network, and the system is manufactured at the factory and transported to the installation site. If you install it as it is, you can easily open a robot cafe.
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="hard_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col hard_block_in_rp">                    	
                    <div class="hard_middle_rp"> 
                        <div class="hard_top_rp">
                            <div class="hard_boxes_rp">
                                <div class="hard_box_rp">
                                    <div class="hard_box_left_rp">
                                        <div class="hard_left_digit_rp">
                                            01
                                        </div>
                                        <div class="hard_left_info_rp">
                                            <h4>Talk, dance, work hard</h4>
                                            <p>An all-in-one package KIOSK type cafe where robots loved by customers work. The robot acts as a clerk to attract customers, serve customers, make drinks, and serve them to customers. Hospitality using talking, facial expressions, and gestures. You will grow every day while learning to be attentive, attentive, and worried. We will deliver a complete set of combined operations such as robots, cafe machines, service counters, etc. as parts.
By shortening the assembly and adjustment time, we have made it possible for professional staff to set up stores easily and quickly. We will provide a centralized maintenance service at the dedicated inquiry window.</p>
                                        </div>
                                    </div>
                                    <div class="hard_box_right_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_1.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="hard_box_rp hard_box_reverse_rp">
                                    <div class="hard_box_left_rp">
                                        <div class="hard_left_digit_rp">
                                            02
                                        </div>
                                        <div class="hard_left_info_rp">
                                            <h4>Offer menu</h4>
                                            <p>Operates two drip machines, an espresso machine, a grinder and an ice dispenser to support various drink menus. Coffee is freshly ground and brewed, and beans are ground and served for each order. You can make 20 cups of drip coffee and 30 cups of latte per hour.
</p>
                                        </div>
                                        <div class="hard_left_bottom_rp">
                                            <div class="hard_bottom_in_rp">
                                                <div class="hard_bottom_title_rp">
                                                Offered menu
                                                </div>
                                                <div class="hard_bottom_links_rp">
                                                    <ul>
                                                        <li>Drip coffee</li>
                                                        <li>Ice latte</li>
                                                        <li>Ice coffee</li>
                                                        <li>Matcha latte</li>
                                                        <li>Cafe latte </li>
                                                        <li>Other cafe machine compatible menu</li>
                                                    </ul>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                                    <div class="hard_box_right_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_2.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="hard_box_rp hard_box_change_rp">
                                    <div class="hard_box_left_rp">
                                        <div class="hard_left_digit_rp">
                                            03
                                        </div>
                                        <div class="hard_left_info_rp">
                                            <h4>In such a scene</h4>
                                            <p>Add futuristic fun to busy places such as shopping centers and food courts.
Revitalize idle spaces such as office towers and event halls.
Providing a valuable relaxing space for people coming and going, such as train stations and airports.</p>
                                        </div>
                                    </div>
                                    <div class="hard_box_right_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_3.png" alt="" /></a>
                                    </div>
                                </div>
                                <div class="hard_box_rp hard_box_reverse_rp">
                                    <div class="hard_box_left_rp">
                                        <div class="hard_left_digit_rp">
                                            04
                                        </div>
                                        <div class="hard_left_info_rp">
                                            <h4>Main installation requirements</h4>
                                        </div>
                                        <div class="hard_left_bottom_rp hard_box_pd_rp">
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                External
                                                </div>
                                                <div class="hard_row_right_rp">
                                                 dimensions Width 2.4 mx Depth 2.4 mx Height 2.4 m

                                                </div>
                                            </div>
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                Total weight
                                                </div>
                                                <div class="hard_row_right_rp">
                                                about 670kg
                                                </div>
                                            </div>
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                Power supply
                                                </div>
                                                <div class="hard_row_right_rp">
                                                Single-phase 200V 3000W 3 circuits and single-phase 100V 1500W 3 circuits or single-phase 200V 3-wire 12000W (direct distribution board)
                                                </div>
                                            </div>
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                Water supply 
                                                </div>
                                                <div class="hard_row_right_rp">
                                                drainage Water supply pipe (ball tap 13A), drainage pipe (40φ PVC pipe)     
                                                </div>
                                            </div>
                                            <div class="hard_bottom_row_rp">
                                                <div class="hard_row_left_rp">
                                                communication
                                                </div>
                                                <div class="hard_row_right_rp">
                                                Internet connection line   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hard_box_right_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_4.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>                        	
                        </div>
                        <div class="video_obj">
                            <video class="video_tag" data-type="mp4" src="<?php echo get_stylesheet_directory_uri(); ?>/images/caferobot.mp4"></video>
                            <div class="video_button" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/hard_img_5.png);">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/video_icon.svg">
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="robot_block_rp robot_block_change_rp" id="deliveryrobot">             
        <div class="container">
            <div class="row">
                <div class="col robot_block_in_rp">                    	
                    <div class="robot_middle_rp"> 
                        <div class="robot_top_rp">
                            <div class="robot_imgpart_rp">
                                <div class="robot_img1_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/robot_img_2.png" alt="" /></a>
                                </div>
                                <div class="robot_img2_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/banner_box_img2.png" alt="" /></a>
                                </div>
                            </div>                            	
                        </div>
                        <div class="robot_bottom_rp">
                            <div class="robot_title_rp">
                            Delivery Robot DR1
                            </div>
                            <div class="robot_info_rp">    
                            DR1 is an autonomous delivery robot.

In 2021, we conducted a demonstration experiment of a "robotic in-house delivery and pickup service" using a commercially available food delivery robot and other robots.

From the experience of the demonstration experiment

We want to deliver packages more safely.

"We want to deliver packages more safely" and "We want to deliver packages in batches to improve delivery efficiency.

We have now planned, developed, and marketed a delivery robot that can fulfill these needs.
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="door_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col door_block_in_rp">                    	
                    <div class="door_middle_rp"> 
                        <div class="door_top_rp">
                            <div class="door_title_rp">
                            Features of ​DR1
                            </div>
                            <div class="door_boxes_rp">
                                <div class="door_box_rp">
                                    <div class="door_box_digit_rp">
                                        01
                                    </div>
                                    <div class="door_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/door_img_1.png" alt="" /></a>
                                    </div>
                                    <div class="door_box_info_rp">
                                        <h3>2 containers</h3>
                                        <p>In order to increase the efficiency of delivery, we carry two containers. You can deliver to two locations in one delivery. (It is also possible to increase the number of containers)</p>
                                    </div>
                                </div>
                                <div class="door_box_rp">
                                    <div class="door_box_digit_rp">
                                        02
                                    </div>
                                    <div class="door_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/door_img_2.png" alt="" /></a>
                                    </div>
                                    <div class="door_box_info_rp">
                                        <h3>with automatic door</h3>
                                        <p>We deliver hygienically and safely in a container with a door.

It also has a password function, so it can be securely delivered to the person himself/herself.</p>
                                    </div>
                                </div>
                                <div class="door_box_rp">
                                    <div class="door_box_digit_rp">
                                        03
                                    </div>
                                    <div class="door_box_img_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/door_img_3.png" alt="" /></a>
                                    </div>
                                    <div class="door_box_info_rp">
                                        <h3>Elevator linkage</h3>
                                        <p>Equipped with an elevator boarding/alighting mode. Interlocking with other peripheral devices such as security automatic doors and PBX is also possible.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="scene_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col scene_block_in_rp">                    	
                    <div class="scene_middle_rp"> 
                        <div class="scene_top_rp">
                            <div class="door_title_rp">
                            Use scene
                            </div>
                            <div class="scene_boxes_rp">
                                <div class="scene_box_rp">
                                    <div class="scene_left_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scene_img_1.png" alt="" /></a>
                                    </div>
                                    <div class="scene_right_rp">
                                        <div class="scene_right_info_rp">
                                            <h3>High-rise apartment</h3>
                                            <p>You don't have to go to the delivery lockers to pick up your parcels if you let DR1 handle your condominium deliveries. Deliveries such as Uber Eats do not require face-to-face contact with the delivery person, allowing you to protect your privacy.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scene_box_rp scene_box_reverse_rp">
                                    <div class="scene_left_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scene_img_2.png" alt="" /></a>
                                    </div>
                                    <div class="scene_right_rp">
                                        <div class="scene_right_info_rp">
                                            <h3>​office</h3>
                                            <p>DR1 has multiple containers. Efficient delivery within the office by transporting a large number of packages at once.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="scene_box_rp">
                                    <div class="scene_left_rp">
                                        <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/scene_img_3.png" alt="" /></a>
                                    </div>
                                    <div class="scene_right_rp">
                                        <div class="scene_right_info_rp scene_box_width_rp">
                                            <h3>karaoke</h3>
                                            <p>DR1 is about 50 cm wide. Please leave delivery and serving in narrow aisles to us. The door also has a lock, so you can safely carry it to a distant room.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="flow_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col flow_block_in_rp">                    	
                    <div class="flow_middle_rp"> 
                        <div class="flow_top_rp">
                            <div class="door_title_rp">
                            Introduction flow
                            </div>
                            <div class="flow_boxes_rp">
                                <div class="flow_box_rp">
                                    <div class="flow_box_in_rp">
                                        <div class="flow_box_digit_rp">
                                            01
                                        </div>
                                        <div class="flow_box_title_rp">
                                            お問い合わせ 
                                        </div>
                                        <div class="flow_box_img_rp">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_icon_1.svg" alt="" /></a>
                                        </div>
                                        <div class="flow_box_info_rp">
                                            フォーム入力で 簡単1分でお申込み 
                                        </div>
                                    </div>
                                </div>
                                <div class="flow_box_rp">
                                    <div class="flow_box_in_rp">
                                        <div class="flow_box_digit_rp">
                                            02
                                        </div>
                                        <div class="flow_box_title_rp">
                                            ヒアリング・提案 
                                        </div>
                                        <div class="flow_box_img_rp">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_icon_2.svg" alt="" /></a>
                                        </div>
                                        <div class="flow_box_info_rp">
                                            ご要望を伺います 活用プランと御見積を 提案いたします  
                                        </div>
                                    </div>
                                </div>
                                <div class="flow_box_rp">
                                    <div class="flow_box_in_rp">
                                        <div class="flow_box_digit_rp">
                                            03
                                        </div>
                                        <div class="flow_box_title_rp">
                                            ご注文
                                        </div>
                                        <div class="flow_box_img_rp">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_icon_3.svg" alt="" /></a>
                                        </div>
                                        <div class="flow_box_info_rp">
                                            ご注文をいただき 製造工程に進みます （納期2 -3か月程度） 
                                        </div>
                                    </div>
                                </div>
                                <div class="flow_box_rp">
                                    <div class="flow_box_in_rp">
                                        <div class="flow_box_digit_rp">
                                            04
                                        </div>
                                        <div class="flow_box_title_rp">
                                            納品  
                                        </div>
                                        <div class="flow_box_img_rp">
                                            <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/flow_icon_4.svg" alt="" /></a>
                                        </div>
                                        <div class="flow_box_info_rp">
                                            現地に納品 初期設定とユーザー様へ のトレーニングを実施します  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="load_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col load_block_in_rp">                    	
                    <div class="load_middle_rp"> 
                        <div class="load_top_rp">
                            <div class="door_title_rp">
                            Product Specifications
                            </div>
                            <div class="load_leftright_rp">
                                <div class="load_left_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/load_img.png" alt="" /></a>
                                </div>
                                <div class="load_right_rp">
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Size:
                                        </div>
                                        <div class="load_row_right_rp">
                                        width 504 x height 1200
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Maximum loading weight:
                                        </div>
                                        <div class="load_row_right_rp">
                                        up to 40kg
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Direction of movement:
                                        </div>
                                        <div class="load_row_right_rp">
                                        360 degrees
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Movement speed:
                                        </div>
                                        <div class="load_row_right_rp">
                                        1m/s (maximum 1.2m/s)
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Charging time:
                                        </div>
                                        <div class="load_row_right_rp">
                                        5 hours
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Continuous operation time:
                                        </div>
                                        <div class="load_row_right_rp">
                                        7 hours (with 40kg load)
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Sensor:
                                        </div>
                                        <div class="load_row_right_rp">
                                        laser distance sensor, RGB-D camera,
Ultrasonic distance sensor 6-axis motion sensor
Infrared sensor, anti-collision sensor
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Climbing ability: 
                                        </div>
                                        <div class="load_row_right_rp">
                                        10° or less possible
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Step: 
                                        </div>
                                        <div class="load_row_right_rp">
                                        18mm or less possible
                                        </div>
                                    </div>
                                    <div class="load_row_rp">
                                        <div class="load_row_left_rp">
                                        Warranty period:
                                        </div>
                                        <div class="load_row_right_rp">
                                        6 months after purchase
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="know_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col know_block_in_rp">                    	
                    <div class="know_middle_rp"> 
                        <div class="know_top_rp">
                            <div class="know_left_rp">
                                <div class="door_title_rp">
                                Please let us know your request
                                </div>
                                <div class="know_info_rp">
                                    <p>・Consultation on lease contracts is also available</p>
                                    <p>・The following changes are possible</p>
                                    <p>- body color</p>
                                    <p>- Change from container type to tray type</p>
                                    <p>- number of containers</p>
                                </div>
                            </div>
                            <div class="know_right_rp">
                                <div class="know_right_img_rp">
                                    <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/know_img.png" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>
    <div class="contact_block_rp">             
        <div class="container">
            <div class="row">
                <div class="col contact_block_in_rp">                    	
                    <div class="contact_middle_rp"> 
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="contact_top_rp">
                                <div class="door_title_rp">
                                ​Request a quote
                                </div>
                                <div class="contact_info_rp">
                                ​ Please feel free to contact us. We will get back to you as soon as possible.
                                </div>
                                <div class="contact_form_rp">
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">お問い合わせ種別<span>*</span></div>
                                        <div class="form-field-input-cop form-field-radio-row-cop form-field-radio-row-2-cop">
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">配送ロボット
                                                        <input type="radio" checked="checked" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">配膳ロボット
                                                        <input type="radio" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">カフェロボット
                                                        <input type="radio" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">ロボット導入のご相談
                                                        <input type="radio" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-radio-cp">
                                                <div class="form-field-radio-cp">
                                                    <label class="radio-container-cp">その他
                                                        <input type="radio" name="inquiry1">
                                                        <span class="checkmark-cp"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form_input_main_cop">
                                            <div class="form_input_in_cop">
                                                <div class="form-field-lable-cop">姓<span>*</span></div> 
                                                <div class="form-field-input-cop"><input type="text" placeholder="" name="field2_1" required></div>
                                            </div> 
                                            <div class="form_input_in_cop">   
                                                <div class="form-field-lable-cop">名<span> *</span></div>    
                                                <div class="form-field-input-cop"><input type="text" placeholder="" name="field2_1" required></div>
                                            </div>
                                        </div>    
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">会社名<span>*</span></div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="" name="field3" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">メールアドレス<span>*</span></div>
                                        <div class="form-field-input-cop">
                                            <input type="email" placeholder="" name="field4" required>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">電話番号</div>
                                        <div class="form-field-input-cop">
                                            <input type="text" placeholder="" name="field5">                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="form-field-cop">
                                        <div class="form-field-lable-cop">お問い合わせ内容</div>
                                        <div class="form-field-input-cop">
                                            <textarea type="text" placeholder="" name="field6"></textarea>                                        
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="contact_btn_rp">
                                    <input type="hidden" name="submit-confirm" value="submit-confirm">
                                    <button type="submit">送 信</button>
                                </div>
                            </div>
                        </form>
                    </div>                                               
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>            
        <div class="clearfix"></div>
    </div>  
</section>
<!-- CONTAIN_END -->
<?php
get_footer();
