<!-- Custom Wordpress Footer 
    Applied to each site page -->
    <br><br>
    <footer class="col-sm-12">
        <hr><br>
        <span>
            <a href="/references/">References</a>
            <span class="pipe">|</span>
            <a href="/contact/">Contact</a>
            <span class="pipe">|</span>           
            <a class="text-nowrap" href="/terms/">Terms of Service</a>   
            <span class="pipe">|</span>        
            <a class="text-nowrap" href="/privacy/">Privacy Policy</a>
        </span>
        <br><br>
        <span>
            <a href="https://florastor.ca"><u>English</u></a>
            <span class="pipe">|</span>
            <a href="http://fr.florastor.ca">Français</a>
        </span>
        <br><br>
        <p id="copyright">© Florastor 2018</p>
    </footer>
    <script type="text/javascript" src="<?php bloginfo('template_directory');?>/backend/footer-scripts-ca.js?version=<?php echo date('Y-m-d-H-i-s', filemtime("wp-content/themes/florastor-canada-v2.0/backend/footer-scripts-ca.js")) ?>"></script>

<?php wp_footer(); ?> 
</body>
</html>