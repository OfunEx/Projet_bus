function maj_tab_four(){
   $.ajax({
    type: "POST",
    url: "vues/tab_gestion_fournisseur.php",
    data: "auto=1",
    success: function(retour){
      $("#tab_gestion").html(retour);
      ajout_ecouteur();
      ecouteur_data_tab();
         }
     });
}

function listener_all(){

}

function listener_short(){
  
}

$(document).ready(function(){
    
    $('#form').attr("action", "#");
    listener_short();
    listener_all();
    
    
});