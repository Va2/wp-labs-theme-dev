<?php

get_header();

require_once get_template_directory() . "/partial_func/toSpan.php";

get_template_part("templates/headerServices");
get_template_part("templates/servicesServices");
get_template_part("templates/featuresServices");

get_template_part("templates/projectCard");

get_template_part("templates/newsletter");
get_template_part("templates/contactForm");

get_footer();
