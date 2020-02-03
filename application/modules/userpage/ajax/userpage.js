function nextTab(tab) {
    $("#form1").validate();
    if ($("#form1").valid()) {
        $("#" + tab).removeClass("disabled");
        $('#' + tab).css('pointer-events', '');
        $('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
    }
}

function prevTab(tab) {
    $('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
}

$("#form1").validate({
    rules: {
        nama: "required",
        tgl_lahir: "required",
        email: "required",
        alamat: "required",
        jenis_workshop: "required"
    },
    errorElement: "em",
    errorPlacement: function(error, element) {
        // Add the `help-block` class to the error element
        error.addClass("help-block");

        if (element.prop("type") === "checkbox") {
            error.insertAfter(element.parent("label"));
        } else {
            error.insertAfter(element);
        }
    }
});
