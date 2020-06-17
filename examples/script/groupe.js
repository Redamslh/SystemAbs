$(document).ready(function() {
    $.ajax({
        url: '.././controller/gestionGroupe.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {

            
            remplir(data);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            alert(errorThrown);
        }});
    $.ajax({
        url: '.././controller/gestionFiliere2.php',
        data: {op: 'notyet'},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
           
            var contenu1 = $('#cheffiliere');
            var hji = $('#cheffiliere1');
            var op = "";
            op = '<option >' + "choisir un responsable" + '</option>';
            for (var i = 0; i < data.length; i++) {
                op += '<option  value="' + data[i].idutulisateur + '">' + data[i].nom + '</option>';
            }
            contenu1.html(op);
            hji.html(op);

        },
        error: function(jqXHR, textStatus, errorThrown) {
          
        }});
employe=$("#depart")
 var employ=$("#depart1")
$.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: ''},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            console.log(data[0].idFillere);
                                            console.log(data[0].abreveation);
                                            var option = '<option selected>Choisi un niveau</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].idFillere + '">' + data[i].abreveation + '</option>';
                                                console.log(option);
                                            }
                                            employe.html(option);
                                            employ.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });

    $('.ajouterr').click(function() {

        $.ajax({
            url: '.././controller/gestionGroupe.php',
            data: {op: 'add', num: $("#abrev").val(), salle: $("#nomfil").val(), idFil: $("#depart").val()},
            type: 'POST',
            success: function(data, textStatus, jqXHR) {
            alert(JSON.stringify(data));
                remplir(data);


            },
            error: function(jqXHR, textStatus, errorThrown) {
                  alert(JSON.stringify(data));
            }
        });


    }
    );
    $(document).on('click', '.edit', function() {
        var abrev = $(this).closest('tr').find('td').eq(1).text();
        var nomfil = $(this).closest('tr').find('td').eq(2).text();
        var id = $(this).closest('tr').find('td').eq(4).text();
        $("#abrev1").val(abrev);
        $("#nomfil1").val(nomfil);
        $('.modifier').click(function() {
            if ($('.modifier').text() == 'Modifier') {

                var confirmer = confirm("voulez-vous vraiment modifier ce champ");


                if (confirmer === true) {
                    $.ajax({
                        url: '.././controller/gestionGroupe.php',
                        data: {op: 'update',id:id, num: $("#abrev1").val(), salle: $("#nomfil1").val(), idFil: $("#depart1").val()},
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {

                           
                            remplir(data);

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                           
                            console.log(textStatus);
                          
                        }
                    });
                }
            }
        });
    });
    $(document).on('click', '.delete', function() {
        var confirmer = window.confirm("etes-vous sur(e) de vouloir supprimer le champ");


        if (confirmer == true) {
            var id = $(this).closest('tr').find('td').eq(4).text();
            console.log(id)
            $.ajax({
                url: '.././controller/gestionGroupe.php',
                data: {op: 'delete', id: id},
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                   
                    remplir(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                  
                    console.log(textStatus);
                    
                }
            });
        }
    });
    function remplir(data) {
        var contenu = $('#tableauxx');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr><td><span class="custom-checkbox">' + '<input type="checkbox" id="checkbox1" name="options[]" value="1">' +
                    '<label for="checkbox1"></label>' + '</span></td>';
            ligne += '<td>' + data[i].num + '</td>';
            ligne += '<td>' + data[i].salle + '</td>';
             ligne += '<td >' + data[i].abreveation + '</td>';
                                     ligne += '<td class="no" style="display:none;">' + data[i].id + '</td>'

             
            ligne += '<td>' + '<a href="#editEmployeeModal" class="edit" data-toggle="modal" >' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + '&#xE254;' + '</i></a>' +
                    '<a href="#deleteEmployeeModal" class="delete" data-toggle="modal">' + '<i class="material-icons" data-toggle="tooltip" title="Delete">' + '&#xE872;' + '</i></a>' +
                    '</td></tr>';
        }
        contenu.html(ligne);
    }


});




