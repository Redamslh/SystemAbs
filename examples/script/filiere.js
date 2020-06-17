$(document).ready(function() {
     profe = $("#pro");
                                    $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'prof'},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {
                                            console.log(data[0].idFillere);
                                            console.log(data[0].abreveation);
                                            var option = '<option selected>Choisi un Cordinateur</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].id + '">' + data[i].nom+data[i].prenom + '</option>';
                                                console.log(option);
                                            }
                                            profe.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
    $.ajax({
        url: '.././controller/gestionFiliere2.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {


            remplir(data);

        },
        error: function(jqXHR, textStatus, errorThrown) {
           
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
    $.ajax({
        url: '.././controller/gestionDepartement.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
           
            var contenu1 = $('#depart');
            var cji = $('#depart1');
            var op = "";
            op = '<option >' + "choisir un departement" + '</option>';
            for (var i = 0; i < data.length; i++) {
                op += '<option  value="' + data[i].idDep + '">' + data[i].nomDepartement + '</option>';
            }
            contenu1.html(op);
            cji.html(op);

        },
        error: function(jqXHR, textStatus, errorThrown) {
           
        }});

    $('.ajouterr').click(function() {


        $.ajax({
            url: '.././controller/gestionFiliere2.php',
            data: {op: 'add', nomfiliere: $("#nomfil").val(), abreviation: $("#abrev").val(), idDep: $("#depart").val()},
            type: 'POST',
            success: function(data, textStatus, jqXHR) {
                if (data != 1) {
                    alert("Vous avez entrer abreviations ou nom deja existees svp reverfier");
                }

                remplir(data);





            },
            error: function(jqXHR, textStatus, errorThrown) {
               
            }
        });



    }
    );
    $(document).on('click', '.edit', function() {
        var abrev = $(this).closest('tr').find('td').eq(1).text();
        var nomfil = $(this).closest('tr').find('td').eq(2).text();
        var id = $(this).closest('tr').find('td').eq(4).text();
        console.log(id)
       var ab= $("#abrev1").val(abrev);
            var ab1=$("#nomfil1").val(nomfil);
        
        $('.modifier').click(function() {
            if ($('.modifier').text() == 'Modifier') {

                var confirmer = confirm("voulez-vous vraiment modifier ce champ");



                if (confirmer === true) {
                    $.ajax({
                        url: '.././controller/gestionFiliere2.php',
                        data: {op: 'update', nomfiliere: $("#nomfil1").val(), abreviation: $("#abrev1").val(), idDep: $("#depart1").val(), idfiliere: id},
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {
                            remplir(data);

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                                                        console.log($("#depart1").val()+$("#nomfil1").val()+$("#abrev1").val())

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
            console.log(id);
            $.ajax({
                url: '.././controller/gestionFiliere2.php',
                data: {op: 'delete', id: id},
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
console.log(id)
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
            ligne += '<tr id="'+ data[i].idFillere + '"><td><span class="custom-checkbox">' + '<input type="checkbox" id="checkbox1" name="options[]" value="'+ data[i].idFillere + '">' +
                    '<label for="checkbox1"></label>' + '</span></td>';
            ligne += '<td>' + data[i].abreveation + '</td>';
            ligne += '<td>' + data[i].nomFiliere + '</td>';
            ligne += '<td>' + data[i].nomDepartement + '</td>';
                        ligne += '<td class="no" style="display:none;">' + data[i].idFillere + '</td>'
             ligne += '<td>' + '<a href="#editEmployeeModal" class="edit" data-toggle="modal">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + '&#xE254' + '</i></a>' 
                     
                    +'</td></tr>';
        }
        contenu.html(ligne);
    }


});




