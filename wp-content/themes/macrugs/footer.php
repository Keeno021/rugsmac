﻿<?php
/**
 * The theme footer.
 *
 * @package bootstrap-basic4
 */
?>
</div>
<section class="">
    <footer class="container-fluid">
        <h4>This is the footer</h4>
    </footer>
</section>


<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Full-Page-Background-1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Full-Page-Background-2.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Full-Page-Background-3.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Full-Page-Background.js"></script>


<!--wordpress footer-->
<?php wp_footer(); ?>
<!--end wordpress footer-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-72814387-13"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());

gtag('config', 'UA-72814387-13');
</script>

</body>

</html>