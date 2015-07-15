$(function(){
    $('.tabs ul li ').on('click',function(){
        $('.tabs ul li ').removeClass('current');
        $(this).addClass('current');



        $.ajax({
            type      : 'GET',
            url       : 'about-json.php',
            cache     : false,
            dataType  : 'json',
            success   : function(response){
                $.each(response,function(k,v){
                    console.log(k+'.. '+ v);
                });
            },
            error     : function(xhr, status, error){

            }
        });
        return false;
    });
});