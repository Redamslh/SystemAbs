/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
       
    $.ajax({
        url: '.././controller/gestionEtudiant.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {

            remplir(data);

        },
        error: function(jqXHR, textStatus, errorThrown) {
            ;
        }});
    $.ajax({
        type: "GET",
        url: "script/toto.php",
        error: function(jqXHR, textStatus, errorThrown) {
            // message en cas d'erreur :
            alert("Error !: ");
        },
        success: function(data, textStatus, jqXHR) {
            // affiche le contenu du fichier dans le conteneur dédié :


        }});
    $.ajax({
        url: '.././controller/gestionMatiere.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {

            var contenu = $('#matieres');
            var op = "";
            op = '<option >' + "choisir une matiere" + '</option>';
            for (var i = 0; i < data.length; i++) {
                op += '<option value="' + data[i].idmatiere + '">' + data[i].libelle + '</option>';
            }
            contenu.html(op);

        },
        error: function(jqXHR, textStatus, errorThrown) {


        }});
    $.ajax({
        url: '.././controller/gestionFiliere2.php',
        data: {op: 'forStudent'},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {

            var contenu = $('.filieres');
            var contenu1 = $('.filieress');
            var contenu3 = $(".filieresss");
            var op = "";
            op = '<option >' + "choisir une filiere" + '</option>';
            for (var i = 0; i < data.length; i++) {
                op += '<option value="' + data[i].idFillere + '">' + data[i].abreveation + '</option>';
            }
            contenu.html(op);
            contenu1.html(op);
            contenu3.html(op);
        },
        error: function(jqXHR, textStatus, errorThrown) {


        }});
     $(document).on('click', '#ajt', function() {
                           var imageName;
        $('#up').click(function() {
console.log('gg')
    //get your select image
    var image=document.getElementById("image").files[0];
    //now get your image name
               imageName =image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
                document.getElementById("progres1").value = progress;

        console.log("upload is " + progress +" done");
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downlaodURL) {
            //get your upload image url here...
            console.log(downlaodURL);
        });
    });
    
})

        $('.ajouter').click(function() {

            

            $.ajax({
                url: '.././controller/gestionEtudiant.php',
                data: {op: 'add', idetudiant: $("#cenn").val(), tel: $('#tel12').val(), telP: $('#tel13').val(), nom: $("#nomm").val(), idFiliere: $('.filieresss').val(),niveau:1 ,prenom: $('#prenomm').val(),mail:$('#mail').val(),Nai:$('#date').val(),img:"image/"+imageName,Grp:$('#groupe').val()},
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                   console.log(data)
                    remplir(data);





                },
                error: function(jqXHR, textStatus, errorThrown) {
                    
                }
            });


        });
    });

    $(document).on('click', '.delete', function() {
        var confirmer = window.confirm("etes-vous sur(e) de vouloir supprimer le champ");


        if (confirmer == true) {
            var ce = $(this).closest('tr').find('td').eq(1).text();

            $.ajax({
                url: '.././controller/gestionEtudiant.php',
                data: {op: 'delete', idetudiant: ce},
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {


                }
            });
        }
    });


    $(document).on('click', '.edit', function() {
        
         var imageName;
        $('#up1').click(function() {
console.log('gg')
    //get your select image
    var image=document.getElementById("image1").files[0];
    //now get your image name
               imageName =image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);
console.log("hhhhh"+imageName)
alert("waloo")
    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        document.getElementById("progres").value = progress;
        console.log("upload is " + progress +" done");
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downlaodURL) {
            //get your upload image url here...
            console.log(downlaodURL);
        });
    });
    
})
        var ce = $(this).closest('tr').find('td').eq(1).text();
        var no = $(this).closest('tr').find('td').eq(2).text();
        var pre = $(this).closest('tr').find('td').eq(3).text();
        var fil = $(this).closest('tr').find('td').eq(4).text();
                       var fil2=$(this).closest('tr').find('td').eq(9).text();
                       var fil3=$(this).closest('tr').find('td').eq(10).text();
        var niv = $(this).closest('tr').find('td').eq(5).text();
        var tel = $(this).closest('tr').find('td').eq(6).text();
        var telp = $(this).closest('tr').find('td').eq(7).text();
        var id = $(this).closest('tr').find('td').eq(8).text();
        var gr = $(this).closest('tr').find('td').eq(11).text();
        var em = $(this).closest('tr').find('td').eq(12).text();
        $('#groupe1').val(fil3)
        console.log(fil3)
        $('#nom1').val(no);
        $('#prenom1').val(pre);
$('.filieress1').val(fil2)
        $("#cen1").val(ce);
        $("#tel15").val(tel);
        $("#tel16").val(telp);
        $('#mail1').val(fil3)
        $('#date1').val(gr)
        $('.modifier').click(function() {
            if ($('.modifier').text() == 'Modifier') {
                var confirmer = confirm("voulez-vous vraiment modifier ce champ");
                if (confirmer === true) {
                    $.ajax({
                        url: '.././controller/gestionEtudiant.php',
                        data: {op: 'update', idetudiant: $("#cen1").val(), tel: $("#tel15").val(), telP: $("#tel16").val(), nom: $('#nom1').val(), idFiliere:  $('.filieress1').val(),niveau:1 ,prenom: $('#prenom1').val(),mail:$('#mail1').val(),Nai:$('#date1').val(),img:"image/"+imageName,Grp:$('#groupe1').val()},
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {
                            console.log($('#groupe1').val())
                            remplir(data);

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            
                        }
                    });
                }

            }
        });
    });
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function() {
        if (this.checked) {
            checkbox.each(function() {
                this.checked = true;
            });
        } else {
            checkbox.each(function() {
                this.checked = false;
            });
        }
    });
    checkbox.click(function() {
        if (!this.checked) {
            $("#selectAll").prop("checked", false);
        }
    });
    function remplir(data) {
        var contenu = $('#tableau');
        var ligne = "";
        for (i = 0; i < data.length; i++) {
            ligne += '<tr id="'+ data[i].idetudiant + '"><td><span class="custom-checkbox">' + '<input type="checkbox" id="checkbox1" name="options[]" value="'+ data[i].idetudiant + '">' +
                    '<label for="checkbox1"></label>' + '</span></td>';
         ligne += '<td class="ce">' + data[i].idetudiant + '</td>';

            ligne += '<td class="no">' + data[i].nom + '</td>';
            ligne += '<td>' + data[i].prenom + '</td>';
            ligne += '<td>' + data[i].abreveation + '</td>';
            ligne += '<td>' + data[i].num + '</td>';
            ligne += '<td>' + data[i].tel + '</td>';
            ligne += '<td>' + data[i].telP + '</td>';
ligne += '<td class="no" style="display:none;">' + data[i].idFillere + '</td>'
ligne += '<td class="no" style="display:none;">' + data[i].idgrp + '</td>'
ligne += '<td>' + data[i].email + '</td>';
ligne += '<td>' + data[i].datedenaissance + '</td>';
             ligne += '<td>' + '<a href="#editEmployeeModal" class="edit" data-toggle="modal">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + '&#xE254' + '</i></a>' 
                     
                    +'</td></tr>';
        }
        contenu.html(ligne);

    }

});
