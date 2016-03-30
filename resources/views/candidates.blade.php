<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>ELECCIONES2016PERU.COM</title>

        <!-- Bootstrap core CSS -->
        <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="http://getbootstrap.com/examples/cover/cover.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .dangerselected{
                border: solid 1px red;
            }
        </style>
    </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Elecciones2016Perú</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Home</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="ads">
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

          <div class="row">
            @foreach($candidates as $data)
                <div class="col-md-3 p-x-2 candidato" data-id="{{ $data->id }}" style="background-color: #fff; display: block; ">
                <div class="col-md-4">                    
                </div>
                <div class="col-md-8">
                    <span>{{ $data->nombres }}</span>
                </div>
                </div>
            @endforeach

          </div>

          <div class="row">
                <div class="bs-example" data-example-id="striped-table"> 
                    <table class="table table-striped"> 
                        <thead> 
                            <tr> 
                                <th>Candidato</th> 
                                <th>Votos</th> 
                            </tr> 
                        </thead> 
                        <tbody id="resultadosVotos"></tbody> 
                    </table> 
                </div>
          </div>

        <div class="mastfoot">
            <div class="inner">
                <p>Cover template for <a href="http://getbootstrap.com">Bootstrap</a>, by <a href="https://twitter.com/mdo">@mdo</a>.</p>
            </div>
        </div>

        </div>

      </div>
    </div>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Modal title</h4>
          </div>
          <div class="modal-body">
            <div class="row">
                
                <div class="bg-success">Gracias por votar, esta es una simulación de las elecciones del 10 de Abril.</div>
                <div class="bg-info">Usted ya ha votado, lo sentimos no podemos procesar su voto.</div>
                <span class="bg-danger"> Por favor ingrese un DNI correcto.</span>

              <label>DNI:</label>
              <input class="form-control dni" name="dni" type="text" required="required">
            </div>

            <div class="row">
                <label>Seleccione un departamento:</label>
                <select class="form-control distrito" required="required">
                    <option value="0">  Seleccione un departamento</option>
                    @foreach($departamentos as $data)
                        <option value="{{ $data->id }}"> {{ $data->nombre }} </option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary votarbtn">VOTAR</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="{{ asset('assets/js/jquery.numeric.js') }}"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            //CONNECTIONS
            $.ajax({
                type : 'GET',
                url: "{{ route('votacion::result') }}",
                cache: false,
                success: function(r)
                {
                    $('#resultadosVotos').html('');
                    if(r.voto.length > 0){
                        $.each(r.voto, function(i){
                            box = '<tr><td>'+ r['voto'][i].candidato +'</td><td>'+ r['voto'][i].candidato_id +'</td></tr>';
                        });                               

                        $('#resultadosVotos').append(box);
                        
                    }     
                }
            });

            $('.bg-danger').hide();
            $('.bg-success').hide();
            $('.bg-info').hide();
            $('.dni').numeric();

            $('.candidato').on('click', function(){

                $('#myModal').modal('show');                
                var candidato = $(this).data("id");

                $('.votarbtn').on('click', function(){
                    var dni      = $('.dni').val();
                    var distrito = $( ".distrito option:selected" ).val();
                    
                    if(distrito == 0 ){
                        $('.distrito').addClass( "dangerselected" );
                    } else {
                        $('.distrito').removeClass( "dangerselected" );
                    }

                    if( dni.length == 8 ){

                        $.ajax({
                            type: "POST",
                            url: "{{ route('votacion::store') }}",
                            data: { dni: dni, candidato: candidato, distrito: distrito, _token: '{!! csrf_token() !!}'},
                            cache: false,
                              success: function(r)
                              { 

                                    $('.bg-danger').hide();

                                    if(r['status'] == 0){

                                        $('.bg-success').show();
                                        $('.bg-info').hide();
                                        console.log('Gracias por votar');

                                    } else {

                                        $('.bg-success').hide();
                                        $('.bg-info').show();
                                        console.log('Ya votaste y escogiste a ' + r['voto']);

                                    }

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
