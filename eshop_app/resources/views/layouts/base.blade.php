<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Včelárske potrebee</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" type="image/x-icon" href="../images/logo_final.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.2.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" async></script>

</head>

<body>
    @include('components.user_info_popup')

    @include('components.navbar')

    @include('components.side_menu')

    @include('components.cart_sidebar')

    @include('components.opening_hours')

    @include('components.auth_popup')

    @yield('main')

    @include('components.footer')
    <script src="../javascript/script.js"></script>
</body>