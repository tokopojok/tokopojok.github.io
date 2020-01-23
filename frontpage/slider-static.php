<?php
global $complete;  
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
$ImageUrl[] = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg"); 

for($i=1; $i<=10; $i++){
	if(!empty($complete['slide_image'.$i])){
		$imgArr[] = $i;
	}
}
require get_template_directory() . '/frontpage/slider.php';
?>

<section id="home_slider">
  <div class="slider-main">
    <?php if(!empty($imgArr)){ ?>
    <div class="slider-wrapper theme-default">
      <div id="slider" class="nivoSlider">
        <?php
			   foreach($imgArr as $val){
				?>
        <img src="<?php echo $complete['slide_image'.$val]; ?>" data-thumb="<?php echo $complete['slide_image'.$val]; ?>" alt="<?php echo strip_tags($complete['slide_title'.$val]); ?>" title="<?php echo esc_attr('#htmlcaption'.$val) ; ?>" />
        <?php } ?>
      </div>
      <?php foreach($imgArr as $val)	{ ?>
      <div id="htmlcaption<?php echo esc_attr($val); ?>" class="nivo-html-caption">
      	<div class="nivo-caption-content">
			<?php if(!empty($complete['slide_title'.$val])){ ?>
            <div class="title"><?php echo $complete['slide_title'.$val]; ?></div>
            <?php } ?>
            <?php if(!empty($complete['slide_desc'.$val])){ ?>
            <div class="slidedesc"><?php echo $complete['slide_desc'.$val]; ?></div>
            <?php } ?>
            <?php if(!empty($complete['slide_btn'.$val])){ ?>
            <div class="slidebtn"><a class="slidelink" href="<?php echo $complete['slide_link'.$val]; ?>"><?php echo $complete['slide_btn'.$val]; ?></a></div>
            <?php } ?>
            <?php if(!empty($complete['slide_btn'.$val.'_2'])){ ?>
            <div class="slidebtn slidebtn2"><a class="slidelink slidelink2" href="<?php echo $complete['slide_link'.$val.'_2']; ?>"><?php echo $complete['slide_btn'.$val.'_2']; ?></a></div>
            <?php } ?>
      	</div>
      </div>
      <?php } ?>
    </div>
    <?php }
	else { ?>
    <div class="slider-wrapper slide-temp theme-default">
      <div id="slider" class="nivoSlider">
        <?php foreach($ImageUrl as $val) { ?>
        <img src="<?php echo $val; ?>" data-thumb="<?php echo $val; ?>" alt="" title="#htmlcaption" />
        <?php } ?>
      </div>
      <?php for($i=1; $i<=3; $i++)	{ ?>
      <div id="htmlcaption" class="nivo-html-caption">
        <div class="title"><?php echo 'SKT Ele Pet Lite<small>Portfolio</small>Theme'; ?></div>
        <div class="slidedesc">&nbsp;</div>
        <div class="slidebtn">&nbsp;</div>
      </div>
      <?php } ?>
    </div>
    <?php } ?>
    
    <div class="skt-slider-wave">
        <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
		 width="1400.000000pt" height="88.000000pt" viewBox="0 0 1400.000000 88.000000"
		 preserveAspectRatio="xMidYMid meet">
		<g transform="translate(0.000000,88.000000) scale(0.100000,-0.100000)"
		fill="#ffffff" stroke="none">
		<path class="skt-builder-wave-color" d="M0 440 l0 -440 7000 0 7000 0 0 440 c0 356 -3 440 -13 440 -7 0 -80
		-15 -163 -34 -748 -172 -1944 -380 -2909 -506 -2197 -287 -4025 -335 -6115
		-160 -1440 121 -3229 379 -4580 659 -107 23 -201 41 -207 41 -10 0 -13 -95
		-13 -440z"/>
		</g>
		</svg>
    </div>
    
  </div>
</section>