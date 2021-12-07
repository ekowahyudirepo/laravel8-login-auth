<div class="container">
    <p class="text-muted mt-3">&copy; 2021 SMK Telkom Darul Ulum <u>in collaboration with</u> BLK Jombang <span
            class="float-end">Laravel v{{
            Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</span></p>
</div>

<!-- Jquery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- Sweetalert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(function(){
        $(".confirm").click(function(e){

            // Javascript Confirm
            // if(!confirm("Are you sure?"))
            // {
            //     e.preventDefault()
            // }

            // Confirm with sweetalert
            e.preventDefault()
            swal({
                title: "Are you sure?",
                text: "Logout",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((confirm) => {
                if (confirm) {
                    $(this).parent('form').submit()
                }
            });
        })
    })
</script>
</body>

</html>