/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $.ajax({
        url: '.././controller/gestionUtilisateur.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
           

            remplir1(data);

        },
        error: function(jqXHR, textStatus, errorThrown) {

            console.log(textStatus);
        }});
    $('.ajouterr').on('click', function() {

        
        $.ajax({
            url: '.././controller/gestionUtilisateur.php',
            data: {op: 'add', login: $("#login").val(), nom: $("#nom").val(), prenom: $("#prenom").val(), role: $("#role").val(), idutulisateur: $("#numprof").val(), telephone: $("#telephone").val(), email: $("#email").val(),psw:$("#psw").val()},
            type: 'POST',
            success: function(data, textStatus, jqXHR) {
              

                remplir1(data);

            },
            error: function(jqXHR, textStatus, errorThrown) {
              
                console.log(textStatus);
            }});

    });
      $(document).on('click', '.delete', function() {
          var id = $(this).closest('tr').find('td').eq(1).text();
          console.log(id);
        var confirmer = window.confirm("etes-vous sur(e) de vouloir supprimer le champ");


        if (confirmer == true) {
            var id = $(this).closest('tr').find('td').eq(1).text();

            $.ajax({
                url: '.././controller/gestionUtilisateur.php',
                data: {op: 'delete', idutulisateur: id},
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                   
                    remplir1(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    console.log(textStatus);
                }
            });
        }
    });


    $(document).on('click', '.edit', function() {
        var id = $(this).closest('tr').find('td').eq(1).text();
        var login = $(this).closest('tr').find('td').eq(2).text();
        var nom = $(this).closest('tr').find('td').eq(3).text();
        var prenom = $(this).closest('tr').find('td').eq(4).text();
        var telephone = $(this).closest('tr').find('td').eq(5).text();
        var email = $(this).closest('tr').find('td').eq(6).text();
        var role = $(this).closest('tr').find('td').eq(7).text();

        $("#login1").val(login);
        $("#nom1").val(nom);
        $("#prenom1").val(prenom);
        $("#numprof1").val(id);
        $("#telephone1").val(telephone);
        $("#email1").val(email);
        $("#role1").val(role);
        $('.modifier').click(function() {
            if ($('.modifier').text() == 'Modifier') {
                
                var confirmer = confirm("voulez-vous vraiment modifier ce champ");
                if (confirmer === true) {
                    $.ajax({
                        url: '.././controller/gestionUtilisateur.php',
                        data: {op: 'update', login: $("#login1").val(), nom: $("#nom1").val(), prenom: $("#prenom1").val(), role: $("#role1").val(), idutulisateur: $("#numprof1").val(), telephone: $("#telephone1").val(), email: $("#email1").val(),psw:$("#psw1").val()},
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {

                           
                            remplir1(data);

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus);
                        }
                    });
                }
            }
        });
    });
    function remplir1(data) {
        var contenu = $('#tableauxx');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr><td><span class="custom-checkbox">' + '<input type="checkbox" id="checkbox1" name="options[]" value="1">' +
                    '<label for="checkbox1"></label>' + '</span></td>';
            ligne += '<td class="ce">' + data[i].idutulisateur + '</td>'
            ligne += '<td class="ce">' + data[i].login + '</td>';
            ligne += '<td class="fil">' + data[i].nom + '</td>';
            ligne += '<td class="fil">' + data[i].prenom + '</td>';
            ligne += '<td class="fil">' + data[i].telephone + '</td>';
            ligne += '<td class="fil">' + data[i].Email + '</td>';
            ligne += '<td class="fil">' + data[i].role + '</td>';

            ligne += '<td>' + '<a href="#editEmployeeModal" class="edit" data-toggle="modal">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + '&#xE254;' + '</i></a>' +
                    '<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">' + '<i class="material-icons" data-toggle="tooltip" title="Delete">' + '&#xE872;' + '</i></a>' +
                    +'</td></tr>';
        }
        contenu.html(ligne);
    }

});
