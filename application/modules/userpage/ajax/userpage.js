function nextTab(tab) {
    $("#form1").validate();
    if ($("#form1").valid()) {
        $("#" + tab).removeClass("disabled");
        $('#' + tab).css('pointer-events', '');
        $('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');

        $.ajax({
            method: "POST",
            url: BASE_URL + "Userpage/check_price",
            cache: false,
            success: function(result) {
                var str = result.replace(/\"/g, "");
                console.log("success", result);

                document.getElementById('#alerthrg').style.display = 'block';
                alert = document.getElementById('#harga');
                alert.innerHTML = '<strong>Total biaya : Rp' + str + '</strong>';
            },
            error: function(result) {
                console.log("error", result);

            }
        });
    }
}

function prevTab(tab) {
    $('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');
}

$("#form1").validate({
    rules: {
        alamat: "required",
        no_hp: "required",
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

$(document).ready(function() {

    $('#form1').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: BASE_URL + "Userpage/input",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                var str = data.replace(/\"/g, "");
                if (str == "Data berhasil dimasukkan") {
                    swal("Berhasil", str, "success");
                    update("Userpage/aktivitas")
                } else {
                    document.getElementById('#alert2').style.display = 'block';
                    alert = document.getElementById('#msg');
                    alert.innerHTML = '<strong>' + str + '</strong>';
                }
            },
            error: function(XMLHttpRequest, textStatus, errorThrown) {
                swal("Status: " + textStatus, "error");
                swal("Error: " + errorThrown, "error");
            },
        });
    });

});