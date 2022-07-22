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
                notification("success", "Your Account has been registered. You can login now!", responseJSON.message);
            },
            error: function ({ responseJSON }) {
                console.log(responseJSON);
                notification("error", "Please provide Appropriate Information.", responseJSON.message);
            },
        })
    );
});

});