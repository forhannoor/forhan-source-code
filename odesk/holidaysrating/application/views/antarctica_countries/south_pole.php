<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="South Pole"/>
<meta name="keywords" content="South Pole"/>
<meta name="author" content="Raymond"/>
<meta name="robots" content="index, follow"/>
<meta name="revisit-after" content="1 days"/>

<title>South Pole</title>
<link href="<?php echo base_url() ?>assets/css/country.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/wt-rotator.css"/>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.wt-rotator.min.js"></script>    
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/preview.js"></script>
</head>

<body>
<div id="top-head">
<div class="main">
<div class="logo">
	<img src="<?php echo base_url() ?>assets/images/logo.png" width="350" height="78" alt="logo" /></div>
<div class="menu">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/main_blog', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
</div>
</div>

<div id="slider">
<div class="slideshow"><div class="panel">
 	<div class="container">
        <div class="wt-rotator">
            <div class="screen">
                <noscript><img src="<?php echo base_url() ?>assets/images/triworks_abstract17.jpg"/></noscript>
            </div>
            <div class="c-panel">
                <div class="buttons">
                    <div class="prev-btn"></div>
                     
                    <div class="next-btn"></div>               
                </div>
                <div class="thumbnails">
                    <ul>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/countries/antarctica/south-pole/signpost.jpg" title="Sign Post"><img src="<?php echo base_url() ?>assets/images/thumbs/triworks_abstract17.jpg"/></a>
                            <a href="#" target="_blank"></a>                        
                            <div style="left:5px; top:94px; width:336px; height:0;"> 
                            	<h1>South pole Sign post</h1>
                            	South Pole, Antarctica.</div>
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/countries/antarctica/south-pole/from-air.jpg" title="South Pole"><img src="<?php echo base_url() ?>assets/images/thumbs/sf.jpg"/></a>
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF"> 
                                <h1 style="color:#0CF">South Pole, Antarctica</h1>
                                South pole.</div>                                                  	
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/countries/antarctica/south-pole/seals.jpg" title="Seals on South pole"><img src="<?php echo base_url() ?>assets/images/thumbs/triworks_abstract26.jpg"/></a>   
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:336px; height:0; color:#000; background-color:#FFF">
                            	<h1 style="color:#0CF">Seals on the south pole</h1>
                                Seals on the south pole.</div>                                                          	                   
                        </li>
                        <li>
                            <a href="<?php echo base_url() ?>assets/images/countries/antarctica/south-pole/station-flags.jpg" title="South pole, Antarctica"><img src="<?php echo base_url() ?>assets/images/thumbs/tokyo.jpg"/></a>                  
                            <a href="#" target="_blank"></a>
                            <div style="left:5px; top:36px; width:350px; height:0;"> 
                                <h1>SOUTH POLE</h1>
                                South Pole.</div>                                          	                          
                        </li>     
                    </ul>
                </div>     
            </div>
        </div>	
  	</div>    
</div>
<!--<img src="images/slider.png" alt="slideshow" title="slideshow" />--></div>
</div>

<div id="content">
<h1><?php echo $heading ?></h1>
<div class="clear"></div>
<div class="left-side">
<div class="top"></div>
<div class="middle">
<div class="my_login">
<?php if($this->ion_auth->logged_in()): ?>
<h2>Welcome</h2>
<br/>
<?php if(isset($profile_info)): ?>
<?php foreach($profile_info->result() as $value): ?>
<?php echo img('./uploads/'.$value->avatar) ?>
<?php endforeach ?>
<?php endif ?>
<br />
<?php echo $this->ion_auth->user()->row()->first_name.' ' ?>
<?php echo $this->ion_auth->user()->row()->last_name.' ' ?>
<?php echo '<br>' ?>
<?php $joined_in=date("d-m-Y" , $this->ion_auth->user()->row()->created_on) ?>
<?php echo 'Member since&nbsp;: '.$joined_in ?>
<br />
<?php $last_login=date("d-m-Y" , $this->ion_auth->user()->row()->last_login) ?>
<?php echo 'Last logged in: '.$last_login ?>
<?php $this->load->model('User_model') ?>
<?php $new_message_counter = $this->User_model->count_new($this->ion_auth->user()->row()->id) ?>
<br/>
<br/>
<?php echo anchor('user/inbox', "Inbox ($new_message_counter new)") ?>
<br/>
<br/>
<?php echo anchor('auth/logout', 'Logout') ?>
<?php else: ?>
<h2>Member Login</h2>
<?php include APPPATH.'views/auth/my_login.php' ?>
<br />
<?php echo anchor('auth/forgot_password', 'Forgot Password') ?>
&nbsp;&nbsp;&nbsp;&nbsp;
<?php echo anchor('auth/register', 'Register') ?>
<?php endif ?>
</div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="Holiday" style="margin-top:12px" />

<h2>Members online</h2>
<br/>
<ul class="profile-items">
<?php $users_online = $this->Ion_auth_model->users_online() ?>
<?php foreach($users_online as $u_online): ?>
<li><?php echo $u_online->username ?></li>
<?php endforeach ?>
</ul>

<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" />
<h2>Advertise here</h2>
<p>Holidaysrating is a new, fun and social website where you can search for information, vote for your favorite destination or share your holiday experience!</p>
</div>

<div class="bottom"></div>
</div>

<div class="center">
<div class="hot">
<h1>Introduction</h1>
<p><strong>South-pole</strong>, also known as the Geographic South Pole or Terrestrial South Pole, is one of the two points where the Earth's axis of rotation intersects its surface..</p>

</div>
<div class="clear"></div>
<div class="latest-news">
</div>


</div>


<div class="right-side">
<div class="top"></div>

<div class="middle">
<p><span>You are here&gt; <?php echo anchor('home/index', 'Home') ?>&gt;<?php echo anchor('topmenu/worldmap', 'Worldmap') ?>&gt;<?php echo anchor('regions/antarctica', 'Antarctica') ?>&gt; South Pole</span></p>
<center><img src="<?php echo base_url() ?>assets/images/south-pole.png" alt="south pole" style="height:120px;width:175px;margin:5px"/></center>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
	
<h2>Links</h2>
<ul>
<li><?php echo anchor('home/index', 'Home') ?></li>
</ul>


<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2>Like it..</h2>
<div class="social">
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style">
<table style="margin-top:8px;">
<tr>
<td><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a></td>
<td><a class="addthis_button_tweet"></a></td>
</tr>
<tr>
<td><a class="addthis_button_google_plusone" g:plusone:size="medium"></a></td>
<td><a class="addthis_counter addthis_pill_style"></a></td>
</tr>
</table>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-512f1c611545a1da"></script>
<!-- AddThis Button END -->
</div>

<div class="clear"></div>
<img src="<?php echo base_url() ?>assets/images/border.png" alt="border" style="margin-top:8px"/>
<h2>TOP Adventures</h2>
<ul>
<li><?php echo anchor('home/index', 'Home') ?></li>
</ul>
</div>
<div class="bottom"></div>
</div>

<div class="clear"></div>
<div id="footer">

<div class="google">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-0797455318364345";
/* Antartica Countries */
google_ad_slot = "3010897548";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<div class="clear"></div>
<div class="first-column">
<ul>
<li><?php echo anchor('home/index', 'HOME') ?></li>
<li><?php echo anchor('user/index', 'MY PROFILE') ?></li>
<li><?php echo anchor('topmenu/videodump', 'VIDEODUMP') ?></li>
<li><?php echo anchor('topmenu/worldmap', 'WORLDMAP') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/africa', 'AFRICA') ?></li>
<li><?php echo anchor('regions/asia', 'ASIA') ?></li>
<li><?php echo anchor('regions/caribbean', 'CARIBBEAN') ?></li>
<li><?php echo anchor('regions/central_america', 'CENTRAL AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('regions/europe', 'EUROPE') ?></li>
<li><?php echo anchor('regions/north_america', 'NORTH AMERICA') ?></li>
<li><?php echo anchor('regions/oceania', 'OCEANIA') ?></li>
<li><?php echo anchor('regions/south_america', 'SOUTH AMERICA') ?></li>
</ul>
</div>
<div class="first-column">
<ul>
<li><?php echo anchor('topmenu/favorites', 'FAVORITES') ?></li>
<li><?php echo anchor('news/main_news', 'TRAVEL NEWS') ?></li>
<li><?php echo anchor('topmenu/main_blog', 'BLOG') ?></li>
<li><?php echo anchor('topmenu/helpcenter', 'HELPCENTER') ?></li>
</ul>
</div>
<div class="logo"><center><img src="<?php echo base_url() ?>assets/images/photos.jpg" alt="logo" /></center>
<div class="slogin">You are our <span>travelguide!</span>
</div>
</div>
<div class="clear"></div>
<p> <?php echo anchor('privacy/privacy_policy', 'Privacy Policy') ?> | <?php echo anchor('privacy/terms_of_use', 'Terms of Use') ?> | &copy; Copyright 2013 Holidays Rating All Rights Reserved</p>
</div>
</div>
</body>
</html>
