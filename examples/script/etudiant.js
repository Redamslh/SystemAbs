$(document).ready(function() {
    $.ajax({
        url: 'http://localhost/Ab/controller/gestionEtudiant.php',
        data: {op:''},
        type: 'POST',
        
        success: function(data, textStatus, jqXHR) {
            alert(JSON.stringify(data));
           remplir(data)

        },
        error: function(jqXHR, textStatus, errorThrown) {

            console.log(textStatus);
        }});
   
    $.ajax({
        url: 'controller/gestionFiliere.php',
        data: {op: ''},
        type: 'POST',
        
        success: function(data, textStatus, jqXHR) {
            alert(JSON.stringify(data));
            var contenu = $('#filieres');
            var op = "";
            op = '<option >'+"choisir une filiere"+'</option>'
            for (var i = 0; i < data.length; i++) {
                op += '<option value="' + data[i].id + '">' + data[i].nom + '</option>';
            }
            contenu.html(op);

        },
        error: function(jqXHR, textStatus, errorThrown) {

            console.log(textStatus);
        }});
    $('#btn').click(function() {
        var cen = $("#cen");
        var nom = $("#nom");
       

        if ($('#btn').text() == 'Ajouter') {
     
            console.log($("#cen").val());
            console.log($("#nom").val());
            console.log($("#filieres").val());
            if ($("#cen").val() != '' && $("#nom").val() != '') {
                $.ajax({
                    url: 'controller/gestionEtudiant.php',
                    data: {op: 'add', idetudiant: $("#cen").val(), nom: $("#nom").val(), idfiliere: $('#filieres').val()},
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        alert(JSON.stringify(data));
                        remplir(data);
                        cen.val("");
                        nom.val('');
                        
                        
                        
                       
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus);
                    }
                });

            } else {
                confirm("veuillez entrer les champs");
            }
        }
    });

    $(document).on('click', '.supprimer', function() {

        var confirmer = window.confirm("etes-vous sur(e) de vouloir supprimer le champ");

        if (confirmer == true) {
        var filiere = $(this).closest('tr').find('td').eq(1).text();
        console.log(filiere)
            $.ajax({
                url: 'http://localhost/Ab/controller/gestionEtudiant.php',
                data: {op: 'delete', idetudiant: tttttt},
                type: 'POST',
                success: function(data, textStatus, jqXHR) {

                    remplir(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    t
                    console.log(textStatus);
                }
            });
        }
    });


    $(document).on('click', '.modifier', function() {
        var btn = $('#btn');
        var cen = $(this).closest('tr').find('th').text();
        var nom = $(this).closest('tr').find('td').eq(0).text();
        var filiere = $(this).closest('tr').find('td').eq(1).text();
        btn.text('Modifier');

        $('#nom').val(nom);
        $('#filiere').val(filiere);
        $("#cen").val(cen);
        btn.click(function() {
            if ($('.modifier').text() == 'Modifier') {
                var confirmer = confirm("voulez-vous vraiment modifier ce champ");
                console.log($('#filieres').val());
                if (confirmer === true) {
                    $.ajax({
                        url: 'controller/gestionEtudiant.php',
                       
                        data: {op: 'update', idetudiant: $("#cen").val(), nom: $("#nom").val(), idfiliere: $('#filieres').val()},
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {
                           alert(JSON.stringify("he he he "));
                           
                           
                            remplir1(data);
                            btn.text('Ajouter');
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus);
                        }
                    });
                }
            }
        });
    });

    function remplir(data) {
        var contenu = $('#table-content');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr><th scope="row">' + data[i].cen + '</th>';
            ligne += '<td>' + data[i].nom + '</td>';
            ligne += '<td>' + data[i].filiere + '</td>';
            ligne += '<td><button type="button" class="btn btn-outline-danger supprimer">Supprimer</button></td>';
            ligne += '<td><button type="button" class="btn btn-outline-secondary modifier">Modifier</button></td></tr>';
        }
        contenu.html(ligne);
    }


});



