<?php
/*
================================================================================================
Arlene - content-event.php
Template Name: Events
================================================================================================
Template part for displaying event lists item.
@link https://codex.wordpress.org/The_Loop

@package        Arlene
@copyright      Copyright (C) 2017. Samuel Guebo
@license        GNU General Public License v2 or later (http://www.gnu.org/licenses/gpl-2.0.html)
@author         Samuel Guebo (https://samuelguebo.co/)
================================================================================================
*/


?>

<div class="event-item clearfix">
    <div class="columns large-2 small-2 no-padding-left no-padding-right">
        <h1 class="day"><?php echo get_the_date('d')?></h1>
    </div>
        
    <div class="columns large-4 small-4">
        <h3 class="month"><?php echo get_the_date('F')?></h3>
        <h6 class="full-day"><?php echo get_the_date('l')?></h6>
    </div>
        
    <div class="columns large-6 small-6 no-padding-right">
        <p class="description"><a href="<?php the_permalink();?>"><?php the_title();?></a></p> 
    </div>
</div><!--event/-->
