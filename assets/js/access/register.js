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
                console.log(responseJSON);
                notification("success", "", responseJSON.message);
            },
            error: function ({ responseJSON }) {
                console.log(responseJSON);
                notification("error", "", responseJSON.message);
            },
        })
    );
    $("#form_register")[0].reset();
});

});