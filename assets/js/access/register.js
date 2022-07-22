$(function () {
   $(document).on("submit", "#form_register", async function (event) {
    event.preventDefault();
    let formData = new FormData(this);
    
    if ($("#form_register").parsley().validate()) {
    
        await $.ajax(
            getAjaxConfig("/register", {
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,

                // If registration is successful
                success: function ({ responseJSON }) {
                    console.log(responseJSON);
                    notification("success", "", responseJSON.message.join());
                },
                error: function ({ responseJSON }) {
                    console.log(responseJSON);
                    notification("error", "", responseJSON.message.join());
                },
            })
        );
        $("#form_register")[0].reset();
    };
});

});