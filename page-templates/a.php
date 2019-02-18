<?php
/**
 * Template Name: A
 *
 * This template will be used to display FAQs
 * @package jumtechWP
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'jumtechWP_container_type' );
?>

  <div class="page-header type-four with-bg">
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="content-inner center">
            <h1 class="heading">
              How to ... 
            </h1>
            <h3 class="moto">Frequently asked questions (FAQ)</h3>
          </div>
<?php 
$input = "https://drive.google.com/file/d/1FJIME2skH6_tPbjN3RmLRR3iXoqKwTnI/view?usp=sharing"; 
preg_match("/https:\/\/drive.google.com\/file\/d\/([a-zA-Z0-9_]+)\//", $input, $match);
$GoogleDriveFileID = $match[1];
?>

<audio controls>
 <source src="http://docs.google.com/uc?export=open&id=1W_3wgcQF4ekN9ETTGpUnI3sTaVqzJBcv" type="audio/mp3">




<div class="sc_player_container1">
  <input type="button" id="btnplay_5c49ba6834ab15.69804025" class="myButton_play" onclick="play_mp3('play','5c49ba6834ab15.69804025','http://localhost/journal/wp-content/uploads/2019/01/Anjan-Datta-Icche-Kore-Akshate.mp3','80','false');show_hide('play','5c49ba6834ab15.69804025');">

  <input type="button" id="btnstop_5c49ba6834ab15.69804025" style="display:none" class="myButton_stop" onclick="play_mp3('stop','5c49ba6834ab15.69804025','','80','false');show_hide('stop','5c49ba6834ab15.69804025');">
  <div id="sm2-container">
  <!-- flash movie ends up here -->
  </div>
</div>







<p>This browser does not support HTML5 audio</p>
 </audio>

        </div>

      </div>
    </div>
  </div><!--.page-header-->

<?php get_template_part('global-templates/footer-two'); ?>

<?php get_footer(); ?>
