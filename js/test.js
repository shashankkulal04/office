document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

/*
SLIDER
*/
var slider = document.getElementById("panelRange");
var output = document.getElementById("showRange");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
  slider.setAttribute('value', this.value);
}

/*
MY FORM 1
*/
jQuery(document).ready(function($) {
    let pvalue = (document.getElementById("showRange").textContent);
    data = {
      action: 'getAllSolarData',
      pval: pvalue,
    };
    $.post(ajax_object.ajax_url, data, function(response){
      console.log(response);
  });
});

// Fist Slider on change
jQuery('#range').change(function(){
  console.log('hwllo');
});