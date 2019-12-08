// import { log } from "util";

$(function(e){

    // function getFormData($form){
    //     var unindexed_array = $form.serializeArray();
    //     var indexed_array = {};

    //     $.map(unindexed_array, function(n, i){
    //         indexed_array[n['name']] = n['value'];
    //     });

    //     return indexed_array;
    // }
    // var data = getFormData(form);
    $('.select2').select2({
        // theme: "bootstrap",
        theme: 'bootstrap4',
        width: 'style',
	});


    // $("#form-book").submit(function(e) {
    //     e.preventDefault(); // avoid to execute the actual submit of the form.
    //     var form = $(this);
    //     var url = "http://tarekmohamedreda-001-site1.atempurl.com/api/TripData/SearchTrips";
    //     $.ajax({
    //         type: 'POST',
    //         url: url,
    //         data: { 'TripOfficeFrom_Code': $("#TripOfficeFrom_Code").val(), 'TripOfficeTo_Code': $("#TripOfficeTo_Code").val(), 'TripDateTimeFrom': $("#TripDateTimeFrom").val(), 'TripDateTimeTo': $("#TripDateTimeTo").val() },
    //         dataType: 'json',
    //         success: function(data)
    //         {
    //             console.log(data);
    //         }
    //     });
    // });
});
