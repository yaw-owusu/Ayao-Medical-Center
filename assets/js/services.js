(function () {

    // set the footer date
    $('#pageDate').html((new Date()).getFullYear());



    // Administrator section
    // let confirmBookAppointment = $("#confirmBookAppointment");

    // let confirmappointmentmodal = $("#confirmappointmentmodal");

    let createAdminForm = $("#createAdminForm");

    createAdminForm.validate({

        submitHandler: function (form) {

            form.preventDefault();

            // confirmappointmentmodal.modal('show');

            // confirmBookAppointment.click(function (evt) {

            //     evt.preventDefault();

            //     confirmappointmentmodal.modal('hide');
            //     successmodal.modal('show');

            setTimeout(function () {
                form.submit();

            }, 2000);

            // });




        }

    });

    
    //Updation


    //--admin
    $("select#updateAdminId").on("change",function (evt) { 

        evt.preventDefault();

        let id = $(this).val();

        if(id == ""){

        }
        
        getAdminDetails(id);


     })






    // Utility Functions

    function getAdminDetails(id) {
        $.ajax({
            type: "get",
            "url": `index.php?action=getAdminDetails&id=${id}`,
            timeout: 10000,
            error: function (xhr, staus, error) {
                alert(`Error: ${xhr.status} - ${error}`);
            },
            success: function (response) {

                console.log(response);

                // $("#totalWorkersCount").html(response.info.totalWorkersCount);

                // $("#sterlingCompanyCount").html(response.info.sterlingCompanyCount);

                // $("#sterlingCompanyCount").html(response.info.sterlingCompanyCount);

            }
        });
    }


})();