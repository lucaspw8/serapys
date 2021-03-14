<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .btn-send {
            font-weight: 300;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            width: 100%;
            margin-left: 3px
        }
    </style>
    <title>Nivel de acesso</title>
</head>
<body>
    <div class="container"> 
    <div class=" text-center mt-5 ">
        <h1>Escolha o nivel de usuario para testar a aplicação</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        @if(isset($errors) && count($errors)>0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $erro)
                                    <p>{{$erro}}</p>
                                @endforeach
                            </div>
                        @endif
                        <form method="POST" action="{{route('user_type.choose')}}" enctype="multipart/form-data">
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> 
                                            <div class="form-group"> 
                                                <label for="form_user_type">Nivel do usúario*</label> 
                                                <select id="form_user_type" name="user_type" class="form-control" required="required">
                                                    <option value="" selected disabled>--Selecione o usúario--</option>
                                                    <option value="user">Usúario</option>
                                                    <option value="admin">Administrador</option>
                                                </select> 
                                            </div>
                                        </div>
                                    </div>
          
                                    @csrf
                                    <div class="col-md-12 mt-3"> 
                                        <input type="submit" class="btn btn-success btn-send pt-2" value="Testar o sistema"> 
                                    </div>
                                
                                </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>