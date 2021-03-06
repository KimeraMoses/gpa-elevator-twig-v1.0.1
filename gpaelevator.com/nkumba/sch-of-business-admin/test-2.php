<?php 

/**
* Template Name: Course Unit Template
 */


get_header();
?>

<?php
/**** VARIABLES HAVING ACF FIELD *******/

      $colleges = get_field('colleges');
      $course_name = get_field('course_name');
      $current_course_unit_info = get_field('current_course_unit');
      $left_course_unit_info = get_field('left_course_unit');
      $right_course_unit_info = get_field('right_course_unit');

/**** CALLING THE BREADCRUMB TEMPLATE*******/
      get_template_part('/template-parts/gpa-breadcrumb');
?>



<div class="container-fluid" id="gpa__courseUnit_body_wrapper">

  <div class="row text-center">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3" id="gpa__lecture_notes_wrapper">
        <section class="gpa__aria_hidden"><?php get_template_part('/template-parts/content-courseunit-header');?></section>
        <div class="gpa__lecture_notes_section gpa__courseunit_sidebar_wrapper">
              <span><strong><h3 class="gpa__lecture_notes_wrapper_title">LECTURE NOTES</h3></strong></span>
               
				<?php

            $term = $current_course_unit_info['current_course_unit_code'];
            $args = array(
              'post_type'   => 'video_lectures',
              'post_status' => 'publish',
              'posts_per_page' => 8,
              'tax_query'   => array(
                array(
                  'taxonomy' => 'course_unit_code',
                  'field'    => 'slug',
                  'terms'    => $term
                ),
              ),
            );
            
            $video = new WP_Query( $args );
            if( $video->have_posts() ) :
            ?>
            <div class="gpa__youtube_link_wrapper">
                    <ul>
                <?php
                  while( $video->have_posts() ) :
                    $video->the_post();
                  $video_title = get_field('video_title');
                  $link = get_field('youtube_video_link');
                    ?>
                
                  <li class="gpa__youtube_link_item"><a href="<?php echo $link;?>" target="_blank"> <i class="gpa__icon_pdf gpa_icon_video fas fa-play-circle"> </i><?php echo $video_title; ?></a></li>
<!--                     <span class="gpa__video_author">~<?php //the_title();?></span> -->
                <?php
                  endwhile;
                  wp_reset_postdata();
                ?>
              </ul>
            <?php
            else : ?>
              <h5 style="color:red"> <?php echo 'No Video Lectures uploaded yet in the ',  $current_course_unit_info['current_course_unit_name'],  ' Module';?></h5>
            <h3>Do You Have Any? </h3>
            </div>		
            <?php endif;?>
			
			
			
			
			
			
            <div class="gpa__lecture_notes_inner_container">

                  <ul >
                <?php if( have_rows('lecture_notes') ): ?>
	
                    <?php while( have_rows('lecture_notes') ): the_row(); 

                        // vars
                        $lecture_note_name = get_sub_field('lecture_note_name');
                        $link_to_lecture_note_pdf = get_sub_field('link_to_lecture_note_pdf');

                        ?>

                        <li class="gpa__lecture_note_link"><b><i><a href="<?php echo $link_to_lecture_note_pdf;?>"><i class="gpa__icon_pdf far fa-file-pdf"></i> <?php echo $lecture_note_name;?></a></i></b></li> 
            
                    <?php endwhile; ?>
                <?php endif; ?>
                
                <?php if( have_rows('reference_text_books') ): ?>
	
                      <h4 class ="gpa__ref_textbooks_title">Reference Textbooks</h4>

                    <?php while( have_rows('reference_text_books') ): the_row(); 

                          // vars
                          $reference_text_book_title = get_sub_field('reference_text_book_title');
                          $link_to_reference_text_book = get_sub_field('link_to_reference_text_book');

                          ?>
                          <li class="gpa__ref_textbook_link"><b><i><a href="<?php echo $link_to_reference_text_book;?>"><i class="gpa__icon_book fas fa-book reference-icon"></i><?php echo $reference_text_book_title;?></a></i></b></li>
                      
                    <?php endwhile; ?>
                  </ul>
                <?php endif; ?>
                       
            </div>
        </div>
    </div>

      
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6" id="gpa__pastpaper_display_wrapper">
      <div class="gpa__pastpaper_display_wrapper">

 	        <section class="gpa__courseunit_header gpa__aria_block"><?php get_template_part('/template-parts/content-courseunit-header');?></section>

          <section class="gpa__pastpaper_heading gpa__aria_hidden"><span><strong><h3 class="gpa__lecture_notes_wrapper_title">PAST PAPERS</h3></strong></span></section>
            <div class="gpa__pastpaper_display_area_inner">
              
                
              <?php if( have_rows('academic_year') ): ?>
                <ul class="pastpapers_list">
                  <?php while( have_rows('academic_year') ): the_row(); 

                    // vars
                    $academic_year_name = get_sub_field('academic_year_name');

                    ?>

                    <li>
                      <h4 class ="gpa__academic_year"><b>YEAR <?php echo $academic_year_name;?></b></h4>
                             
                          <?php if( have_rows('past_paper_container') ): ?>
                            <ul>
                              <?php while( have_rows('past_paper_container') ): the_row(); 

                                // vars
                                $past_paper_name = get_sub_field('past_paper_name');
                                $past_paper_link = get_sub_field('past_paper_link');

                                ?>
                                <li class="gpa__pastpaper_link"><b><i><a href="<?php echo $past_paper_link;?>"><?php echo $current_course_unit_info['current_course_unit_code'];?>-<?php echo $past_paper_name;?></a></i></b></li>
              
                              <?php endwhile; ?>

                            </ul>
                          <?php endif; ?>
                           
                    </li>

                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
          
                
            </div>

                <!--********COURSE UNIT LINK*****-->

            <div class="row gpa__links_to_other_courseunit_page">
              <?php if($left_course_unit_info['left_course_unit_name']):?>
                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                    <a href="<?php echo $left_course_unit_info['left_course_unit_link'];?> "  class="gpa__other_course_unit_link_btn gpa__btn gpa__btn_blue" id="other_course_unit-linkbutton"><?php echo $left_course_unit_info['left_course_unit_code'];?>-<?php echo $left_course_unit_info['left_course_unit_name'];?> <i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i></a>
                </div>
                
              <?php endif;?>
              <?php if($right_course_unit_info['right_course_unit_name']):?>
                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-6 col-xl-6"> 
                  <a href="<?php echo $right_course_unit_info['right_course_unit_link'];?>" class="gpa__other_course_unit_link_btn gpa__btn gpa__btn_lightgreen" id="other_course_unit-linkbutton"><?php echo $right_course_unit_info['right_course_unit_code'];?>-<?php echo $right_course_unit_info['right_course_unit_name'];?> <i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i></a>
                </div>
                <?php endif;?>
            </div>


      </div>
    </div>
    <!--paper section ends here-->
		 
    <!--lecture notes-pg-2-->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 gpa__courseUnit_useful_links_wrapper" id="gpa__courseUnit_useful_links_wrapper">
        <div class="gpa__youtube_link_wrapper gpa__courseunit_sidebar_wrapper">
    
           
          <span><strong><h3 class="gpa__lecture_notes_wrapper_title"><i class="gpa__icon_video fas fa-video"></i> YouTube Video Lectures</h3></strong></span>

			
			
            <?php

            $term = $current_course_unit_info['current_course_unit_code'];
            $args = array(
              'post_type'   => 'video_lectures',
              'post_status' => 'publish',
              'posts_per_page' => 8,
              'tax_query'   => array(
                array(
                  'taxonomy' => 'course_unit_code',
                  'field'    => 'slug',
                  'terms'    => $term
                ),
              ),
            );
            
            $video = new WP_Query( $args );
            if( $video->have_posts() ) :
            ?>
            <div class="gpa__youtube_link_wrapper">
                    <ul>
                <?php
                  while( $video->have_posts() ) :
                    $video->the_post();
                  $video_title = get_field('video_title');
                  $link = get_field('youtube_video_link');
                    ?>
                
                  <li class="gpa__youtube_link_item"><a href="<?php echo $link;?>" target="_blank"> <i class="gpa__icon_pdf gpa_icon_video fas fa-play-circle"> </i><?php echo $video_title; ?></a></li>
<!--                     <span class="gpa__video_author">~<?php //the_title();?></span> -->
                <?php
                  endwhile;
                  wp_reset_postdata();
                ?>
              </ul>
            <?php
            else : ?>
              <h5 style="color:red"> <?php echo 'No Video Lectures uploaded yet in the ',  $current_course_unit_info['current_course_unit_name'],  ' Module';?></h5>
            <h3>Do You Have Any? </h3>
            </div>		
            <?php endif;?>
			   <div class="gpa__link_suggest_btn"><a href= "/youtube-video-submission-form" target="_blank" class="btn gpa__btn gpa__btn_suggest">Suggest Video Link </a></div>
		          <?php if( have_rows('unversity_links') ): ?>
              <div class="gpa__comparison_section">
              <h4 class="gpa__comparison_section_title">COMPARE CONTENT WITH</h4>

              <?php while( have_rows('unversity_links') ): the_row(); 

                // vars
                $university_name = get_sub_field('university_name');
                $link_to_similar_university_content = get_sub_field('link_to_similar_university_content');
                $university_link_btn_color = get_sub_field('button_color');

                ?>

                <a href="<?php echo $link_to_similar_university_content;?>" id="gpa__comparison_section_btn" class="btn gpa__btn <?php echo $university_link_btn_color;?>"><?php echo $university_name;?></a> 

              <?php endwhile; ?>

                </div>
          <?php endif; ?>
        </div>

       

           
    </div>
		 
  </div>

  

 
</div>







<?php 

get_template_part('/template-parts/courseUnit-help');


get_footer();?>