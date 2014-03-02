

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="Martin O'Leary travels back to Ireland to take ownership of his recently deceased father's bar" />
<meta name="viewport" content="width=1200, height=device-height" />
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
<title>AFI Presents Son of A Barman</title>

<!--css files-->
<link href="css/colorbox.css"  type="text/css" rel="stylesheet" />
<link href="css/test.css" type="text/css" rel="Stylesheet">
<link href="css/mobile.css" type="text/css" rel="Stylesheet">

<!--js files-->

<script src="js/jquery-1.8.2.min.js"></script>
<script src="js/base.js"></script>
<script src="js/jquery.colorbox-min.js"></script>

<script>
	$(document).ready(function(){  
		//$(".group1").colorbox({rel:'group1', maxWidth:'50%'});
		
		$( '.colorbox' ).live('click',function(e){
        e.preventDefault();
        $(this).colorbox({open:true, maxHeight:'80%'});
    	});
	});
</script>

</head>







<body>
	<div class="headerbar">
        <div class="navbar">       
            <div class="menuitem"><a href="/">home</a></div>
            <div class="menuitem"><a href="video">video</a></div>
            <div class="menuitem"><a href="synopsis">synopsis</a></div>
            <div class="menuitem"><a href="team">team</a></div>
            <div class="menuitem"> <a href="cast">cast</a></div>
            <div class="menuitem current_page_item"><a href="updates">updates</a></div>
            <div class="menuitem"><a href="contribute">contribute</a></div>
            <div class="menuitem"><a href="afi">afi</a></div>
            <span class="stretcher"></span>         
        </div>
    </div>
	 <div id="blog">
    	<div class="inner">
        	<hr class="doublestyle" />
        	<h1>UPDATES</h1>
            
            <hr class="doublestyle" />
            <div class="colleft">
                <p class="animate-in" data-animation="fly-in-right">
                	Follow along on our filming adventure.  We will be posting excerpts, short videos, and pictures of the whole process.
                	        	
				</p>	
                	
				<?php
                require('blog/wp-blog-header.php');
                ?>
                
                <?php
                global $post;
                $args = array( 'posts_per_page' => 5 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) :	
                setup_postdata($post); ?>
                <div class="endtitle"></div>
                <h2><a target="_blank" class="blogtitle" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
                <h3  class="animate-in" data-animation="space-in"><?php the_date(); echo "<br />"; ?></h3>
                <?php add_image_size( 'mycustomsize', 330, 250, true ); ?>
                <p><center><?php the_post_thumbnail('full');?></center></p>			
				
                <p>test:
                	<?php
						$theid = $post->ID;
						print $theid;
					
					
					?>
                <p>
                <?php 
					$strippe = strip_shortcodes($post->post_content);
					$strippe = apply_filters('the_content', $strippe);
					$strippe = str_replace(']]>', ']]&gt;', $strippe);
					print $strippe;
				?>             
                </p>
                
                <p>
               	<?php					
					foreach( get_post_gallery_images() as $image ) :	
						$fileType = substr($image, -3, 3);
						if ($fileType == 'jpg') {								
							$thumbnail = '<img class="wpgallery" src="' . $image . '"/>';								
							$largeimage = '<a class="colorbox" href="' . substr($image, 0, strlen($str)-12) . '.jpg">' . $thumbnail . '</a>';
							print $largeimage;	
						}
					endforeach;			
				?>
                </p>
                
                
                
                
                
                <p class="gray"><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
                
                <?php
                endforeach;
                ?>
                

            </div>
            
            <div class="colright">
            
            <!--
                <article class="sec" id="blogflipper">
                    <div class="blog-post flip-container">
                        <div class="flipper">
                            <div class="face front">
                                <a href="http://www.tony-tran.com/blog" target="_blank" style="background-image:url(img/blog_entry.jpg);"></a>
                                <div class="description">
                                    <h3>Follow us on our film making journey</h3>
                                                                       
                                </div>
                            </div>
                            <div class="face back">
                                <div class="outer">
                                    <div class="inner">
                                        <p class="content">Keep Updated <span>On our film.</span></p>
                                    </div>
                                </div>
                                <a href="http://www.tony-tran.com/blog/" class="overlay-link" target="_blank">Read the Blog</a>
                                <center><img src="img/mouse-pointer-hi.png" height="50px" /></center>
                            </div>
                        </div>
                    </div>           
                </article>-->
                <a class="twitter-timeline" href="https://twitter.com/sonofabarman" data-widget-id="357365371130499072">Tweets by @sonofabarman</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

                
            </div> <!--right-->
            
        </div><!--inner-->
        
		<div class="footer">
       		<div class="wrapper"> 	
                <div class="fourcol-one">
                	<h1>Contact</h1>
                	<p>E: info@sonofabarman.com</p>
                    
            	</div>              
                <div class="fourcol-one" style="border-left:1px solid white;">
                	<h1 style="width: 70%; margin: 0 auto;">Location</h1>
                    <address style="width: 70%; margin: 10px auto 0px;">Son Of A Barman<br />
                              C/O American Film Institute<br />
                              2021 N. Western Avenue<br />
                              Los Angeles, CA 90027
                    </address>
            	</div>
                 <div class="fourcol-one" style="border-left:1px solid white;">	
                	<div class="buttonspan" style="width:70%; margin:10% auto 0 auto;">
                    <a class="button" href="https://support.afi.com/thesis1314" target="_blank" style="margin-top:0;">CONTRIBUTE</a>
                  
                	</div>	
            	</div>
                <div class="fourcol-one-last" style="border-left:1px solid white;">
                	<h1 style="width: 70%; margin: 0 auto;">FOLLOW US!</h1>
                    <ul id="social">
                    <li class="fb">
                        <a target="_blank" href="https://www.facebook.com/sonofabarman">Facebook</a>	
                    </li>    
                    <li class="twitter">
                        <a target="_blank" href="https://twitter.com/sonofabarman">Twitter</a>	
                    </li>       
                </ul> 
            	</div>	
        	</div>
        </div><!--footer-->
        <div class="copyright">
        	<span >COPYRIGHT 2013 ©SONOFABARMAN.COM. ALL RIGHTS RESERVED.</span>
        </div>
        <a href="#" class="go-top white">Top</a>
    </div>
	



</body>
</html>
