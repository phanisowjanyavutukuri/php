<?php
function render($template,$vars = array())
{
    extract($vars);
    include "views/$template.php";
}