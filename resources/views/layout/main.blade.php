<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Blockchain Ferlizer Verifier</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content name="description" />
    <meta content name="author" />

    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/default/app.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assets/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
    @stack('css')

</head>

<body>

    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>

    <div id="app" class="app app-header-fixed app-sidebar-fixed app-content-full-height">



        @include('layout.header')
        @include('layout.sidebar')

        <div id="content" class="app-content d-flex flex-column p-0">
            @yield('content')
            @include('layout.footer')
        </div>
        <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top"
            data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>


    <div class="modal modal-message fade" id="modal-message">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalHeader">Modal Message Header</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body" id="modalContent">

                </div>
                <div class="modal-footer">
                    <a href="javascript:;" class="btn btn-info" data-bs-dismiss="modal">Dismiss</a>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/vendor.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/app.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/sweetalert/dist/sweetalert.min.js') }}" type="text/javascript"></script>
    @if (Session::has('success'))
        <script type="text/javascript">
            var handleGritterNotification = function() {

                $.gritter.add({
                    title: 'Notification!',
                    text: '{{ Session::get('success') }}',
                    image: 'https://upload.wikimedia.org/wikipedia/en/archive/3/35/20081119062829%21Information_icon.svg',
                    sticky: true,
                    time: '',
                    class_name: 'my-sticky-class'
                });

            };
            var Notification = function() {
                "use strict";
                return {
                    //main function
                    init: function() {
                        handleGritterNotification();
                    }
                };
            }();
            $(document).ready(function() {
                Notification.init();
            });
        </script>
    @endif

    <script type="text/javascript">
        $('.deleteForm').click(function(e) {
            e.preventDefault();
            var form = $(this).closest('form');


            swal({
                    title: 'Warning!!',
                    text: 'Are you sure you want to delete this resource?',
                    icon: 'info',
                    showCancelButton: true,
                    confirmButtonText: "Yes, delete it!"


                },
                function(isConfirmed) {
                    if (isConfirmed) {
                        form.submit();
                    }
                });
        });


    </script>



    @stack('scripts')

</body>

</html>
