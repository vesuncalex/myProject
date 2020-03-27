<?php

// to do
function view($name) {
    return include (ROOT."/view/$name");
}
function env($name) {
    return include (ROOT . ".env.php");
}