<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elecciones2016Peru.com - Simulación de votaciones</title>

    <!-- Bootstrap Core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>

        body {
            padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

        .slide-image {
            width: 100%;
        }

        .carousel-holder {
            margin-bottom: 30px;
        }

        .carousel-control,
        .item {
            border-radius: 4px;
        }

        .caption {
            height: 130px;
            overflow: hidden;
        }

        .caption h4 {
            white-space: nowrap;
        }

        .thumbnail img {
            width: 100%;
        }

        .ratings {
            padding-right: 10px;
            padding-left: 10px;
            color: #d17581;
        }

        .thumbnail {
            padding: 0;
        }

        .thumbnail .caption-full {
            padding: 9px;
            color: #333;
        }

        .selectedPostulante{
            border: solid 1px green;
            box-shadow: 0px 0px 10px 0px green;
        }

        footer {
            margin: 50px 0;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">ELECCIONES 2016 PERÚ</a>
            </div>
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
           <div class="col-md-12">
               <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- cabecera_elecciones2016peru -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-1998972999612574"
                     data-ad-slot="8081696283"
                     data-ad-format="auto"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
           </div> 
        </div>

        <div class="row">

            <div class="col-md-12">

                <div class="row">
                    @foreach($candidates as $data)
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail" id="block-{{ $data->id }}">
                            <div class="caption">
                                
                                <h4><a href="#" class="candidato" data-id="{{ $data->id }}"><strong>{{ $data->nombres }}</strong></a></h4>
                                <p>Frente Amplio</p>
                                <button type="button" class="btn btn-primary pull-right candidato" data-id="{{ $data->id }}">Votar</button>
                                
                                <div class="ratings pull-right">
                                    <p class="pull-right"><span class="qtyvotos"></span> votos</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </div>
    </div>

    <!-- /.container -->
    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>elecciones2016peru.com - Elecciones Presidenciales Perú</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
    
    <!-- /.model -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Tu voto importa</h4>
          </div>
          <div class="modal-body">
            <div class="col-md-12">
                <div class="row">
                    
                    <div><p class="bg-success">Gracias por votar, esta es una simulación de las elecciones del 10 de Abril.</p></div>
                    <div><p class="bg-info">Usted ya ha votado, lo sentimos no podemos procesar su voto.</p></div>
                    <span><p class="bg-danger"> Por favor ingrese un DNI correcto.</p></span>

                  <label>DNI:</label>
                  <input class="form-control dni" name="dni" type="text" required="required">
                </div>

                <div class="row">
                    <label>Seleccione un departamento:</label>
                    <select class="form-control departamento" required="required">
                        <option value="0">  Seleccione un departamento</option>
                        @foreach($departamentos as $data)
                            <option value="{{ $data->id }}"> {{ $data->nombre }} </option>
                        @endforeach
                    </select>
                </div>
            </div>    
          </div><p><hr><br><br></p>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-cerrar-modal" data-dismiss="modal" aria-label="Close">CERRAR</button>
            <button type="button" class="btn btn-success votarbtn">VOTAR</button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.model -->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/js/jquery.numeric.js') }}"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){

            $('.bg-danger').hide();
            $('.bg-success').hide();
            $('.bg-info').hide();
            $('.dni').numeric();

            $('.candidato').on('click', function(){

                $('#myModal').modal('show');
                
                var candidato = $(this).data("id");
                $("#block-"+candidato).addClass('selectedPostulante');

                $('#myModal').on('hidden.bs.modal', function () {
                    
                    $("#block-"+candidato).removeClass('selectedPostulante');
                    candidato = '';
                });

                $('.votarbtn').on('click', function(){
                    
                    if($( ".departamento option:selected" ).val() == '0' ){
                        $('.departamento').addClass( "dangerselected" );
                    } else {
                        $('.departamento').removeClass( "dangerselected" );
                    }

                    if( $('.dni').val().length == 8 ){

                        $.ajax({
                            type: "POST",
                            url: "{{ route('votacion::store') }}",
                            data: { dni: $('.dni').val(), candidato: candidato, departamento: $( ".departamento option:selected" ).val(), _token: '{!! csrf_token() !!}'},
                            cache: false,
                            dataType: 'json',
                              success: function(r)
                              {

                                    $('.bg-danger').hide();

                                    if(r['status'] == 0){

                                        $('.bg-success').show();
                                        $('.bg-info').hide();
                                        console.log('Gracias por votar');
                                        location.reload();

                                    } else {

                                        $('.bg-success').hide();
                                        $('.bg-info').show();
                                        console.log('Ya votaste y escogiste a ' + r['voto']);

                                    }

                              }, error: function(){
                                alert('Lo sentimos, ocurrio un error');
                              }
                        });
                    } else { 
                        $('.bg-danger').show();
                    }
                });  
            });

            
        });
    </script>
</body>

</html>
