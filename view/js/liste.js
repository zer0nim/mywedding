$(document).ready(function(){ // quand la page a fini de se charger

   $("#sortable").sortable({ // initialisation de Sortable sur #list-photos
  	 placeholder: 'highlight', // classe à ajouter à l'élément fantome
  	 update: function() {	// callback quand l'ordre de la liste est changé
  			 var order = $('#sortable').sortable('serialize'); // récupération des données à envoyer
  			 $.post('liste-modifie.php',order);
  	 }
   });
   $("#sortable").disableSelection(); // on désactive la possibilité au navigateur de faire des sélections

   $("#addSouhait").click(function() { //PTIN JE RAGE
     var souhait = $('#inputSouhait').val();
     $.post("liste-add.php",
      souhait,
      data
     );
     alert(data);
   });
});
