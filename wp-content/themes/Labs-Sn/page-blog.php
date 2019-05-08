<?php

get_header();

require_once get_template_directory() . "/partial_func/toSpan.php";

get_template_part("templates/headerServices");

get_template_part("templates/blogSection");

get_template_part("templates/newsletter");

get_footer();
