<?php /* Template Name: Search */ ?>

<?php get_header('search'); ?>
<?php //get_header(); ?>

    <br>
    
    <div class="container">
    <div class="col-sm-12">

        <h1 id="header-img">Search Results</h1>
        <br>
        <form action="/search">
        <input type="text" name="q" id="tipue_search_input" autocomplete="off" required>
        </form>
        <div id="tipue_search_content">
<!--
            <div id="tipue_search_content"><div class="tipue_search_spinner"><div class="tipue_search_rect1"></div><div class="tipue_search_rect2"></div><div class="tipue_search_rect3"></div></div></div> -->
         
        </div>

    </div><!-- Page Content -->
    </div>
       <script type="text/javascript">
        $(document).ready(function() {
            
            $('#tipue_search').tipuesearch({
                //'mode': 'live',
                'show': 5,
                'liveDescription': '.s',
                'liveContent': '.container'             
            });

        });
    </script>
    <?php get_footer(); ?>