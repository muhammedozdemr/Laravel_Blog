//delete button icon
const CSRF_TOKEN = $('meta[name="csrf-token"]:eq(0)').attr('content');
$('.delete-icon').on('click', function (e) {
    const btn = $(this);
    const title = btn.data('title') || "Emin misin?";
    const text = btn.data('text') || "Bu geri alınamaz";
    const yes = btn.data("yes") || "Evet";
    const no = btn.data("no") || "Hayır";
    const url = btn.data("url");
    Swal.fire({
        title,
        text,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: yes,
        cancelButtonText: no
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "post",
                url,
                data: {
                    _token: CSRF_TOKEN
                },
                success: (response) => {
                    swal.fire(
                        'Silindi!',
                        'Silindi.',
                        'success'
                    ).then(function () {
                        location.reload();
                    })
                }
            })
        }
    });
})

