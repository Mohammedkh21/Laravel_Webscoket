<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <style type="text/css">
            .message p{
                border-radius: 10px;
                padding: 10px 20px 10px 8px;
                margin-top: 5px;
                display: inline-block;
                width: auto;
                margin: 0px;
            }
            .message-send p{
                background: #e0e3e6;
                color: #2f2d2d;
            }
            .message-send{
                text-align: right;
                margin-top: 5px;
            }
            .message-receive p{
                background: #435f7a;
                color: #f5f5f5;
            }
            .message-receive{
                margin-top: 5px;
            }

            .scrollable {
                overflow: hidden;
                overflow-y: scroll;
                height: calc(100vh - 25vh);
            }
            .message-input{
                border: none;
                border-radius: 0px;
                background: #f2f2f2;
            }

        </style>
    </head>
    <body >

    <div id="app">
        <div class="py-4">
            <Chat :user="{{ Auth::user() }}" />
        </div>

    </div>




    </body>
    <script>
        var messageBody = document.querySelector('#messageBody');
        messageBody.scrollTop = messageBody.scrollHeight - messageBody.clientHeight;
    </script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>
<script>
    import Chat from "../js/components/Chat";
    export default {
        components: {Chat}
    }
</script>
