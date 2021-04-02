
    $(document).ready(function(){
        // Get current page and set current in nav
        $("nav>ul").find("li").each(function() {
            var navItem = $(this);

            if (navItem.find("a").attr("href") == location.protocol + '//' + location.host + location.pathname) {

                //This li active
                //navItem.css( "background-color", "lightgreen" );
                //Auto 1 active of Parent/Children
                if(navItem.parent().parent().children('.has-arrow').length ) {
                    navItem.parent().parent().children('ul').addClass("in");
                    navItem.parent().parent().children('a').attr("aria-expanded","true");
                    navItem.parent().parent().children('a').addClass("active");
                }
                //Auto 2 active of Parent/Children/Children
                if(navItem.parent().parent().parent().parent().children('.has-arrow').length ) {
                    navItem.parent().parent().parent().parent().children('ul').addClass("in");
                    navItem.parent().parent().parent().parent().children('a').attr("aria-expanded","true");
                    navItem.parent().parent().parent().parent().children('a').addClass("active");
                }
                //Auto 3 active of Parent/Children/Children/Children
                if(navItem.parent().parent().parent().parent().parent().parent().children('.has-arrow').length ) {
                    navItem.parent().parent().parent().parent().parent().parent().children('ul').addClass("in");
                    navItem.parent().parent().parent().parent().parent().parent().children('a').attr("aria-expanded","true");
                    navItem.parent().parent().parent().parent().parent().parent().children('a').addClass("active");
                }
                //Auto 4 active of Parent/Children/Children/Children/Children
                if(navItem.parent().parent().parent().parent().parent().parent().parent().parent().children('.has-arrow').length ) {
                    navItem.parent().parent().parent().parent().parent().parent().parent().parent().children('ul').addClass("in");
                    navItem.parent().parent().parent().parent().parent().parent().parent().parent().children('a').attr("aria-expanded","true");
                    navItem.parent().parent().parent().parent().parent().parent().parent().parent().children('a').addClass("active");
                }
                //Auto 5 active of Parent/Children/Children/Children/Children/Children
                if(navItem.parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().children('.has-arrow').length ) {
                    navItem.parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().children('ul').addClass("in");
                    navItem.parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().children('a').attr("aria-expanded","true");
                    navItem.parent().parent().parent().parent().parent().parent().parent().parent().parent().parent().children('a').addClass("active");
                }
            }
        });

        $(".logout-btn").click(function (){
                Swal.fire({
                title: 'Are you sure?',
                text: "You can login again in this system!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, logout it!'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        method: 'POST',
                        url: "/logout",
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        success: function (response) {
                            if (response.type == 'success'){
                                Swal.fire(
                                    'Thank you !',
                                    response.message,
                                    response.type
                                )
                                location.replace( response.url);
                            }else{
                                Swal.fire(
                                    'Sorry !',
                                    response.message,
                                    response.type
                                )
                            }
                        },
                        error: function (xhr) {
                            var errorMessage = '<div class="card bg-danger">\n' +
                                '                        <div class="card-body text-center p-5">\n' +
                                '                            <span class="text-white">';
                            $.each(xhr.responseJSON.errors, function(key,value) {
                                errorMessage +=(''+value+'<br>');
                            });
                            errorMessage +='</span>\n' +
                                '                        </div>\n' +
                                '                    </div>';
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                footer: errorMessage
                            })
                        },
                    })
                }
            })
        });

        // subscribe now
        $('.subscribe-now-btn').click(function (){
            $.ajax({
                method: 'POST',
                url: "/subscribe/store",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: { email:  $('#subscribe-email').val()},
                dataType: 'JSON',
                beforeSend: function (){
                    $(".subscribe-now-btn").prop("disabled",true);
                },
                complete: function (){
                    $(".subscribe-now-btn").prop("disabled",false);
                },
                success: function (response) {
                    if (response.type == 'success'){
                        $('#subscribe-email').val("");
                        Swal.fire(
                            'Thank you !',
                            response.message,
                            'success'
                        )
                    }else{
                        Swal.fire(
                            'Sorry !',
                            response.message,
                            response.type
                        )
                    }
                },
                error: function (xhr) {
                    var errorMessage = '<div class="card bg-danger">\n' +
                        '                        <div class="card-body text-center p-5">\n' +
                        '                            <span class="text-white">';
                    $.each(xhr.responseJSON.errors, function(key,value) {
                        errorMessage +=(''+value+'<br>');
                    });
                    errorMessage +='</span>\n' +
                        '                        </div>\n' +
                        '                    </div>';
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        footer: errorMessage
                    })
                },
            })
        });

        //Chose image
        $(".image-chose-btn").click(function (){
            $(this).parent().find('.image-importer').click();
        })

        //Display image
        $(".image-importer").change(function (event){
            if(event.target.files.length > 0) {
                $(this).parent().find('.image-display').attr("src",URL.createObjectURL(event.target.files[0]));
            }
        })

        //Reset image
        $(".image-reset-btn").click(function (){
            $(this).parent().find('.image-display').attr("src",$(this).val());
            $(this).parent().find('.image-importer').val('');
        })
        //Reset image

        $(".image-submit-btn").click(function (){
            // alert($(this).val());
            var url = $(this).val();
            var formData = new FormData();
            var this_btn = $(this);
            formData.append('image', $(this).parent().find('.image-importer')[0].files[0]);
            $.ajax({
                method: 'POST',
                url: url,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function (){
                    this_btn.prop("disabled",true);
                },
                complete: function (){
                    this_btn.prop("disabled",false);
                },
                success: function (data) {
                    if (data.type == 'success'){
                        Swal.fire({
                            position: 'top-end',
                            icon: data.type,
                            title: data.message,
                            showConfirmButton: false,
                            timer: 1500
                        });
                        this_btn.parent().find(".image-reset-btn").val(data.image_url);
                    }else{
                        Swal.fire({
                            icon: data.type,
                            title: 'Oops...',
                            text: data.message,
                            footer: 'Something went wrong!'
                        });
                    }
                    },
                    error: function (xhr) {
                        var errorMessage = '<div class="card bg-danger">\n' +
                            '                        <div class="card-body text-center p-5">\n' +
                            '                            <span class="text-white">';
                        $.each(xhr.responseJSON.errors, function(key,value) {
                            errorMessage +=(''+value+'<br>');
                        });
                        errorMessage +='</span>\n' +
                            '                        </div>\n' +
                            '                    </div>';
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            footer: errorMessage
                        });
                    },
            })
        })
    });


    function delete_function(objButton){
        var url = objButton.value;
        // alert(objButton.value)
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: 'DELETE',
                    url: url,
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {
                        if (data.type == 'success'){
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted. '+data.message,
                                'success'
                            )
                            if(data.url){
                                setTimeout(function() {
                                    location.replace(data.url);
                                }, 800);//
                            }else{
                                setTimeout(function() {
                                    location.reload();
                                }, 800);//
                            }
                        }else{
                            Swal.fire(
                                'Wrong!',
                                'Something going wrong. '+data.message,
                                'warning'
                            )
                        }
                    },
                })
            }
        })
    }

    // Listen for click on toggle checkbox
    $('.select-all').click(function(event) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = true;
        }
    });

    $('.un-select-all').click(function(event) {
        var checkboxes = document.querySelectorAll('input[type="checkbox"]');
        for (var checkbox of checkboxes) {
            checkbox.checked = false;
        }
    });



