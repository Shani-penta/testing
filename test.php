<div class="container-fluid banner test">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-slider equal-height">
            <div class="row">
                <div id="container" class="cf">
                    <div id="main" role="main">
                        <section class="slider">
                            <div class="flexslider">
                                <ul class="slides">
                          <?php $loop = new WP_Query( array( 'post_type' => 'banner', 'posts_per_page' => -1, 'order' => 'DESC') );   
                                while ( $loop->have_posts() ) : $loop->the_post();  
                                if (has_post_thumbnail() ) 
                                $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );  ?>
                                    <li> <img src="<?php echo $feat_image_url; ?>" /> </li>
                                <?php endwhile;wp_reset_query(); ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
		
		<?php //echo do_shortcode('[do_widget "home_left_1"]'); ?>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 right-slider equal-height">
            <div class="row">
                <div id="wrapper">
                    <div class="slider-wrapper theme-default">
                      <div id="slider2" class="nivoSlider"> 
                    <?php $loop = new WP_Query( array( 'post_type' => 'sub_banner', 'posts_per_page' => -1, 'order' => 'ASC') );   
                          while ( $loop->have_posts() ) : $loop->the_post();  
                          if (has_post_thumbnail() ) 
                          $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );  ?>
                          <img src="<?php echo $feat_image_url; ?>"/> 
                             <?php endwhile;wp_reset_query(); ?>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<div class="container-fluid content-area prod_section">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 project-intro">
				<div class="side"><?php dynamic_sidebar( 'home_left_1' ); ?></div>
				
						
				<div class="butt">	
				<button type="button" class="modal-but" onclick="myFunction()" data-toggle="modal" data-target="#myModal">Click me.</button>
                <div id="myModal" class="modal new-modal">
                    <div class="modal-content">
                        <!-- <span class="close modal-close">&times;</span> -->
                        <button type="button" class="close modal-close" data-dismiss="modal">&times;</button>

                        <p id="demo"></p>
                    </div>
                </div>
                </div>
						
						
<ul class="social">
	<?php //$link = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; 
	     $link = site_url();
         $encodelink = urlencode($link);
		 $pageName = basename($_SERVER['PHP_SELF']);
		  ?>
      <li class="animated fadeInUpShort" data-id='2'><a href="http://www.facebook.com/sharer.php?u=<?php echo $encodelink; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
        </a></li>
      <li class="animated fadeInUpShort" data-id='3'><a href="http://twitter.com/share?text=<?php echo $pageName; ?>&url=<?php echo $link; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>
        </a></li>
      <li class="animated fadeInUpShort" data-id='4'>
	  <a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site <?php echo $link; ?>.">
      <i class="fa fa-envelope" aria-hidden="true"></i>
      </a></li>
      <li class="animated fadeInUpShort" data-id='4'><a href="https://api.whatsapp.com/send?text=<?php echo $encodelink; ?>" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>
      </a></li>
</ul>

                    <h2><?php echo CFS()->get('about_title');?></h2> <img src="<?php echo CFS()->get('about_image');?>" alt="project" class="img-responsive">
                    <?php echo CFS()->get('about_content');?>
                    <a href="profile.html">
                        <button type="button" class="btn btn-default">Read More</button>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 special-pro">
                    <h2><?php echo CFS()->get('special_product_title');?></h2>
                    <ul class="list-group">
                        <li class="list-group-item"><a href="paving-stones.html">Paving Stones</a></li>
                        <li class="list-group-item"><a href="Surface-Treatments.html">Surface Treatments</a></li>
                        <li class="list-group-item"><a href="paving-tiles.html">Paving Tiles</a></li>
                        <li class="list-group-item"><a href="planters.html">Planters</a></li>
                        <li class="list-group-item"><a href="Building-blocks.html">Building Blocks</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 news-events">
                    <h2><?php echo CFS()->get('certificate');?></h2> <img src="<?php echo CFS()->get('certificate_image');?>" class="certi01">
                    <h4 class="sub_head"><?php echo CFS()->get('news_title');?></h4>
                    <div class="panel">
                        <div class="panel-body">
                            <ul id="demo3" style="min-height:99px !important;">
                    <?php $loop = new WP_Query( array( 'post_type' => 'news', 'posts_per_page' => -1, 'order' => 'ASC') );   
                                    while ( $loop->have_posts() ) : $loop->the_post();  
                                    if (has_post_thumbnail() ) 
                                    $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); 
                                    $date = get_post_meta( get_the_ID(), 'news_date', true );  
                                    $month = get_post_meta( get_the_ID(), 'news_month', true );   ?>
                                <li class="news-item">
                                    <div class="date"> <span class="day"><?php echo $date; ?></span> <span class="month"><?php echo $month; ?></span> </div>
                                    <p><?php the_content(); ?></p><a href="#">More</a> 
                                </li>
                                <?php endwhile;wp_reset_query(); ?>

                                <!-- <li class="news-item">
                                    <div class="date"> <span class="day">01</span> <span class="month">09</span> </div>
                                    <p>Pasco is a manufacturer of precast concrete Pasco products. Pasco was established inPasco is Pasco was established inPasco is...</p><a href="#">More</a> </li>
                                <li class="news-item">
                                    <div class="date"> <span class="day">15</span> <span class="month">10</span> </div>
                                    <p>Pasco is a manufacturer of precast concrete Pasco products. Pasco was established inPasco is Pasco was established inPasco is...</p><a href="#">More</a> </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer quick-action">
    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 details">
                    <div class="thumb-box"> 
                        
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 29.735 29.735" style="enable-background:new 0 0 29.735 29.735;" xml:space="preserve" width="512px" height="512px" class=""><g><g>
                                    <g>
                                        <path d="M23.895,29.733c-1.237,0-2.731-0.31-4.373-0.929c-3.603-1.359-7.521-4.043-11.035-7.557    C4.973,17.733,2.289,13.814,0.93,10.21C-0.307,6.935-0.31,4.247,0.92,3.017c0.178-0.178,0.359-0.368,0.545-0.563    c1.123-1.18,2.422-2.521,4.073-2.448c1.16,0.048,2.283,0.768,3.435,2.198c3.396,4.225,1.865,5.731,0.093,7.477L8.752,9.991    c-0.29,0.29-0.839,1.632,4.26,6.73c1.666,1.665,3.084,2.883,4.217,3.62c0.715,0.464,1.991,1.164,2.514,0.641l0.315-0.318    c1.744-1.77,3.25-3.296,7.474,0.099c1.431,1.15,2.15,2.273,2.198,3.434c0.069,1.682-1.271,2.954-2.453,4.076    c-0.194,0.185-0.384,0.364-0.56,0.54C26.103,29.426,25.127,29.733,23.895,29.733z M5.419,1.002c-1.194,0-2.274,1.136-3.229,2.14    C1.997,3.344,1.81,3.541,1.627,3.724C0.711,4.639,0.805,7.047,1.865,9.858c1.31,3.473,3.913,7.267,7.329,10.683    s7.209,6.018,10.681,7.328c2.811,1.061,5.219,1.153,6.135,0.236c0.183-0.182,0.378-0.368,0.578-0.558    c1.028-0.977,2.193-2.083,2.143-3.311c-0.035-0.843-0.649-1.75-1.826-2.695c-3.52-2.828-4.503-1.828-6.135-0.176l-0.32,0.323    c-0.777,0.781-2.044,0.61-3.766-0.51c-1.19-0.774-2.664-2.037-4.379-3.751l0,0c-4.231-4.231-5.585-6.819-4.26-8.145l0.319-0.316    c1.658-1.632,2.658-2.617-0.171-6.137C7.247,1.654,6.34,1.04,5.497,1.004C5.471,1.003,5.444,1.002,5.419,1.002z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                    </g>
                                    <g>
                                        <path d="M24.07,12.29c-0.063,0-0.126-0.012-0.188-0.037c-0.256-0.104-0.38-0.395-0.275-0.65c0.636-1.568,0.272-3.355-0.924-4.552    c-1.229-1.229-3.118-1.57-4.703-0.858c-0.249,0.113-0.548,0.003-0.661-0.249c-0.114-0.252-0.003-0.548,0.249-0.661    c1.961-0.888,4.3-0.461,5.822,1.062c1.481,1.481,1.93,3.692,1.143,5.634C24.455,12.171,24.267,12.29,24.07,12.29z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                        <path d="M28.534,14.102c-0.063,0-0.126-0.012-0.188-0.037c-0.257-0.104-0.38-0.395-0.275-0.65    c1.365-3.367,0.588-7.202-1.981-9.771c-2.638-2.638-6.695-3.378-10.095-1.841c-0.252,0.11-0.548,0.002-0.662-0.25    C15.22,1.3,15.331,1.004,15.583,0.89c3.777-1.706,8.283-0.885,11.214,2.046c2.854,2.854,3.718,7.114,2.2,10.854    C28.919,13.984,28.731,14.102,28.534,14.102z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                    </g>
                                </g></g> </svg>
                    
                    
                    </div>
                    <h5>Call us</h5>
                    <p><?php echo of_get_option('phone');?></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 details">
                    <div class="thumb-box"> <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" width="512px" height="512px" class=""><g><g>
                            <g>
                                <path d="M362.937,0h-294c-16.542,0-30,13.458-30,30v102c0,5.523,4.478,10,10,10s10-4.477,10-10V30c0-5.514,4.486-10,10-10h294    c5.514,0,10,4.486,10,10v372c0,5.514-4.486,10-10,10h-294c-5.514,0-10-4.486-10-10V216.333c0-5.523-4.478-10-10-10    s-10,4.477-10,10V402c0,16.542,13.458,30,30,30h294c16.542,0,30-13.458,30-30V30C392.937,13.458,379.479,0,362.937,0z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M56.006,169.7c-1.859-1.86-4.439-2.92-7.069-2.92s-5.21,1.06-7.07,2.92c-1.861,1.87-2.93,4.45-2.93,7.07    c0,2.64,1.07,5.21,2.93,7.08c1.86,1.86,4.44,2.93,7.07,2.93c2.629,0,5.209-1.07,7.069-2.93c1.861-1.86,2.931-4.44,2.931-7.08    C58.937,174.14,57.866,171.57,56.006,169.7z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M96.066,454.99c-1.86-1.86-4.429-2.93-7.07-2.93c-2.63,0-5.21,1.07-7.069,2.93c-1.861,1.86-2.931,4.44-2.931,7.07    c0,2.64,1.071,5.21,2.931,7.07c1.859,1.87,4.439,2.93,7.069,2.93c2.641,0,5.21-1.06,7.07-2.93c1.861-1.86,2.93-4.43,2.93-7.07    C98.996,459.43,97.926,456.85,96.066,454.99z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M423,40.063c-5.522,0-10,4.477-10,10v392c0,5.514-4.486,10-10,10H129c-5.522,0-10,4.477-10,10s4.478,10,10,10h274    c16.542,0,30-13.458,30-30v-392C433,44.54,428.522,40.063,423,40.063z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M463.063,80c-5.522,0-10,4.477-10,10v392c0,5.514-4.486,10-10,10h-314c-5.522,0-10,4.477-10,10s4.478,10,10,10h314    c16.542,0,30-13.458,30-30V90C473.063,84.477,468.585,80,463.063,80z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M200.937,74h-96c-5.522,0-10,4.477-10,10v96c0,5.523,4.478,10,10,10h96c5.522,0,10-4.477,10-10V84    C210.937,78.477,206.459,74,200.937,74z M190.937,170h-76V94h76V170z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M168.761,235.402c-3.906-3.904-10.236-3.905-14.143,0l-26.583,26.583l-12.36-12.361c-3.905-3.905-10.235-3.904-14.143,0    c-3.905,3.905-3.905,10.237,0,14.142l19.432,19.432c1.876,1.875,4.419,2.929,7.071,2.929c2.653,0,5.195-1.054,7.072-2.929    l33.654-33.654C172.666,245.639,172.666,239.307,168.761,235.402z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M332.604,249H215.937c-5.522,0-10,4.477-10,10s4.478,10,10,10h116.667c5.522,0,10-4.477,10-10S338.126,249,332.604,249z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M326.937,74h-70c-5.522,0-10,4.477-10,10s4.478,10,10,10h70c5.522,0,10-4.477,10-10S332.459,74,326.937,74z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M326.937,122h-70c-5.522,0-10,4.477-10,10s4.478,10,10,10h70c5.522,0,10-4.477,10-10S332.459,122,326.937,122z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M326.937,170h-70c-5.522,0-10,4.477-10,10s4.478,10,10,10h70c5.522,0,10-4.477,10-10S332.459,170,326.937,170z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M168.761,311.769c-3.906-3.904-10.236-3.905-14.143,0l-26.583,26.583l-12.36-12.361c-3.905-3.905-10.235-3.904-14.143,0    c-3.905,3.905-3.905,10.237,0,14.142l19.432,19.432c1.876,1.875,4.419,2.929,7.071,2.929c2.653,0,5.195-1.054,7.072-2.929    l33.654-33.654C172.666,322.006,172.666,315.674,168.761,311.769z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g><g>
                            <g>
                                <path d="M332.604,325H215.937c-5.522,0-10,4.477-10,10s4.478,10,10,10h116.667c5.522,0,10-4.477,10-10S338.126,325,332.604,325z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                            </g>
                        </g></g> </svg> </div>
                    <h5>company brochure</h5> <a href="<?php echo of_get_option('company_brochure');?>" target="_blank"> Download brochure</a> </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 details">
                    <div class="thumb-box"> 
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 483.3 483.3" style="enable-background:new 0 0 483.3 483.3;" xml:space="preserve" width="512px" height="512px" class=""><g><g>
                                    <g>
                                        <path d="M424.3,57.75H59.1c-32.6,0-59.1,26.5-59.1,59.1v249.6c0,32.6,26.5,59.1,59.1,59.1h365.1c32.6,0,59.1-26.5,59.1-59.1    v-249.5C483.4,84.35,456.9,57.75,424.3,57.75z M456.4,366.45c0,17.7-14.4,32.1-32.1,32.1H59.1c-17.7,0-32.1-14.4-32.1-32.1v-249.5    c0-17.7,14.4-32.1,32.1-32.1h365.1c17.7,0,32.1,14.4,32.1,32.1v249.5H456.4z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                        <path d="M304.8,238.55l118.2-106c5.5-5,6-13.5,1-19.1c-5-5.5-13.5-6-19.1-1l-163,146.3l-31.8-28.4c-0.1-0.1-0.2-0.2-0.2-0.3    c-0.7-0.7-1.4-1.3-2.2-1.9L78.3,112.35c-5.6-5-14.1-4.5-19.1,1.1c-5,5.6-4.5,14.1,1.1,19.1l119.6,106.9L60.8,350.95    c-5.4,5.1-5.7,13.6-0.6,19.1c2.7,2.8,6.3,4.3,9.9,4.3c3.3,0,6.6-1.2,9.2-3.6l120.9-113.1l32.8,29.3c2.6,2.3,5.8,3.4,9,3.4    c3.2,0,6.5-1.2,9-3.5l33.7-30.2l120.2,114.2c2.6,2.5,6,3.7,9.3,3.7c3.6,0,7.1-1.4,9.8-4.2c5.1-5.4,4.9-14-0.5-19.1L304.8,238.55z" data-original="#000000" class="active-path" data-old_color="#000000" fill="#FFFFFF"/>
                                    </g>
                                </g></g> </svg>
                         </div>
                    <h5>Email</h5>
                    <p><a href="mailto:<?php echo of_get_option('email');?>"><?php echo of_get_option('email');?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>