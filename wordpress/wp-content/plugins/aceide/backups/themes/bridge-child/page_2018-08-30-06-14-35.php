<?php /* start AceIDE restore code */
if ( $_POST["restorewpnonce"] === "0e907b4f514a5043122d461c5961c913d429483ec1" ) {
if ( file_put_contents ( "/home/flashyflyers/public_html/developer/wordpress/wp-content/themes/bridge-child/page.php" ,  preg_replace( "#<\?php /\* start AceIDE restore code(.*)end AceIDE restore code \* \?>/#s", "", file_get_contents( "/home/flashyflyers/public_html/developer/wordpress/wp-content/plugins/aceide/backups/themes/bridge-child/page_2018-08-30-06-14-35.php" ) ) ) ) {
	echo __( "Your file has been restored, overwritting the recently edited file! \n\n The active editor still contains the broken or unwanted code. If you no longer need that content then close the tab and start fresh with the restored file." );
}
} else {
echo "-1";
}
die();
/* end AceIDE restore code */ ?><?php get_header(); ?>
<div class="page-wrap pb-5 pt-3 bubble-bg-3">
        <div class="container">
            <h1 class="text-center udr-heading blog-head"><?=get_the_title()?></h1>

            <div class="blog-slider bx-shadow">
                <div class="item">
                    <div class="blog-post-slide clearfix bx-shadow">
                        <a href="blog-details.html"><img src="images/blog.jpg" alt=""></a>
                        <div class="blog-post-content">
                            <h2><a href="blog-details.html">The Power Of Community At Service Lane</a></h2>
                            <p>The Service Lane platform aspires to add value to people’s lives through a dedicated community of service providers whose expertise, and commitment to quality, result in highly profitable experiences in people’s lives more
                                options....
                            </p>
                            <a href="blog-details.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-post-slide clearfix">
                        <a href="blog-details1.html"><img src="images/blog.jpg" alt=""></a>
                        <div class="blog-post-content">
                            <h2><a href="blog-details1.html">The Power Of Community At Service Lane</a></h2>
                            <p>The Service Lane platform aspires to add value to people’s lives through a dedicated community of service providers whose expertise, and commitment to quality, result in highly profitable experiences in people’s lives more
                                options....
                            </p>
                            <a href="blog-details1.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="blog-post-slide clearfix">
                        <a href="blog-details2.html"><img src="images/blog.jpg" alt=""></a>
                        <div class="blog-post-content">
                            <h2><a href="blog-details2.html">The Power Of Community At Service Lane</a></h2>
                            <p>The Service Lane platform aspires to add value to people’s lives through a dedicated community of service providers whose expertise, and commitment to quality, result in highly profitable experiences in people’s lives more
                                options....
                            </p>
                            <a href="blog-details2.html" class="read-more">Read more</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-6 mb-4">
                    <article class="post-item">
                        <figure class="text-center">
                            <a href="blog-details3.html">
                                <img src="images/blog.jpg" class="img-fluid" alt="">
                            </a>
                        </figure>
                        <p class="post-meta">12/08/2018</p>
                        <h3><a href="blog-details3.html">The Power Of Community At Service Lane</a></h3>
                        <p>The Service Lane platform aspires to add through a dedicated community of people’s lives more options....</p>
                        <a href="blog-details3.html" class="read-more">Read more</a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <article class="post-item">
                        <figure class="text-center">
                            <a href="blog-details5.html">
                                <img src="images/blog.jpg" class="img-fluid" alt="">
                            </a>
                        </figure>
                        <p class="post-meta">12/08/2018</p>
                        <h3><a href="blog-details5.html">The Power Of Community At Service Lane</a></h3>
                        <p>The Service Lane platform aspires to add through a dedicated community of people’s lives more options....</p>
                        <a href="blog-details5.html" class="read-more">Read more</a>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 mb-4">
                    <article class="post-item">
                        <figure class="text-center">
                            <a href="blog-details4.html">
                                <img src="images/blog.jpg" class="img-fluid" alt="">
                            </a>
                        </figure>
                        <p class="post-meta">12/08/2018</p>
                        <h3><a href="blog-details4.html">The Power Of Community At Service Lane</a></h3>
                        <p>The Service Lane platform aspires to add through a dedicated community of people’s lives more options....</p>
                        <a href="blog-details4.html" class="read-more">Read more</a>
                    </article>
                </div>
            </div>

            <div class="blog-pagination pb-5 clearfix">
                <ul>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                </ul>
            </div>

        </div>
    </div>
    <?php get_footer(); ?>
