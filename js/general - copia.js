function calculate_top(id_wrap,parent) {
    var height_window = window.innerHeight;
    var wrap_custom = $(id_wrap).height();
    var center_div = (height_window - wrap_custom) / 2;
    $(parent).css('height',height_window).css('padding-top',center_div);
}
$(document).ready(function() {

    /* Modal, open/close logic */
    $(document).ready(function(){
        $('.close, .btn-close').click(function(){
            $('#loginModal').removeClass('show').addClass('hide').removeClass('back_opac');
        });
        $('#open_modal').click(function(){
            $('#loginModal').removeClass('hide').addClass('show').addClass('back_opac');

        });
    });

    /*calculate the window height amd set the sectiosn height*/
    calculate_heigh_list();

    /*hide arrow go Top*/
    $('.arrow_go_top').hide();

    //Index calculate height and spaces:
    $('.sections_page').each(function(){
        calculate_top( $(this), $(this).children('.container') );
    });

    $(window).scroll(function(){
        var scrolled_val = $(document).scrollTop().valueOf();

        if( scrolled_val > 20 ){
            $('.arrow_go_top').show();
        }else{
            $('.arrow_go_top').hide();
        }
        if( scrolled_val > 0 ){
            $('.navbar').addClass('boingInUp');
            $('.image_first').removeClass('hide');
            $('.image_second').addClass('hide');
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
            $('.image_first').addClass('hide');
            $('.image_second').removeClass('hide');
            $('.navbar-nav li').css('padding-bottom','');
            $('.navbar-nav').css('margin-bottom','');
            $('.navbar-fixed-top').css('opacity','1').css('background-color','');
            if( $( window ).width() > 768 ){
                $('#navbar').css('margin-top','0');
            }
            $('.social_head, .sub-icon ').css('top','');
        }
    });
    var time = 2;
    var controller = $.superscrollorama();
    controller.addTween('#fade-it-pc', TweenMax.from( $('#fade-it-pc'), .5, {css:{opacity: 0},onComplete:function(){
        setTimeout(function(){
            $('#fade-it-pc').css({'opacity':'1'});
        },time);
        controller.removeTween('#fade-it-pc');
    }}));
    controller.addTween('#artisan', TweenMax.from( $('#artisan'), .25, {css:{right:'1200px'}, ease:Quad.easeInOut,onComplete:function(){
        setTimeout(function(){
            $('#artisan').css({'opacity':'1','left':'0','right':'0','display':'block','top':'0'});
        },time);
        controller.removeTween('#artisan');
    }}));
    controller.addTween('#series_ironside', TweenMax.fromTo( $('#series_ironside'), .25, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'1px'}, ease:Quad.easeInOut,onComplete:function(){
        setTimeout(function(){
            $('#series_ironside').css({'opacity':'1','letter-spacing': 'initial'});
        },time);
        controller.removeTween('#series_ironside');
    }}), 0, 100);
    controller.addTween('#header_slate', TweenMax.fromTo( $('#header_slate'), .25, {css:{opacity:0, 'letter-spacing':'30px'}, immediateRender:true, ease:Quad.easeInOut}, {css:{opacity:1, 'letter-spacing':'1px'}, ease:Quad.easeInOut,onComplete:function(){
        setTimeout(function(){
            $('#header_slate').css({'opacity':'1','letter-spacing': 'initial'});
        },time);
        controller.removeTween('#header_slate');
    }}), 0, 100);
    controller.addTween('#text_series', TweenMax.from( $('#text_series'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.easeOut,onComplete:function(){
        setTimeout(function(){
            $('#text_series').css({'opacity':'1','rotation': '0'});
        },time);
        controller.removeTween('#text_series');
    }}));
    controller.addTween('#flipInY', TweenMax.from( $('#flipInY'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.flipInY,onComplete:function(){
        setTimeout(function(){
            $('#flipInY').css({'opacity':'1','rotation': '0'});
        },time);
        controller.removeTween('#flipInY');
    }}));
    controller.addTween('#fiendseries', TweenMax.from( $('#fiendseries'), .5, {css:{opacity: 0},onComplete:function(){
        setTimeout(function(){
            $('#fiendseries').css({'opacity':'1'});
        },time);
        controller.removeTween('#fiendseries');
    }}));
    controller.addTween('#built', TweenMax.from( $('#built'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.flash,onComplete:function(){
        setTimeout(function(){
            $('#built').css({'opacity':'1','rotation': '0'});
        },time);
        controller.removeTween('#built');
    }}));
    controller.addTween('#protect', TweenMax.from( $('#protect'), .25, {css:{opacity:0, rotation: 720}, ease:Quad.lightSpeedIn,onComplete:function(){
        setTimeout(function(){
            $('#protect').css({'opacity':'1','rotation': '0'});
        },time);
        controller.removeTween('#protect');
    }}));
    controller.addTween('#play_now', TweenMax.from( $('#play_now'), .25, {css:{right:'1200px'}, ease:Quad.easeInOut,onComplete:function(){
        setTimeout(function(){
            $('#play_now').css({'opacity':'1','right': '0'});
        },time);
        controller.removeTween('#play_now');
    }}));

    $('#m_footer').hover(function(){
        $('#m_footer').css('opacity','1');
        $('#m_footer .icon_shares img').addClass('animated bounceInLeft');

    }, function(){
        $('#m_footer').css('opacity','0.6');
        $('#m_footer .icon_shares img');
    });

    $('#m_footer ul > li').hover(function(){
        var parent =  $(this).attr('jq-sel');
        $('.jq-'+parent).css('text-decoration','underline');
    }, function(){
        var parent =  $(this).attr('jq-sel');
        $('.jq-'+parent).css('text-decoration','none');
    });
    $(window).resize(function(){
        if( $( window ).width() > 990 ){
            calculate_heigh_list();
            $( "#wrap_menu" ).css('display','none');
            $( "#wrap_menu" ).removeClass('zoomIn');
        }
        $('.separate_top').each(function(){$(this).css('padding-top',parseInt($('.navbar').height())+15);});
    });
    if( location.href.indexOf('laptops') != '-1' || location.href.indexOf('nemesis') != '-1' ){
        setInterval(function(){
            document.body.style.backgroundSize  = '100% '+(parseInt($('#separate_laptop').offset().top)-30)+'px';
        },1000);
    }
    $('.dropdown').click(function(){
        if($(this).find('#wrap_menu').length == 0){
            $( "#wrap_menu" ).css('display','none');
            $( "#wrap_menu" ).removeClass('zoomIn');
        }
    });
    $('.separate_top').each(function(){$(this).css('padding-top',parseInt($('.navbar').height())+15);});
});
function calculate_heigh_list(){
    calculate_top('#wrap_ironside','#ironside');
    calculate_top('#wrap_custom','#gamer');
    calculate_top('#artisan','#anchor-artisan');
    calculate_top('#slate-up','#slate');
}
function goScrollElement(parent, element) {
    if (($(parent) && $(parent).length > 0) && ($(element) && $(element).length > 0)) {
        $('html, body').animate({scrollTop: $(element).offset().top - 0}, 1000);
    }
}
function open_drop_down() {
    var that = $( "#wrap_menu" );
    if(that.hasClass('zoomIn')){
        that.css('display','none');
        that.removeClass('zoomIn');
    }else{
        that.addClass('zoomIn');
        that.css({'display':'block'});
    }
}


    /* Modal, close with Esc */
    $(document).keyup(function(event){
        if(event.which==27)
        {
            $('#loginModal').removeClass('show').addClass('hide').removeClass('back_opac');
        }
    });
