function nextTab(tab) {
    $("#form1").validate();
    if ($("#form1").valid()) {
        $("#" + tab).removeClass("disabled");
        $('#' + tab).css('pointer-events', '');
        $('.nav-tabs a[href="#tabs-' + tab + '"]').tab('show');

        jmlpeserta = $('input[name="nama[]"]').length;
        $.ajax({
            method: "POST",
            url: BASE_URL + "Userpage/check_price",
            data: { jmlpeserta: jmlpeserta },
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
        "nama[]": "required",
        "email[]": "required",
        "alamat[]": "required",
        "no_hp[]": "required",
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
            $("<br>").insertAfter(error);
        }
    }
});

$(document).ready(function() {

    var max_fields = 2; //maximum input boxes allowed
    var wrapper_nama = $(".wrapper-nama");
    var wrapper_email = $(".wrapper-email");
    var wrapper_alamat = $(".wrapper-alamat");
    var wrapper_no_hp = $(".wrapper-no_hp");
    var add_button = $(".add_field_button"); //Add button ID


    var x = 1; //initlal text box count
    $(add_button).click(function(e) { //on add input button click
        e.preventDefault();
        if (x < max_fields) { //max input box allowed
            x++; //text box increment
            $(wrapper_nama).append('<div class="form-group"><label style="color:black;" for="nama">Nama partner :</label><input type="text" name="nama[]" class="formdaftar form-control nama' + x + '"><a style="color:red;" id="' + x + '" href="#" class="remove_field btn-link"><i class="fa fa-close"></i> CANCEL</a></div>'); //add input box
            $(wrapper_email).append('<div class="form-group"><label style="color:black;" for="email">Email partner :</label><input type="email" name="email[]" class="formdaftar form-control email' + x + '"></div>'); //add input box
            $(wrapper_alamat).append('<div class="form-group"><label style="color:black;" for="alamat">Alamat partner :</label><input type="text" name="alamat[]" class="formdaftar form-control alamat' + x + '"></div>'); //add input box
            $(wrapper_no_hp).append('<div class="form-group"><label style="color:black;" for="no_hp">No HP partner :</label><input type="text" name="no_hp[]" class="formdaftar form-control no_hp' + x + '"></div>'); //add input box
        } else {
            alert("Anda hanya dapat memilih 1 partner")
        }
    });

    $(wrapper_nama).on("click", ".remove_field", function(e) { //user click on remove text
        e.preventDefault();
        var current = $(this).attr('id');
        // alert(current);
        $(".nama" + current).parent('div').remove();
        $(".email" + current).parent('div').remove();
        $(".alamat" + current).parent('div').remove();
        $(".no_hp" + current).parent('div').remove();
        x--;
    })

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