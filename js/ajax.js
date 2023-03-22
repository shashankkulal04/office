jQuery(".fromsb").click(function(){
  let property = jQuery('select[name="typeofproperty"]').val();
  let roof = jQuery('select[name="roof"]').val();
  let installPanel = jQuery('select[name="installpanel"]').val();
  let chimney = jQuery('select[name="nearbychumeys"]').val();
  let homeMost = jQuery('select[name="homemost"]').val();
  let name = jQuery('#name').val();
  let email = jQuery('#email').val();
  let pnumber = jQuery("#pnumber").val();
  let eircode = jQuery("#address-locator").val();

  console.log("Property: " + property + "/n");
  console.log("Roof: " + roof + "/n");
  console.log("Install: " + installPanel + "/n");
  console.log("chimney: " + chimney + "/n");
  console.log("homemost: " + homeMost + "/n");
  console.log("name: " + name + "/n");
  console.log("email: " + email + "/n");
  console.log("pnumber: " + pnumber + "/n");
  console.log("eircode: " + eircode + "/n");
});