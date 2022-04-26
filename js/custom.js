/******************************************
    Version: 1.0
/****************************************** */

(function($) {
    "use strict";

    /* ==============================================
    Fixed menu
    =============================================== */
    
	$(window).on('scroll', function () {
		if ($(window).scrollTop() > 50) {
			$('.top-navbar').addClass('fixed-menu');
		} else {
			$('.top-navbar').removeClass('fixed-menu');
		}
	});
	
    /* ==============================================
    BACK TOP
    =============================================== */
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1) {
            jQuery('.dmtop').css({
                bottom: "75px"
            });
        } else {
            jQuery('.dmtop').css({
                bottom: "-100px"
            });
        }
    });
	
	 /* ==============================================
	Add Class -->
	=============================================== */
	$(document).ready(function() {

		$('.collapse').on('shown.bs.collapse', function () {
			$(this).parent().addClass('active');
		});

		$('.collapse').on('hidden.bs.collapse', function () {
			$(this).parent().removeClass('active');
		});

	});

    /* ==============================================
    LOADER -->
    =============================================== */

    $(window).load(function() {
        $("#preloader").on(500).fadeOut();
        $(".preloader").on(600).fadeOut("slow");
    });
	
	/* ==============================================
		Scroll to top  
	============================================== */
		
	if ($('#scroll-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('#scroll-to-top').addClass('show');
				} else {
					$('#scroll-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('#scroll-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}

    /* ==============================================
     FUN FACTS -->
     =============================================== */

    function count($this) {
        var current = parseInt($this.html(), 10);
        current = current + 50; /* Where 50 is increment */
        $this.html(++current);
        if (current > $this.data('count')) {
            $this.html($this.data('count'));
        } else {
            setTimeout(function() {
                count($this)
            }, 30);
        }
    }
    $(".stat_count, .stat_count_download").each(function() {
        $(this).data('count', parseInt($(this).html(), 10));
        $(this).html('0');
        count($(this));
    });

    /* ==============================================
     TOOLTIP -->
     =============================================== */
    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()

    /* ==============================================
     CONTACT -->
     =============================================== */


     var formulario=document.getElementById('contactform');
     var respuesta=document.getElementById('respuesta');

    formulario.addEventListener('submit', function(e){
        e.preventDefault();

        console.log('me diste click');
        var datos = new FormData();
        var nombre= $('#nombre').val();
        var apellido= $('#apellido').val();
        var email= $('#email').val();
        var asunto= $('#asunto').val();
        var msg= $('#msg').val();

        datos.append('nombre', nombre);
        datos.append('apellido', apellido);
        datos.append('email', email);
        datos.append('asunto', asunto);
        datos.append('msg', msg);

        console.log(datos.get('nombre'));
        
        fetch('contactaction.php',{
            method: 'POST',
            body: datos

        })

            .then(res => res.json())
            .then(data => {
                console.log(data)
                if(data === 'error'){
                    respuesta.innerHTML = `<div class="alert alert-danger" role="alert">
                    Llena todos los datos
                    </div>`
                
                }else{
                    respuesta.innerHTML = `<div class="alert alert-primary" role="alert">
                    Mensaje enviado
                    </div>`
                }
            })
    })
            
           
    /*** *    $('#contactform').submit(function(e) {
            e.preventDefault();

            
            var action = $(this).attr('action');
            $("#message").slideUp(750, function() {
                $('#message').hide();
                $('#submit')
                    .after('<img src="images/ajax-loader.gif" class="loader" />')
                    .attr('disabled', 'disabled');
                $.post(action, {
                        nombre: $('#nombre').val(),
                        apellido: $('#apellido').val(),
                        email: $('#email').val(),
                        asunto: $('#asunto').val(),
                        msg: $('#msg').val(),
                        recipient= "apphyperionlsm@gmail.com",
                        select_service: $('#select_service').val(),
                        select_price: $('#select_price').val(),
                        verify: $('#verify').val()
                    },
                    function(data) {
                        document.getElementById('message').innerHTML = data;
                        $('#message').slideDown('slow');
                        $('#contactform img.loader').fadeOut('slow', function() {
                            $(this).remove()
                        });
                        $('#submit').removeAttr('disabled');
                        if (data.match('success') != null) $('#contactform').slideUp('slow');
                        alert("Mensaje enviado");
                    }
                );
            });
            return false;
        });** */


	/* ==============================================
    BACK TOP
    =============================================== */
	
	
	
    /* ==============================================
     CODE WRAPPER -->
     =============================================== */

    $('.code-wrapper').on("mousemove", function(e) {
        var offsets = $(this).offset();
        var fullWidth = $(this).width();
        var mouseX = e.pageX - offsets.left;

        if (mouseX < 0) {
            mouseX = 0;
        } else if (mouseX > fullWidth) {
            mouseX = fullWidth
        }

        $(this).parent().find('.divider-bar').css({
            left: mouseX,
            transition: 'none'
        });
        $(this).find('.design-wrapper').css({
            transform: 'translateX(' + (mouseX) + 'px)',
            transition: 'none'
        });
        $(this).find('.design-image').css({
            transform: 'translateX(' + (-1 * mouseX) + 'px)',
            transition: 'none'
        });
    });
    $('.divider-wrapper').on("mouseleave", function() {
        $(this).parent().find('.divider-bar').css({
            left: '50%',
            transition: 'all .3s'
        });
        $(this).find('.design-wrapper').css({
            transform: 'translateX(50%)',
            transition: 'all .3s'
        });
        $(this).find('.design-image').css({
            transform: 'translateX(-50%)',
            transition: 'all .3s'
        });
    });

})(jQuery);