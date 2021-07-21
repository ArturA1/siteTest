<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Libro
 */

get_header(); ?>

    <div class="page-container float-right">
        <div class="row">
            <div class="col-md-6">
                <!--<div class="blog-entry ftco-animate">
                    <a href="blog-single.html" class="blog-image">
                        <img src="images/image_1.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><a href="#">July 29, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Life looks happier</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="blog-entry ftco-animate">
                    <a href="blog-single.html" class="blog-image">
                        <img src="images/image_2.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><a href="#">July 29, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Life looks happier</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="blog-entry ftco-animate">
                    <a href="blog-single.html" class="blog-image">
                        <img src="images/image_3.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><a href="#">July 29, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Life looks happier</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="blog-entry ftco-animate">
                    <a href="blog-single.html" class="blog-image">
                        <img src="images/image_4.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><a href="#">July 29, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Life looks happier</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>-->
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="blog-entry ftco-animate">
                        <a href="<?php the_permalink(); ?>" class="blog-image">
                            <?php echo get_the_post_thumbnail(get_the_ID(),'full'); ?><!--post-customthumb-->
                        </a>
                        <div class="text py-4">
                            <div class="meta">
                                <div><a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a></div>
                                <div><a href="<?php the_permalink(); ?>"><?php echo get_the_author(); ?></a></div>
                            </div>
                            <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                <?php
                    endwhile;
                else :

                    get_template_part( 'template-parts/content', 'none' );

                endif;
                ?>
            </div>

            <!--<div class="col-md-6">
                <div class="blog-entry ftco-animate">
                    <a href="blog-single.html" class="blog-image">
                        <img src="images/image_5.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><a href="#">July 29, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Life looks happier</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="blog-entry ftco-animate">
                    <a href="blog-single.html" class="blog-image">
                        <img src="images/image_6.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><a href="#">July 29, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Life looks happier</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="blog-entry ftco-animate">
                    <a href="blog-single.html" class="blog-image">
                        <img src="images/image_7.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><a href="#">July 29, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Life looks happier</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
                <div class="blog-entry ftco-animate">
                    <a href="blog-single.html" class="blog-image">
                        <img src="images/image_8.jpg" class="img-fluid" alt="">
                    </a>
                    <div class="text py-4">
                        <div class="meta">
                            <div><a href="#">July 29, 2018</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading"><a href="#">Life looks happier</a></h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>-->
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!--end: page-container-->

<?php
//get_sidebar();
get_footer();
