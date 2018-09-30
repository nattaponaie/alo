$(document).on('click', 'a.page-link', function (event) {
    event.preventDefault();
    ajaxLoad($(this).attr('href'));
});
$(document).on('submit', 'form#frm', function (event) {
    event.preventDefault();
    var form = $(this);
    var data = new FormData($(this)[0]);
    var url = form.attr("action");
    $.ajax({
        type: form.attr('method'),
        url: url,
        data: data,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data) {
            $('.is-invalid').removeClass('is-invalid');
            if (data.fail) {
                for (control in data.errors) {
                    $('input[name=' + control + ']').addClass('is-invalid');
                    $('#error-' + control).html(data.errors[control]);
                }
            } else {
                $('#modalForm').modal('hide');
                ajaxLoad(data.redirect_url);
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            alert("Error: " + errorThrown);
        }
    });
    return false;
});
function ajaxLoad(filename, content) {
    content = typeof content !== 'undefined' ? content : 'content';
    // $('.loading').show();
    $.ajax({
        type: "GET",
        url: filename,
        contentType: false,
        success: function (data) {
            $("#" + content).html(data);
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}
function ajaxDelete(filename, token, content) {
    content = typeof content !== 'undefined' ? content : 'content';
    // $('.loading').show();
    $.ajax({
        type: 'POST',
        data: {_method: 'DELETE', _token: token},
        url: filename,
        success: function (data) {
            // $('#modalDelete').modal('hide');
            $("#modalDelete").hide();
            $("#" + content).html(data);
        },
        error: function (xhr, status, error) {
            alert(xhr.responseText);
        }
    });
}
$('#modalDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    $('#delete_image_id').val(button.data('image_id'));
    $('#delete_token').val(button.data('token'));
    $('#delete_product_id').val(button.data('product_id'));
});
$("#modalUploadImage").on('hide.bs.modal', function () {
    ajaxLoad('view-images?select_products=-1');
});


// toastr.success('ลบรูปสำเร็จแล้ว', 'Success Alert', {timeOut: 3000});