<!doctype html>
<html lang="en">

<head>
    <title> @lang('Title') </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <div class="page-content">
        <div class="container">

            <!-- start page title -->
            <div class="row">

                <div class="col-12 mt-4">
                    <div class="card"
                        style="background: #dcdbea5e;
    backdrop-filter: blur(4px);
    -webkit-backdrop-filter: blur(4px);">
                        <div class="card-body">


                            {{-- if with success --}}
                            @if (session('success2'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="mdi mdi-check-all me-2"></i>
                                    {{ session('success2') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif


                            <h4 class="card-title text-center">{{ $name_file }}</h4>

                            <form method="post" id="form1" action="{{ route('admin2.translateUpdate') }}">
                                @csrf
                                @php
                                    $keys = array_unique($keys);

                                @endphp

                                <div class="form-group mt-2">
                                    <div class="row justify-content-center align-items-center g-2">
                                        <div class="col-md-2 text-center fs-6 fw-bold"> @lang('English') </div>
                                        <div class="col-md-2 text-center fs-6 fw-bold"> @lang('Arabic') </div>
                                        <div class="col-md-2 text-center fs-6 fw-bold"> @lang('Kurdis') </div>
                                        @foreach ($keys as $key)
                                            @if ($key != '')
                                                <div class="col-12">
                                                    <div class="row justify-content-center align-items-center g-2">

                                                        <div class="col">
                                                            <input type="text" name="en[{{ $key }}]" @isset($en[$key]) value="{{ $en[$key] }}" @else value="{{ $key }}" @endisset class="form-control live_update">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" name="ar[{{ $key }}]" @isset($ar[$key]) value="{{ $ar[$key] }}" @else value="{{ $key }}" @endisset class="form-control live_update">
                                                        </div>
                                                        <div class="col">
                                                            <input type="text" name="ku[{{ $key }}]" @isset($ku[$key]) value="{{ $ku[$key] }}" @else value="{{ $key }}" @endisset class="form-control live_update">
                                                        </div>

                                                    </div>

                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>





                                <hr>
                                <center>
                                    <button class="button" type="submit"> @lang('Save Translations') </button>
                                </center>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
        </div> <!-- container-fluid -->
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="{{ asset('js/ajax.form.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

    <style>
        .toastify.on {
            border-radius: 8px;
        }

        /*! CSS Used from: https://apvarun.github.io/toastify-js/example/script.css */
        * {
            box-sizing: border-box;
        }

        .button {
            overflow: hidden;
            margin: 10px;
            padding: 12px 12px;
            cursor: pointer;
            -webkit-transition: all 200ms ease-in-out;
            transition: all 200ms ease-in-out;
            text-align: center;
            white-space: nowrap;
            text-decoration: none;
            text-transform: none;
            text-transform: capitalize;
            border-radius: 4px;
            font-size: 13px;
            font-weight: 500;
            line-height: 1.3;
            min-width: 100px;
            display: inline-block;
            box-shadow: 0 5px 20px rgba(22, 22, 22, 0.15);
            color: #5477f5;
            background-color: Snow;
            border: 1px solid #5477f5;
        }

        .button:hover {
            color: #FFFFFF;
            background: linear-gradient(135deg, #73a5ff, #5477f5);
            border: 1px solid transparent;
        }

        .page-content {
            overflow: hidden;
            display: flex;
            height: 100%;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            background-color: whitesmoke;
            background-image: url(https://apvarun.github.io/toastify-js/example/pattern.png);
        }
    </style>
    <script>
        function toastText(t) {
            Toastify({
                text: t,
                duration: 3000,
                gravity: "top", // `top` or `bottom`
                position: "left", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "linear-gradient(to right, #00b09b, #96c93d)",
                },
                onClick: function() {} // Callback after click
            }).showToast();
        }
        $(document).ready(function(e) {
            $("#form1").ajaxForm({
                beforeSend: function() {
                    toastText("Saving...");
                },
                complete: function(data) {
                    if (data.status == 200) {
                        toastText("Saved Successfully.");
                    }
                    if (data.status == 422) {
                        toastText(data.responseJSON.message);
                    }
                }
            });
            let typingTimer;
            $(".live_update").on("input", function() {
                var name = $(this).attr("name");
                var val = $(this).val();
                clearTimeout(typingTimer);
                typingTimer = setTimeout(function () {
                    toastText("Saving...");
                    $.post("{{ route('admin2.translateUpdateOne') }}", {
                        _token: "{{ csrf_token() }}",
                        [name]: val,
                    }, function(){
                        toastText("Saved Successfully.");
                    });
                }, 3000);

            });

        });
    </script>


</body>

</html>
