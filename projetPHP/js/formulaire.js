function maj_tab_four(){
   $.ajax({
    type: "POST",
    url: "vues/tab_gestion_fournisseur.php",
    data: "auto=1",
    success: function(retour){
      $("#tab_gestion").html(retour);
      ajout_ecouteur();
      ecouteur_data_tab()
         }
     });
}

$(document).ready(function(){
    // Remove the `no-js` and add the `js` (because JS is enabled (we're using it!)
    $('body').removeClass('no-js').addClass('js');

    // Assign it to a var so you don't traverse the DOM unnecessarily.
    var useJS = $('body').hasClass('js');
    if(useJS){
        // JS Enabled
    }
});