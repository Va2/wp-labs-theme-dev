<?php

get_header();

require_once get_template_directory() . "/partial_func/toSpan.php";

get_template_part("templates/introSection");
get_template_part("templates/aboutSection");
get_template_part("templates/testimonialSection");
get_template_part("templates/servicesSection");
get_template_part("templates/teamSection");
get_template_part("templates/promotionSection");
get_template_part("templates/contactForm");

get_footer();
