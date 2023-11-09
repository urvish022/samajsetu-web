<!--begin::Head-->
<head>
    <base href="" />
    <x-page-header-component title="{{$title}}" />
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Samajsetu Mobile & Web App" />
    <meta name="keywords" content="Techwebsoft, Samajsetu" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="canonical" href="#" />
    <link rel="shortcut icon" href="{{url('assets/media/logos/favicon.png')}}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{url('assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
</head>
