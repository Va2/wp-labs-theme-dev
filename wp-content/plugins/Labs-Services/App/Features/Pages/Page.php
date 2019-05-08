<?php
namespace App\Features\Pages;

class Page
{
    /**
     * Initialisation des pages.
     *
     * @return void
     */
    public static function init()
    {
        Newsletter::init();
        MailPage::init();
    }
}
