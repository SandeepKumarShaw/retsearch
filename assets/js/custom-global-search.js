 $(document).ready(function(){
        

    $("#search_submit").click(function(e){

        var city = $("#city").val();
        var comm = $("#community").val();
        var postcode = $("#postal_code").val();
        var search_val = $("#search-box").val();
        //alert(search_val.indexOf(','));
        if(search_val == ""){
            alert("please give value");
            return false;
            
        }else if(city == "" && comm == "" && postcode == ""){
            
            if(search_val.indexOf(',') > -1){
                
                $("#address").val(search_val);
            }else{
                
                $("#listingid").val(search_val);
            }
            
            $("form#glvar_home_search").submit();

        }else{

            $("form#glvar_home_search").submit();

        }
        
    });


$("#search-box").keyup(function (e) {
    var key = e.keyCode;

    if(key == 13){
        return;
     }else{
    $("#city").val(''); 
    $("#community").val('');
    $("#postal_code").val('');
    $("#address").val('');
    $("#listingid").val('');
    


        
    var filter = $(this).val();
    if(filter != "" && filter != null){

    $("#suggesstion-box").show();
    var count_li = 0;
    $("#search-list>li").each(function () {
            
            if ($(this).text().toLowerCase().search(new RegExp(filter, "i")) < 0 ) {
                $(this).hide();
            } else {
                if(count_li<10){
                    if(count_li == 0){
                        $(this).addClass('first-li');
                    }
                    $(this).show();
            
                }else{
                  $(this).hide();
                }
                count_li++;
                
                
             }
        
            
     });
        }else{
            $("#suggesstion-box").hide();                 
        }

    }


    });


    $('#search-list>li').hover(function(){
        $(this).addClass('selected');
    }, function() {
        $(this).removeClass('selected');
    });



    $('#glvar_home_search').on('keyup keypress', function(e) {
      var keyCode = e.keyCode || e.which;
      if (keyCode === 13) { 
        e.preventDefault();
        return false;
      }
    });





var $listItems = $('#search-list>li');
$('#search-box').keydown(function(e)
{
    
    var key = e.keyCode,
        $selected = $listItems.filter('.selected'),
        $current;
    
     

    if ( key != 40 && key != 38 && key != 13) return;

    $listItems.removeClass('selected');

    if ( key == 40)
     // Down key
    {
        if ( ! $selected.length) {
            $current = $listItems.nextAll('li:visible').first();
            
        }
        else {
            $current = $selected.nextAll('li:visible').first();
           
            
        }
        $current.addClass('selected');
        $('#myvalue').val($current.text());
        
    }
    else if ( key == 38) // Up key
    {
        if ( ! $selected.length) {
            $current = $listItems.prevAll('li:visible').first();
            
        }
        else {
            $current = $selected.prevAll('li:visible').first();
             
            
        }
        $current.addClass('selected');
        $('#myvalue').val($current.text());
        
    }else if(key == 13){

        $myval = $('#myvalue').val();
       
        if($myval == '' || $myval == null){
        var $visible_li = $("li.first-li");
        $("#search-box").val($visible_li.text());
        $visible_li.trigger('click');
        $('#search-list>li').removeClass('first-li');
        
       
    }else{

        $('li:contains("' + $('#myvalue').val() + '")').filter(
    function(){
        if( $(this).text() == $('#myvalue').val()){
            $("#search-box").val($('#myvalue').val()); 
        $(this).trigger('click');
        $('#myvalue').val('');
        }
    });
        
      }
        $("#suggesstion-box").hide();
        $('#search_submit').trigger('click');
        
    }
    
    
 });

});
//To select country name
function selectCity(val1,val2) {
$("#city").val(val1);
$("#search-box").val(val2);
$("#suggesstion-box").hide();
}
function selectPostcode(val) {
$("#postal_code").val(val);
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
function selectCommunity(val1,val2) {
$("#community").val(val1);
$("#search-box").val(val2);
$("#suggesstion-box").hide();
}