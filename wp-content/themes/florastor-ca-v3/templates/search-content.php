<?php /* Template Name: Search */ ?>

<?php get_header('search'); ?>

<div class="bg-0">
    <div class="container">
        <br><br>
        <h1 class="gradient">Search Results</h1>
        <br>
        <form action="/search">
            <input type="text" name="q" id="tipue_search_input" autocomplete="off" required>
        </form>
    </div>
</div>
<div class="bg-1">
    <div class="container">
        <div id="tipue_search_content"></div>
    </div>
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