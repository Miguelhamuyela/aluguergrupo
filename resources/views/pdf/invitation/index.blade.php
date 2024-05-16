<!DOCTYPE html>
<html lang="pt-pt">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Convite-{{ $invitation->code }}</title>

    <style>
        #footer {
            padding-top: 10px;
            padding-bottom: 0px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        @page {
            size: 640px 270px;
            margin: 0px;
            margin-left: 10px;
        }

        * {
            text-align: left;
            font-family:Arial, Helvetica, sans-serif;
            color: rgb(5, 32, 32);
           
        }

        section {
            margin-top: 40px;
        }

    </style>
</head>

<body style='background-position:center;
background-size:cover;
height:270px;
width:100%;
background-image: url("site/images/invitation.png"); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);'>

    <section class="col-12 mt-3">
        <B style="font-size: 13px; font-weight:0;">28 de Abril, 2022 - Mediateca de Luanda</B>
        <h1> Meninas e as TIC</h1>

        <h5> {{ $invitation->name }} <br>
            {{ $invitation->email }}
        </h5>
    </section>


    <footer class="col-12 mb-4" id="footer">


        <img alt="qrcode" src="data:image/png;base64, {!! base64_encode($qrcode) !!} ">
        {{-- <img src="site/images/minttics.jpg" width="300"> --}}

    </footer>

</body>

</html>
