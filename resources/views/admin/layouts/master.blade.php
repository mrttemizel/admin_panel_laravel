<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="uploads/favicon.png">

    <title>Admin Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">

   @include('admin.layouts._partials._styles')

    @include('admin.layouts._partials._scripts')


</head>

<body>
<div id="app">
    <div class="main-wrapper">
        @include('admin.layouts._partials._header')


       @include('admin.layouts._partials._sidebar')

        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>@yield('heading')</h1>
                    <div class="ml-auto">
                        <a href="" class="btn btn-primary"><i class="fas fa-plus"></i> Button</a>
                    </div>
                </div>
                

                @yield('main_content')
            </section>
        </div>

    </div>
</div>

@include('admin.layouts._partials._footer')

</body>
</html>