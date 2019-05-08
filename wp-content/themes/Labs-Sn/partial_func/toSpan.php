<?php

function hookToSpan($text)
{
    $text = str_replace("[", "<span>", $text);
    $text = str_replace("]", "</span>", $text);
    return $text;
}
