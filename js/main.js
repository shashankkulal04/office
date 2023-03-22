// Funtion to update html according to conditions
function updateFields(x = 'Just Energy - Residential', y = '4') {
  const rs = SolarData.find(val => val.type === x && val.quantity === y);
  document.getElementById('grant').innerHTML = '€ ' + rs.g_available;
  document.getElementById('lessgrant').innerHTML = '€ ' + rs.base_cost;
  document.getElementById('Monthlyent').innerHTML = '€ ' + rs.intro;
  document.getElementById('right_energy').innerHTML = rs.type;
  document.getElementById('democust').innerHTML = rs.quantity;
  document.getElementById('Monthlyentto').innerHTML = '€ ' + rs.intro;
  document.getElementById('kw').innerHTML = rs.sys_size/1000;
  document.getElementById('nett').innerHTML = '€ ' +  rs.net_upfront;
  document.getElementById('lessgranto').innerHTML = '€ ' + rs.base_cost;
// Additional Updates
  
}


// Update data default on load
jQuery(document).ready(function(){ updateFields(); });

// Update data on slider change
// jQuery('#avologic-range').change(function(){
//   let cv = jQuery('input[name="my_options"]:checked').val();
//   let rv = jQuery('#avologic-range').val();
//   updateFields(cv, rv);
// });
document.getElementById('avologic-range').oninput = function() {
  let cv = jQuery('input[name="my_options"]:checked').val();
  let rv = jQuery('#avologic-range').val();
  updateFields(cv, rv);
};
// Update data when energy type selected.
jQuery('input[name="my_options"]').change(function(){
  let cv = jQuery('input[name="my_options"]:checked').val();
  let rv = jQuery('#avologic-range').val();
  updateFields(cv, rv);
});

// jQuery("#up-front").prop('checked')
//   jQuery("monPay").show();
// }

jQuery(document).ready(function(){
  jQuery("#monPay").show();
  jQuery(".fina customnene").show();
});

jQuery("#up-front").click(function(){
  if(this.checked){
    jQuery("#monPay").show();
    jQuery(".fina customnene").show();
    jQuery(".finato").hide();
    jQuery(".customnene").show()
  }
});

jQuery("#payupfront").click(function(){
  if(this.checked){
    jQuery(".finato").show();
    jQuery("#monPay").hide();
    jQuery(".fina customnene").hide();
    jQuery(".fina").hide();
    jQuery(".customnene").hide()
  }
});

jQuery("#energy-hot-water").click(function(){
  if(this.checked){
    jQuery("#slidfour").hide();
    jQuery("#slidfive").hide();
    jQuery('#avologic-range').prop('min','6');
    jQuery('#avologic-range').attr('value','6');
  }
});

jQuery("#just-energy").click(function(){
  if(this.checked){
    jQuery("#slidfour").show();
    jQuery("#slidfive").show();
    jQuery('#avologic-range').prop('min','4');
    jQuery('#avologic-range').attr('value','4');
  }
});

jQuery("#showfrom").click(function(){
  jQuery("#fromofcal").show();
});

document.getElementById('rangey').oninput = function() {
  let rval = parseInt(jQuery("#rangey").val());
  let country = parseInt(jQuery("#country").val());
  let gapprove = parseInt(jQuery("#lessgrant").text().replace(/[^\w\s]/g, ''));
  let gtotal = gapprove + country;
  document.querySelector("#Monthlyent").innerText = '€ ' + parseFloat(gtotal / (rval * 12)).toFixed(2).toString();
  document.querySelector("#Monthlyentto").innerText = '€ ' + parseFloat((gtotal / (rval * 12)).toFixed(2).toString());
};

jQuery('#country').change(function(){
  let rval = parseInt(jQuery("#rangey").val());
  let country = parseInt(jQuery("#country").val());
  let gapprove = parseInt(jQuery("#lessgrant").text().replace(/[^\w\s]/g, ''));
  let surplus = country / (rval * 12);
  document.querySelector("#Monthlyent").innerText = '€ ' + parseFloat(gapprove/(rval*12) + surplus).toFixed(2).toString();
  document.querySelector("#Monthlyentto").innerText = '€ ' + parseFloat((gapprove / (rval * 12) + surplus)).toFixed(2).toString();
});