$(document).ready(function(){
    
    var larg = $(window).width();
    menu(larg);
    
    $(window).on('resize', function(){
        
       larg = $(window).width();
       menu(larg);
       
    });
    
    
    $('#btnMenu').on('click', function(){
        
       if( $('#menuM').attr("open") != "open" ){
       
            $('#menuMu').fadeIn();   
            $('#menuM').attr("open", "yes");
            $('#btnMenu').css({'border':'2px outset'});
            
       }else{
           
            $('#menuMu').fadeOut();   
            $('#menuM').removeAttr("open"); 
            $('#btnMenu').css({'border':'1px solid'});
           
       }
            
        
    });
    
});


function menu(larg){
    
    var lE   = $('#esq').width();
    var perc = ( parseInt(lE) / 100 ) * 71;
    $('#esq img').height(perc);
    
    
    if( parseInt(larg) < 1000 ){
           $('#header_bottom').fadeOut();
       }else{
           $('#header_bottom').fadeIn();
       }
       
       if( parseInt(larg) < 1000 ){
           
           $('#menu').hide();
           $('#logo').hide();
           $('#menuM').css({'display': 'block'}); 
           $('#menuM').fadeIn();
           $('#btnMenu').fadeIn();
           
           $('#menu').css({'width':'50%'});
           $('#header_top nav ul li').css({'display':'list-item'});
           
       }else{
           $('#btnMenu').hide();
           $('#menuM').hide();
           $('#menu').fadeIn();
           $('#logo').fadeIn();
           $('#menu').css({'width':'70%'});
           $('#header_top nav ul li').css({'display':'inline'});
       }
}



