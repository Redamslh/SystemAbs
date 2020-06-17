/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
    $.ajax({
        url: '.././controller/gestionDepartement.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {

            remplir1(data);



        },
        error: function(jqXHR, textStatus, errorThrown) {

            console.log(textStatus);
        }});


    $.ajax({
        url: '.././controller/gestionDepartement.php',
        data: {op: 'notyet'},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
            var contenu2 = $("#chef1");
            var contenu1 = $('#chef');
            var op = "";
            op = '<option >' + "choisir un chef" + '</option>';
            for (var i = 0; i < data.length; i++) {
                op += '<option  value="' + data[i].idutulisateur + '">' + data[i].nom + '</option>';
            }
            contenu1.html(op);

            contenu2.html(op);

        },
        error: function(jqXHR, textStatus, errorThrown) {

            console.log(textStatus);
        }});
     $(document).on('click', '.delete', function() {
        var confirmer = window.confirm("etes-vous sur(e) de vouloir supprimer le champ");


        if (confirmer == true) {
            var id = $(this).closest('tr').find('td').eq(3).text();
            console.log(id);
            $.ajax({
                url: '.././controller/gestionDepartement.php',
                data: {op: 'delete', id: id},
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
        var abrev = $(this).closest('tr').find('td').eq(1).text();
        var nom = $(this).closest('tr').find('td').eq(2).text();

        var iddep = $(this).closest('tr').find('td').eq(4).text();
        console.log(iddep);
        $("#abrev1").val(abrev);
        $("#nomdep1").val(nom);
        console.log($("#nomdep1").val());
       console.log( $("#chef1").val());
       console.log($("#abrev1").val());
       console.log(iddep);
        $('.modifier').click(function() {
            if ($('.modifier').text() == 'Modifier') {
            var confirmer = confirm("voulez-vous vraiment modifier ce champ");
                if (confirmer === true) {
                    
                $.ajax({
                    url: '.././controller/gestionDepartement.php',
                    data: {op: 'update', nomDepartement: $("#nomdep1").val(), idchefdep: $("#chef1").val(), abrev: $("#abrev1").val(), idDep: iddep},
                    type: 'POST',
                    success: function(data, textStatus, jqXHR) {
                        alert(JSON.stringify(data));
                        remplir1(data);

                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                       alert(JSON.stringify(data));
                        console.log(textStatus);
                    }});
            }
            ;
        }
        });
    });





    $('.ajouterr').on('click', function() {
        $.ajax({
            url: '.././controller/gestionDepartement.php',
            data: {op: 'add', nomDepartement: $("#nomdep").val(), idchefdep: $("#chef").val(), abrev: $("#abrev").val()},
            type: 'POST',
            success: function(data, textStatus, jqXHR) {



            },
            error: function(jqXHR, textStatus, errorThrown) {

                alert(textStatus);
            }});

    });

    function remplir1(data) {
        var contenu = $('#tableauxx');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr id="'+ data[i].idDep + '"><td><span class="custom-checkbox">' + '<input type="checkbox" id="checkbox1" name="options[]" value="'+ data[i].idDep + '">' +
                    '<label for="checkbox1"></label>' + '</span></td>';
            ligne += '<td class="fil">' + data[i].nomDepartement + '</td>';
            ligne += '<td class="fil">' + data[i].nom + ' ' + data[i].prenom + '</td>';
                                    ligne += '<td class="no" style="display:none;">' + data[i].idDep + '</td>'

             ligne += '<td>' + '<a href="#editEmployeeModal" class="edit" data-toggle="modal">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + '&#xE254' + '</i></a>' 
                     
                    +'</td></tr>';
        }
        contenu.html(ligne);
    }
    function convert_html_to_pdf() {
        var doc = new jsPDF();
        var elementHtml = $("#limprimable").html();
        console.log(elementHtml);



        doc.fromHTML(elementHtml, 15, 15, {
            'width': 170,
        });
        doc.save("sample-document.pdf");
    }
    
});
