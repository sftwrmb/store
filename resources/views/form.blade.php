<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dosya Yükleme</title>


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
      
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>



    <div class="container">

        <div class="row mt-5">

            <div class="col-12 col-sm-12 col-md-4 offset-md-4 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4">

                <div class="card">

                    <div class="card card-header bg-light"><h4 class="text-center">Dosya Gönderme Formu</h4></div>

                    <div class="card card-body bg-light">
                        
                            <form method="POST" action="{{route('store')}}" enctype="multipart/form-data">

                                {{csrf_field()}}

                                <div class="form-group">

                                    <label for="file"></label>
                                    <input type="file" name="_file" id="_file" class="form-control" />

                                </div>

                                <br />

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-md">Gönder</button>
                                </div>

                                


                            </form>

                    </div>

                    <div class="card card-footer bg-light">

                        <h6 class="text-center">2022</h6>

                        
                        @if ($errors->any())
                            
                            @foreach ($errors->all() as $error)

                                <div class="alert alert-danger text-center">{{$error}}</div>

                            @endforeach
                                
                           
                        @endif


                        @if (Session::has('result'))

                           <div class="alert alert-danger text-center">{{Session::get('result')}}</div>

                        @elseif (Session::has('upload'))

                           <div class="alert alert-success text-center">{{Session::get('upload')}}</div>

                        @elseif (Session::has('fail'))

                           <div class="alert alert-danger text-center">{{Session::get('fail')}}</div>

                        @endif




                    </div>

                </div>

              


            </div>

        </div>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>

    </body>
</html>
