$ = jQuery;$(document).ready(function() {/* Height Adjustments var headerheight = $('#headertitles').height() + 34;$('#mainnav > .menu > .menu-item > .sub-menu').css('top', headerheight);var maxmetaheight = -1;   $('.metapage').each(function() {     maxmetaheight = maxmetaheight > $(this).height() ? maxmetaheight : $(this).height();   });   $('.metapage').each(function() {     $(this).height(maxmetaheight);   });   /* Meta Content Class $('.metapage:nth-child(3n+2)').addClass('metapagemiddle');/* Tab interface $('#content-single-blog').tabs(); */});