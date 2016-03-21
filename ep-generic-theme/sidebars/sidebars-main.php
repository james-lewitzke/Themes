<?php
$sidebar_main = new sidebar;
$sidebar_main->name = 'Main Sidebar';
$sidebar_main->posttype = 'general';
$sidebar_main->startsidebar();

$sidebar_blog = new sidebar;
$sidebar_blog->name = 'Blog Sidebar';
$sidebar_blog->posttype = 'general';
$sidebar_blog->startsidebar();
?>