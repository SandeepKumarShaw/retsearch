jQuery(document).ready(function(){
   $('#city').multiselect();
   $('#listing_city').multiselect();
   $('#status').multiselect();
  });

$(document).ready(function(){
   $('.all_city').removeClass('hide');
   $('#city').multiselect();
   $('#county').multiselect();
   $('#postal_code').multiselect();
  });

  $("input[type='radio']").click(function(){
    var address_type_value=$("input[name='address_type']:checked").val();
    if(address_type_value=='city_name'){
     $('.all_city').removeClass('hide'); 
     $('.all_county').addClass('hide'); 
     $('.all_postal_codes').addClass('hide');
    }if(address_type_value=='county_name'){
      $('.all_city').addClass('hide'); 
      $('.all_county').removeClass('hide');
      $('.all_postal_codes').addClass('hide'); 
    }if(address_type_value=='postal_code_name'){
      $('.all_city').addClass('hide'); 
      $('.all_county').addClass('hide');
     $('.all_postal_codes').removeClass('hide'); 
    }
  });
  $('#reset_search').click(function(){
    $('.all_city').removeClass('hide');
    $('.all_county').addClass('hide');
    $('.all_postal_codes').addClass('hide'); 
  });
  $(document).ready(function(){
    $('.tab-click').click(function(){
      var datatab = $(this).children('a').data('tab');
      $("#tabs-1").css('display','none');
      $("#tabs-2").css('display','none');
      $("#tabs-3").css('display','none');
      $("#" + datatab).css('display','block');
      $(this).siblings('li').removeClass('active');
      $(this).addClass('active');
    });
  });