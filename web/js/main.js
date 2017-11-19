var min_id = 0;

$( document ).ready(function() {
    
   
    $('.biolab-button-show_menu').on('click',function () {
        $('.biolab-menu-bg').show();
    });
    $('.biolab-button-close_menu').on('click',function () {
        $('.biolab-menu-bg').hide();
    });
    
    $('.biolab-labortiries-search-box').on('click',function () {
		$('#locationField').removeClass('active');
        $( '.biolab-labortiries-search-items' ).slideToggle( "slow", function() {
          // Animation complete.
        });
    });
    
    //---------------------------------------------------------------------------------------
    
    $("#biolab-home-button1").on('click',function () {
        $("#biolab-home-news").css("display","block");
        $("#biolab-home-news2").css("display","none");
        $("#biolab-home-news3").css("display","none");
        $("#biolab-home-button1").addClass("biolab-home-button-active");
        $("#biolab-home-button2").removeClass("biolab-home-button-active");
        $("#biolab-home-button3").removeClass("biolab-home-button-active");
    });
    $("#biolab-home-button2").on('click',function () {
        $("#biolab-home-news2").css("display","block");
        $("#biolab-home-news").css("display","none");
        $("#biolab-home-news3").css("display","none");
        $("#biolab-home-button2").addClass("biolab-home-button-active");
        $("#biolab-home-button1").removeClass("biolab-home-button-active");
        $("#biolab-home-button3").removeClass("biolab-home-button-active");
    });
	$("#biolab-home-button3").on('click',function () {
        $("#biolab-home-news3").css("display","block");
        $("#biolab-home-news").css("display","none");
        $("#biolab-home-news2").css("display","none");
        $("#biolab-home-button3").addClass("biolab-home-button-active");
        $("#biolab-home-button1").removeClass("biolab-home-button-active");
        $("#biolab-home-button2").removeClass("biolab-home-button-active");
    });
    
    $('.biolab-home-news-new').on('click',function () {
        if ($( this ).find('i').hasClass( "fa-chevron-right" )){
            $( this ).find('i').removeClass( "fa-chevron-right" );  
            $( this ).find('i').addClass( "fa-chevron-down" );
        }
        else {
            $( this ).find('i').removeClass( "fa-chevron-down" );    
            $( this ).find('i').addClass( "fa-chevron-right" );            
        }
        
        $( this ).find('p').slideToggle( "slow", function() {
          // Animation complete.
        });
    });	
  
    //-------------------------------------------------------------------------------------------    
    $('.biolab-labortiries-search-items p').on('click',function () {
        
        $( this ).addClass('.biolab-labortiries-search-item-active');
        $('.biolab-labortiries-search-box-select').text($( this ).text());
        $('.biolab-labortiries-search-items').hide();
		$('#autocomplete').val("");
		$('.biolab-laboratirie-short-address .distance').css("display","none");
		
        
        var code = parseInt($(this).attr("id"));
        
        $('.biolab-laboratirie').each(function() {
            if ($(this).hasClass("biolab-laboratirie-region-" + code)) {
                $(this).show();
            }	else 	$(this).hide();
        });
  
    });	
    
   //---------------------------------ЖИВОЙ ПОИСК---------------------------------------------------------- 

    
    //-------------------------------------------------------------------------------------------  
});

function showClinic11 () {
        $('.biolab-laboratirie').each(function(index) {
            if (min_id == index) {
                $(this).show();
            }	else 	$(this).hide();
        });
}

 
        function showClinic (id) {
               if ($( ".biolab-laboratirie-"+id+" span" ).find('i').hasClass( "fa-plus" )){
                   $( ".biolab-laboratirie-"+id+" span" ).find('i').removeClass( "fa-plus" );  
                   $( ".biolab-laboratirie-"+id+" span" ).find('i').addClass( "fa-minus" );
               }
               else {
                   $( ".biolab-laboratirie-"+id+" span" ).find('i').removeClass( "fa-minus" );    
                   $( ".biolab-laboratirie-"+id+" span" ).find('i').addClass( "fa-plus" );            
               }

               $( ".biolab-laboratirie-"+id+"  .biolab-laboratirie-more_info" ).slideToggle( "slow", function() {
                 // Animation complete.
               });
               $( ".biolab-laboratirie-"+id+"  .biolab-laboratirie-short-address" ).slideToggle( "slow", function() {
                 // Animation complete.
               });
           }	

	
 