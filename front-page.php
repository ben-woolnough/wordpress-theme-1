<?php get_header(); ?>

<h1>STATIC FRONT PAGE</h1>

<?php get_template_part( 'templates/feature', 'feature' ) ?>

<div class="container">
    <div class="row">

        <div id="main" class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <article class="latest-post">
                        <img src="" alt="">
                    </article>
                </div>
                <div class="col-sm-6">
                    <article class="post"></article>
                </div>
                <div class="col-sm-6">
                    <article class="post"></article>
                </div>
                <div class="col-sm-6">
                    <article class="post"></article>
                </div>
                <div class="col-sm-6">
                    <article class="post"></article>
                </div>
                
            </div>
        </div>

        <aside id="side" class="col-lg-4 col-md-12">
            <div class="widget widget-text">
                <h4 class="widget-title">Text widget</h4>
                <div>content</div>
            </div>
            <div class="widget widget-example">
                <h4 class="widget-title">Widget title</h4>
                <div>content</div>
            </div>
            <div class="widget widget-example">
                <h4 class="widget-title">Widget title</h4>
                <div>content</div>
            </div>
        </aside>

    </div>
</div>

<?php get_footer(); ?>