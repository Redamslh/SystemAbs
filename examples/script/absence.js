/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function() {
              
    $.ajax({
        url: '.././controller/gestionAbsence.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
                        console.log(data)

        var contenu = $('#tableaux');
        var ligne = "";
        var ligne1="";
        console.log(data)
        for (i = 0; i < data.length; i++) {
            ligne += '<tr id="'+ data[i].id_abs + '"><td><span class="custom-checkbox">' + '<input type="checkbox" id="checkbox1" name="options[]" value="'+ data[i].id_abs + '">' +
                    '<label for="checkbox1"></label>' + '</span></td>';
            ligne += '<td class="ce">' + data[i].CNE + '</td>';
            ligne += '<td class="ce">' + data[i].nom + '</td>';
            ligne += '<td class="ce">' + data[i].prenom + '</td>';
            ligne += '<td class="fil">' + data[i].Date + '</td>';
            ligne += '<td class="fil">' + data[i].debut + '</td>';
            ligne += '<td class="fil">' + data[i].fin + '</td>';
            ligne += '<td class="fil">' + data[i].ETAT + '</td>';
                var ur;

            if(data[i].justification!=null){
 ligne +='<td  class="fil" ><input type="button" class="from-controll btn1" id="' + data[i].justification +'"  value="Voir la Justificatif"/></td>';

 console.log("gg")
            }
            else{
                            ligne += '<td class="fil">' + "Aucune Justicatif Pour l'instant" + '</td>';
            }
            
            ligne += '<td class="no">' + data[i].libelle + '</td>';
            ligne += '<td class="no" style="display:none;">' + data[i].id_abs + '</td>'
            ligne += '<td class="no" style="display:none;">' + data[i].idMat + '</td>'
            ligne += '<td>' + '<a href="#editEmployeeModal" class="edit" data-toggle="modal">' + '<i class="material-icons" data-toggle="tooltip" title="Edit">' + '&#xE254' + '</i></a>' 
                     
                    +'</td></tr>';

        }



        contenu.html(ligne);
        $(".btn1").click(function(evt){
              var target = evt.target,
           targetPanel = evt.target.id;
           console.log(evt.target.id)
     console.log("tttt")
           var storage = firebase.storage();

            var imgRef = storage.ref('images/'+evt.target.id);
    imgRef.getDownloadURL().then(function(url){
                    console.log(imgRef)
                           console.log(url)
                           window.location.href = url;
                        
}
        )
                                       
  
 console.log("gg")
     
       })
        },
        error: function(jqXHR, textStatus, errorThrown) {

            console.log(textStatus);
        }});

    $.ajax({
        url: '.././controller/gestionFiliere_1.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
            console.log(JSON.stringify(data));
            var contenu = $('#lesfiliere');
            var contenu1 = $('#groupes');
            var op = "";
            op = '<option >' + "choisir une filiere" + '</option>';
            for (var i = 0; i < data.length; i++) {
                op += '<option value="' + data[i].idFillere + '">' + data[i].nomFiliere + '</option>';
            }
            contenu.html(op);

        },
        error: function(jqXHR, textStatus, errorThrown) {

            console.log(textStatus);
        }});
        $.ajax({
        url: '.././controller/gestionMatiere.php',
        data: {op: ''},
        type: 'POST',
        success: function(data, textStatus, jqXHR) {
             var contenu1 = $('#matieres');
             var contenu2 = $('.matieres');
                var op = "";
                op = '<option >' + "choisir une matiere" + '</option>';
                for (var i = 0; i < data.length; i++) {
                    op += '<option  value="' + data[i].idMatiere + '">' +data[i].libelle+ '</option>';
                }
                contenu1.html(op);
contenu2.html(op);
        },
        error: function(jqXHR, textStatus, errorThrown) {

           
        }});


    $('#lesannees').on('change', function() {
        console.log("haha");
        $.ajax({
            url: '.././controller/gestionGroupe.php',
            data: {op: 'byid', id: $('#lesfiliere').val(), annee: '1ere annee'},
            type: 'POST',
            success: function(data, textStatus, jqXHR) {
                console.log($("#lesannees").val());
                console.log("hahaha");
                console.log(JSON.stringify(data));
                var contenu1 = $('#groupes');
                var op = "";
                op = '<option >' + "choisir un groupe" + '</option>';
                for (var i = 0; i < data.length; i++) {
                    op += '<option  value="' + data[i].id + '">' +'groupe '+data[i].num+' ' +data[i].typeMatiere+ '</option>';
                }
                contenu1.html(op);

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log($('#lesfiliere').val());
                console.log(textStatus);
            }});
    });
            employ = $(".filieress12");
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
                                            employ.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     $(".filieress12").on('change', function () {
                                    var fil=$('.filieress12').val();
                                    grou=$("#groupes");
                                          $.ajax({
                                        url: '.././controller/gestionFiliere.php',
                                        data: {op: 'Gr',gr:fil},
                                        type: 'POST',
                                        success: function (data, textStatus, jqXHR) {

                                            var option = '<option selected>Choisi un groupe</option>';
                                            for (var i = 0; i < data.length; i++) {
                                                option += '<option value="' + data[i].id + '">' + data[i].num + '</option>';
                                                console.log(option);
                                            }
                                            grou.html(option);
                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {
                                            console.log(textStatus);

                                        }
                                    });
                                     })
                                                 
 $('.imprimers').on('click', function() {

   




                                    var id=$('.filieress12').val();
var id1 =$("#groupes").val();
var contenu = $("#gg");
var contenu2 = $("#gg2");
        $.ajax({
                                          
        url: '.././controller/gestionFiliere.php',
        data: {op: 'Etf',et:id,gr:id1},
        type: 'POST',
            success: function(data, textStatus, jqXHR) {
                console.log(JSON.stringify(data));
                var contenaire = $('#gg');
                var ligne = '';

                for (var i = 0; i < data.length; i++) {
                    ligne += '<tr>';
                    ligne += '<td>' + data[i].idetudiant + '</td>';
                    ligne += '<td>' + data[i].nom + '</td>';
                    ligne += '<td>' + data[i].prenom + '</td>';
                    ligne += '<td>'+'<input type=checkbox/>'+'</td>';
                    ligne += '</tr>';

                }
                                    $("#fl").html("<h3> Filiere :" +data[0].abreveation+"</h3>")
                                           ; $("#fl2").html("<h3> Date :" +$("#date2").val() +"</h3>")
                                                            contenu.html(ligne);
                                                            contenu2.html(ligne);
 console.log(ligne);
                                                            setTimeout(wait(), 3000);

            },
            error: function(jqXHR, textStatus, errorThrown) {

                console.log(textStatus);
            }});
        function wait(){
              var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};
     doc.fromHTML($('#content').html(),25, 10, {
        'width': 150,
            'elementHandlers': specialElementHandlers
    });
    doc.save('Fiche d\'Absence.pdf');
            console.log("where waitiiong....")
       

 
    
    }

    });

$("#addEmployeeModal").on('show.bs.modal', function (e) {
             
         
    
                var imageName;
        $('#up12').click(function() {
console.log("gg")
    //get your select image
    var image=document.getElementById("image1").files[0];
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
         document.getElementById("progres11").value = progress;
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
$('.ajouterr').click(function() {
        var cen = $("#cen");
        var date = $("#date");
        var debut = $("#debut");
        var fin = $("#fin");
        var justufier = $("#js");
        var nonjust = $("#nj");
        var matiere = $("#matieres");
        if ($('.ajouterr').text() == 'Ajouter') {

            if (justufier.is(':checked')) {
                
                verifier = justufier.val();

            }
            if (nonjust.is(':checked')) {
                
                verifier = nonjust.val();
            }

            $.ajax({
                url: '.././controller/gestionAbsence.php',
                data: {op: 'add', cne: cen.val(), idmatiere: matiere.val(), date: date.val(), heuredebut: debut.val(), heurefin: fin.val(), etat: verifier,justifiaction:imageName},
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    alert(justufication)
                    remplir1(data);
                    console.log(verifier)




                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus);
                }
            });



        }
    });
       });
$("#deleteEmployeeModal").on('show.bs.modal', function (e) {
                                         var $modal = $(this),
                esseyId = e.relatedTarget.id;
                var el= e.relatedTarget.innerHTML;
                console.log(el)
            });
    $(document).on('click', '.delete', function() {
       var id = $(this).closest('tr').find('td').eq(10).text();
console.log(id)
          $("#dl").on('click', function() {
           
            $.ajax({
                url: '.././controller/gestionAbsence.php',
                data: {op: 'delete', idabsence: id},
                type: 'POST',
                success: function(data, textStatus, jqXHR) {
                    remplir1(data);
                },
                error: function(jqXHR, textStatus, errorThrown) {

                    console.log(textStatus);
                }
            });
        
    });
    });



    $(document).on('click', '.edit', function() {
        var imageName;
        $('#up').click(function() {

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
        var cen = $(this).closest('tr').find('td').eq(1).text();
        var date = $(this).closest('tr').find('td').eq(4).text();
        var debut = $(this).closest('tr').find('td').eq(5).text();
        var fin = $(this).closest('tr').find('td').eq(6).text();
        var etat = $(this).closest('tr').find('td').eq(7).text();
        var justufiacation = $(this).closest('tr').find('td').eq(8).text();
        var libelle = $(this).closest('tr').find('td').eq(9).text();
        var idabs = $(this).closest('tr').find('td').eq(10).text();
        var idm = $(this).closest('tr').find('td').eq(11).text();
        console.log(cen);
        console.log(date);
        console.log(libelle);
        console.log(idabs);
        $(".cen").val(cen);
        $(".date").val(date);
        $(".debut").val(debut);
        $(".fin").val(fin);
        $(".matieres").val(idm)
document.getElementById("njusto").checked = true;

        $('.modifier').click(function() {
            if ($('.modifier').text() == 'Modifier') {
                var justufier = $("#justo");
                var nonjust = $("#njusto");
                if (justufier.is(':checked')) {
                    console.log(imageName);
                    verifier = justufier.val();

                }
                if (nonjust.is(':checked')) {
                    console.log(nonjust.val());
                    verifier = nonjust.val();
                }
                
                var confirmer = confirm("voulez-vous vraiment modifier ce champ");
                if (confirmer === true) {
                    $.ajax({
                        url: '.././controller/gestionAbsence.php',
                        data: {op: 'update', cne: $(".cen").val(), idmatiere: $(".matieres").val(), date: $(".date").val(), heuredebut: $(".debut").val(), heurefin: $(".fin").val(), idabsence: idabs, etat: verifier,just:imageName},
                        type: 'POST',
                        success: function(data, textStatus, jqXHR) {
                            console.log($(".date").val())

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus);
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


        
    function convert() {
        var doc = new jsPDF();
        var elementHTML = $("#lebody").html();
        doc.fromHTML(elementHTML);
        doc.save('absence');
    }
    function downoldFile(file) {
        $.fileDownload(file)
                .done(function() {
                    alert('File download a success!');
                })
                .fail(function() {
                    alert('File download failed!');
                });
    }
});
