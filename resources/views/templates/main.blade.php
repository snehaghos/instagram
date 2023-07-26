@include('templates.sidebar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">

<head>
    <style>
        .u-website {
            font-size: 15px;

        }
    </style>
</head>

<body style="background-color: #000000">
    <div class="container-fluid">
        <div class=" container mx-0">

            @include('templates.sidebar')
            @yield('content')

        </div>
    </div>

    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
