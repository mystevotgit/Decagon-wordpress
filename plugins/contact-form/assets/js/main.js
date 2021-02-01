jQuery(function ($) {

    $("tr").on("click", ".column6", function () {
        //Get post_id
        const post_id = $(this).attr('id')
        const el = $(this);
        const confirmDelete = confirm("Are you sure you want to delete this Message?");
        if (confirmDelete == true) {
            // AJAX Request
            $.ajax({
                url: jb_decagon_contact_params.ajaxurl,
                type: 'POST',
                data: { post_id: post_id },
                success: function (response) {
                    console.log(response)
                    if (response === '1') {
                        el.closest('tr').fadeOut(800, function () {
                            $(this).remove();
                        });

                    } else {
                        alert('Invalid post')
                    }
                }
            });
        }
    });



})