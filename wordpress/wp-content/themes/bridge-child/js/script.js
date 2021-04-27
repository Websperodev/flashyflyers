jQuery(document).ready(function($) {
	$( '.inputfile' ).each( function()
             {
                 var $input   = $( this ),
                     $label   = $input.next( 'label' ),
                     labelVal = $label.html();
         
                 $input.on( 'change', function( e )
                 {
                     var fileName = '';
         
                     if( this.files && this.files.length > 1 )
                         fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
                     else if( e.target.value )
                         fileName = e.target.value.split( '\\' ).pop();
         
                     if( fileName )
                         $label.find( 'span' ).html( fileName );
                     else
                         $label.html( labelVal );
                 });
         
                 // Firefox bug fix
                 $input
                 .on( 'focus', function(){ $input.addClass( 'has-focus' ); })
                 .on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
             });

        
            $('.product-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                asNavFor: '.product-slider-thumb',
                autoplay : false,
                prevArrow: '<i class="icon-angle-left"></i>',
                nextArrow: '<i class="icon-angle-right"></i>',
                adaptiveHeight: true
             });

             $('.product-slider-thumb').slick({
                slidesToShow: 4,
                asNavFor: '.product-slider',
                dots: true,
                arrows:false,
                focusOnSelect : true,
                responsive: [
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 4,
                        }
                    },
                    {
                        breakpoint: 380,
                        settings: {
                            slidesToShow: 3,
                            dots: true,
                arrows:false,
                        }
                    }
                ]
             });


             $('.rlt-slider').slick({
                slidesToShow: 4,
                arrowss:true,
                focusOnSelect : true,
                prevArrow: '<i class="icon-angle-left"></i>',
                nextArrow: '<i class="icon-angle-right"></i>',
                responsive: [
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 601,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 441,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
             });


             $('.category-carousel').slick({
                slidesToShow: 4,
                arrowss:true,
                focusOnSelect : true,
                prevArrow: '<i class="icon-angle-left"></i>',
                nextArrow: '<i class="icon-angle-right"></i>',
                responsive: [
                    {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 601,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 441,
                        settings: {
                            slidesToShow: 1,
                        }
                    }
                ]
             });
$(".vc_single_image-img").addClass("img-fluid");
              
});