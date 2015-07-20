/**
 * Created by dan on 7/12/15.
 */
$(document).ready(function(){

    $("li , a").click(function () {
        $('li.current ').removeClass('current');
        $(this).addClass('current');
    });
});