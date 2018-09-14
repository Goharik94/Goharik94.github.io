<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package regina-lite
 */
?>
<?php get_header(); ?>

<div class="container">
	<div class="row">

		<section id="blog">
		
               

               <div style="width: 100%;height: auto;text-align: center;" id="main_slider">
               	<img src="<?php bloginfo('template_url')?>/images/4.jpg" class='mySlides'>
               	<img src="<?php bloginfo('template_url')?>/images/2.jpg" class='mySlides'>
               	<img src="<?php bloginfo('template_url')?>/images/3.jpg" class='mySlides'>
               </div>

               <div id="main_div">
               	<div id="main_content">
               		<div class="content">
               			<div>
               				<h3>Բարի գալուստ MDent</h3>
               				<div style="height: 235px;">
               				   <p style="text-align: justify;">MDent-ում մենք հպարտանում ենք մեր թիմի առջև դրված խնդիրների իրագործմամբ: Ձեր առաջին զանգից մինչև վերջին այցը մենք անում ենք հնարավորինը, համոզվելու, որ մեր հաճախորդների ակնկալիքներն ու ստացված արդյունքը գոհացուցիչ է:</p>
               			    </div>
               				<div> <a class="btn-dark-blue" href="http://wptest.com/%D5%B4%D5%A5%D6%80-%D5%B4%D5%A1%D5%BD%D5%AB%D5%B6/">Մեր մասին</a></div>
               			</div>
               		</div>
               		<div class="content" >
               			<div class="inner" style="background: #fff;height: 100%;">
               				<h3 style="margin: 0 0 15px">Աշխատանքային ժամերը</h3>
               				<div id="times" style="text-align: center;height: 235px;">
               					<div class="time-period">
               						<div class="days">Երկուշաբթի-Շաբաթ</div>
               						<div class="hours">9:00am - 9:00pm</div>
               					</div>
               					<div class="time-period">
               						<div class="days">Կիրակի</div>
               						<div class="hours">Հանգիստ</div>
               					</div>
               				</div>

               				<div style="font-size: .8em;margin: 0 3px;">Բացման և փակման ժամերը կարող են տարբեր լինել` կախված հաճախորդի գրաֆիկից:</div>
               				
               			</div>
               		</div>
               		<div class="content">
               			<div class="inner" style="background-color: #fff;height: 100%;">

               				<h3 style="margin: 0 0 15px">Տեղեկություններ մեր մասին</h3>
               				<div id="times" style="text-align: center">
               					<div class="day-period">
               						<img src="https://www.abledentalgroup.com/hubfs/Abledentalgroup-June2018/Images/phone-blue.svg?t=1535214949993" class="img_phone">
               						<div class="hour">Բջջային: +(374)99 707272</div>
               					</div>
               					<div class="day-period">
               						<img src="https://www.abledentalgroup.com/hubfs/Abledentalgroup-June2018/Images/map-marker-blue.svg?t=1535214949993" class="img_phone">
               						<div class="hour">Քաղաք Երևան, Խաղաղ Դոնի 15/4</div>
               					</div>
               				</div>

                           <a class="contact-btn" href="https://www.google.com/maps/dir/''/mdent/@40.127503,44.4571896,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x406abbdee0d3714f:0xa94bd20cd08b2690!2m2!1d44.5272295!2d40.1275241">Գտեք մեզ քարտեզի վրա</a>
               				
               			</div>
               		</div>
               	</div>
               	
               </div>

	
		</section><!--#blog.archive-->


		<?php get_sidebar(); ?>
	</div><!--.row-->
</div><!--.container-->
<script>
var myIndex = 0;

carousel();


function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");

    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3000); 
}

</script>

<?php get_footer(); ?>



