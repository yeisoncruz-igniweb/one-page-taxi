
    $(window).scroll(function(){
        var scrolled_val = $(document).scrollTop().valueOf();

        if( scrolled_val > 20 ){
            $('.arrow_go_top').show();
        }else{
            $('.arrow_go_top').hide();
        }
        if( scrolled_val > 0 ){
            $('.navbar').addClass('boingInUp');
            $('.logo_small').removeClass('hide');
            $('.logo').addClass('hide');
            $('.navbar-nav').css('margin-bottom','0');
            $('.navbar-nav li').css('padding-bottom','1%');
            $('.navbar-fixed-top').css('background-color','#000').css('opacity','0.9');
            if( $( window ).width() > 990 ){
                calculate_heigh_list();
            }else{
            }
            if( $( window ).width() > 768 ){
                $('#navbar').css('margin-top','-40px');
            }else{
                $('#navbar').css('margin-top','0');
            }
            $('.social_head, .sub-icon ').css('top','15px');
        }else{
            $('.navbar').removeClass('boingInUp');
            $('.logo_small').addClass('hide');
            $('.logo').removeClass('hide');
            $('.navbar-nav li').css('padding-bottom','');
            $('.navbar-nav').css('margin-bottom','');
            $('.navbar-fixed-top').css('opacity','1').css('background-color','');
            if( $( window ).width() > 768 ){
                $('#navbar').css('margin-top','0');
            }
            $('.social_head, .sub-icon ').css('top','');
        }
    });
    