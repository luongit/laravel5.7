<!DOCTYPE html>
<html ng-app="app" ng-controller="AppController">
<head>
    <meta charset="utf-8">
    <!-- Favicon icon -->
    <title>Admin cPanel - @yield('title')</title>
    <!-- Custom CSS -->
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/dist')}}/css/media.css">
    <link rel="stylesheet" href="{{url('public/dropzone')}}/basic.min.css">
    <link rel="stylesheet" href="{{url('public/dropzone')}}/dropzone.min.css">
    <link rel="stylesheet" href="{{url('public')}}/lightbox/css/lightbox.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('public/home')}}/font-awesome/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link href="{{url('public')}}/explore/css/file-explore.css" rel="stylesheet" type="text/css">
      <script type="text/javascript">
        var app = {
            _url:'<?php echo url('/');?>',
            _admin_url:'<?php echo url('/');?>/admin/',
            _api:'<?php echo url('/');?>/api/'
        };
      </script>
      
</head>
<body>

    <div class="media-index">
       @yield('content')
    </div>
    <script src="{{url('public')}}/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{url('/')}}/public/dist/js/event.js"></script>
    <script type="text/javascript" src="{{url('public')}}/dropzone/dropzone.min.js"></script>
    <!-- <script type="text/javascript" src="{{url('public')}}/dropzone/dropzone.config.js"></script> -->
    <script type="text/javascript" src="{{url('public/angular')}}/angular.min.js"></script>
    <script type="text/javascript" src="{{url('public/dropzone')}}/app.js"></script>
    <script src="{{url('public')}}/lightbox/js/lightbox-plus-jquery.min.js"></script>
    <script src="{{url('public')}}/explore/js/file-explore.js"></script> 
    <!-- <script src="{{url('public')}}/explore/js/context.js"></script>  -->
    <script type="text/javascript">
            $(document).ready(function() {
                $(".file-tree").filetree();
            });
            $(".tree-item").on('contextmenu',function(e){
                if (e.ctrlKey) return;
                var data_url  = $(this).data('url');
                var data_name  = $(this).data('name');
                $('#context li a').data("url", data_url).data("name", data_name)
                var $menu = $('#context')
                .show()
                .css({
                    position: "absolute",
                    left: getMenuPosition(e.clientX, 'width', 'scrollLeft')-25,
                    top: getMenuPosition(e.clientY, 'height', 'scrollTop')
                }).off('click')
                .on('click', 'a', function (e) {
                        $menu.hide();
                });
               
                return false;
            });

            //make sure menu closes on any click
            $('body').click(function () {
                $("#context").hide();
            });

            function getMenuPosition(mouse, direction, scrollDir) {
                var win = $(window)[direction](),
                    scroll = $(window)[scrollDir](),
                    menu = $("#context")[direction](),
                    position = mouse + scroll;
                // opening menu would pass the side of the page
                if (mouse + menu > win && menu < mouse) 
                    position -= menu;
                return position;
            }    
        
    </script>
</body>
</html>