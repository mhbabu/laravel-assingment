/*************************
 SWEET ALERT SCRIPT HERE
 *************************/

 $(document.body).on("click", ".action-delete", function (ev) {
    ev.preventDefault();
    let url = $(this).attr("href");
    let table = $(this).attr("table");
    warnBeforeAction(url, table);
});

function warnBeforeAction(URL, table) {
    swal(
        {
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "No, cancel!",
            cancelButtonClass: "btn-danger",
            confirmButtonClass: "btn-primary",
            confirmButtonText: "Yes, proceed!",
            closeOnConfirm: false,
        },
        function () {
            var _token = $('meta[name="csrf-token"]').attr("content");
            $.ajax({
                method: "DELETE",
                url: URL,
                dataType: "json",
                data: { _token: _token },
                success: function (response) {
                    swal(
                        "Deleted!",
                        "Your imaginary file has been deleted.",
                        "success"
                    );
                    $(`#${table}`).DataTable().ajax.reload(null, false);
                },
            });
        }
    );
}

/***********************
 VALIDATION SCRIPT HERE
 **********************/
$(document).ready(function () {
    $('#dataForm').validate({
        errorPlacement: function () {
            return false;
        }
    });
});

/**************************
 DYNAMIC MODAL SCRIPT HERE
 **************************/
$(document.body).on('click','.AppModal',function(e){
    e.preventDefault();
    $('#ModalContent').html('<div style="text-align:center;"><h3 class="text-primary">Loading Form...</h3></div>');
    $('#ModalContent').load(
        $(this).attr('href'),
        function (response, status, xhr) {
            if (status === 'error') {
                alert('error');
                $('#ModalContent').html('<p>Sorry, but there was an error:' + xhr.status + ' ' + xhr.statusText + '</p>');
            }
            return this;
        }
    );
});

/**************************
 LOGO PREVIEW SCRIPT HERE
 **************************/
function changeLogo(input) {
    if (input.files && input.files[0]) {
        $("#logo_err").html('');
        let mime_type = input.files[0].type;
        if (!(mime_type == 'image/jpeg' || mime_type == 'image/jpg' || mime_type == 'image/png')) {
            $("#logo_err").html("Image format is not valid. Only PNG or JPEG or JPG type images are allowed.");
            return false;
        }

        // Image file size validation
        const file = input.files[0];
        const fileSizeInMB = file.size / (1024 * 1024);

        if (fileSizeInMB > 2) {
            swal("Maximum file size 2MB allowed!");
            input.value = '';
            return false;
        }

        let reader = new FileReader();
        reader.onload = function (e) {
            $('#logoViewer').attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}


