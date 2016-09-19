/**
 * Created by mifort on 15.09.16.
 */


//<![CDATA[
jQuery(document).ready(function($){

    // Activate Sign Up Modal Block on Page Load
    $("#sign-up-modal").modal();


    // Daily Deal CountDown Clock Settings
    var date = new Date().getTime();			// This example is just to show how this function works.
    var new_date = new Date(date + 86400000);	// You can set your own time whenever you want.
    var n = new_date.toUTCString();				// 'date' value is given in milliseconds.

    $("#time").countdown({
        date: new_date,
        yearsAndMonths: true,
        leadingZero: true
    });


    // CarouFredSel Functions
    $('#carouFredSel-big').carouFredSel({
        responsive:true,
        height: 'auto',
        prev: '#prev_big',
        next: '#next_big',
        auto: {
            timeoutDuration: 10000,
            pauseOnHover: true
        }
    })/*.find("li").hover(
     function() { $(this).find("div").slideDown(); },
     function() { $(this).find("div").slideUp();}
     )*/;

    $('#productBestSale').carouFredSel({
        responsive:true,
        width: '100%',
        scroll: {duration:500,items:1},
        prev: '#prev_productBestSale',
        next: '#next_productBestSale',
        auto: false,
        items: {
            height: 'auto',
            //	height: '30%',	//	optionally resize item-height
            visible: {
                min: 1,
                max: 6
            }
        }
    });
    $('#productNew').carouFredSel({
        responsive:true,
        width: '100%',
        scroll: {duration:500,items:1},
        prev: '#prev_productNew',
        next: '#next_productNew',
        auto: false,
        items: {
            height: 'auto',
            //	height: '30%',	//	optionally resize item-height
            visible: {
                min: 1,
                max: 6
            }
        }
    });
    $('#productFeatured').carouFredSel({
        responsive:true,
        width: '100%',
        scroll: {duration:500,items:1},
        prev: '#prev_productFeatured',
        next: '#next_productFeatured',
        auto: false,
        items: {
            height: 'auto',
            //	height: '30%',	//	optionally resize item-height
            visible: {
                min: 1,
                max: 6
            }
        }
    });
    $('#partner').carouFredSel({
        responsive: true,
        width: '100%',
        scroll: 1,
        items: {
            height:'100%',
            //	height: '30%',	//	optionally resize item-height
            visible: {
                min: 1,
                max: 6
            }
        }
    });
});
//]]>