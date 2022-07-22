$(function () {
   $(document).on("submit", "#form_register", async function (event) {
    event.preventDefault();
    let formData = new FormData(this);
    await $.ajax(
        getAjaxConfig("/register", {
            async: true,
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,

            // If registration is successful
            success: function ({ responseJSON }) {
                if (response.success === true) {
                    console.log(responseJSON);
                    toastr.success(response.message, 'Success Alert', {timeOut: 300});
                }else {
                    console.log(responseJSON);
                    toastr.info(response.message, 'Information Alert', {timeOut: 300});
                }
            },
            error: function ({ responseJSON }) {
                console.log(responseJSON);
                toastr.error('There is some problem', 'Error Alert', {timeOut: 300});
            },
        })
    );
    $("#form_register")[0].reset();
});

});