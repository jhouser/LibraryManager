<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Library Manager - @yield('title')</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="css/app.css">
        <script type="text/javascript" src="js/app.js"></script>
    </head>
    <body>
        <div class="container">
            <div id="header" class="row">
                <div id="header-title" class="col-md-12">
                    <h1>Library Manager</h1>
                </div>
            </div>

            <div id="content">
                <div class="row">
                    @if (session()->get('success'))
                        <div class='bg-success app-messages success-message'>
                            {{ session()->get('success') }}
                        </div>
                    @endif
                </div>
                @yield('content')
            </div>
        </div>
    </body>
</html>