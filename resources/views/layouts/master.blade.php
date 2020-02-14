<html>
    {{-- <head>
        <title>App Name - @yield('title')</title>
         <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head> --}}

    <head>
        <title>Instagram : Search Tags</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <style>
            .page-title {
                text-align: center;
            }
            .input-div {
                text-align: center;
            }
            .input-div h2 {
                display: inline-block;
            }
            input[type=text] {
                font-size: 1.4rem;
                line-height: 1.8;
                border: 0.1rem solid #dbdbdb;
                border-radius: 0.3rem;
                padding: 0 2.4rem;
                margin-left: 2rem;
            }
            button {
                padding: 12px 20px;
            }
            .gallery-item-info li a{
                color: #fff;
            }
            .gallery-item-info ul{
                display: flex;
                justify-content: center;
            }
            .gallery-item-info ul li{
                margin: 0px 1em;
            }
            .gallery-item span{
                position: absolute;
                right: 5px;
                top: 5px;
                color: #fff;
                background: #000;
                width: auto;
                display: inline-block;
                padding: 0.5em;
                font-size: 1.4em;
            }
        </style>
    </head>
    <body>
        @section('sidebar')
        @show
        <div class="container">
             <div class="page-title"><h1>Post</h1></div>
             @include('partials.error')
            {{-- <form method="POST" action="/search">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="form-group">
                    <label for="name">Search Tags:</label>
                    <input type="text" class="form-control" id="title" name="tag">
                </div>
         
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                      <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form> --}}
            @yield('content')
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    </body>
</html>