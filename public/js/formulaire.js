$(document).ready(function () {
        $('#inputMarque').on('change', function () {
            let brand = $(this).val();
            // console.log(brand);
            if (brand !== '') {
                $.ajax({
                    url: '/getModels/' + brand,
                    type: 'GET',
                    success: function (data) {
                        console.log(data);
                        $('#inputModele').empty().prop('disabled', false);
                        if (data!=null) {
                            $('#inputModele').append('<option value=""style="color:#E0C1C3;">Les Modeles disponibles</option>');
                        }else{
                            $('#inputModele').append('<option value="">Aucun Modele disponible</option>');
                        }

                        $.each(data, function (index, model) {
                            $('#inputModele').append('<option value="' + model + '">' + model + '</option>');
                        });
                    },
                    error: function () {
                        console.log('Erreur lors de la récupération des modèles');
                    }
                });
                            // $('#inputModele').append('<option value=""style="color:#E0C1C3;">Les Modeles disponibles</option>');
            } else {
                $('#model').empty().prop('disabled', true);
            }
        });



    });
$(document).ready(function () {
    // Annee
    $('#inputModele').on('change', function () {
        let brand = $(this).val();
        // console.log(brand);
        if (brand !== '') {
            $.ajax({
                url: '/getAnnee/' + brand,
                type: 'GET',
                success: function (data) {
                    console.log(data);
                    $('#inputannee').empty().prop('disabled', false);
                    if (data!=null) {
                        $('#inputAnnee').append(`<option value=""style="color:#E0C1C3;">Années disponible pour ` +brand+`</option>`);
                    }else{
                        $('#inputAnnee').append('<option value="">Aucune Années disponible</option>');
                    }

                    $.each(data, function (index, annee) {
                        $('#inputAnnee').append('<option value="' + annee + '">' + annee + '</option>');
                    });

                },
                error: function () {
                    console.log('Erreur lors de la récupération des modèles');
                }
            });
                        // $('#inputAnnee').append('<option value=""style="color:#E0C1C3;">Les Annee disponibles</option>');
        } else {
            $('#model').empty().prop('disabled', true);
        }
    });
})
