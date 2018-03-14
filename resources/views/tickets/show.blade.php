





<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<style type="text/css">
    .cabeza {
        margin:50px;
    }

</style>
<div class="cabeza">
    
</div>

   

    <div class="container col-md-8 col-md-offset-2">
            <div class="well well bs-component">
                <div class="content">
                    <h2 class="header">{!! $ticket->title !!}</h2>
                    <p> <strong>Status</strong>: {!! $ticket->status ? 'Pendiente' : 'Respondido' !!}</p>
                    <p> {!! $ticket->content !!} </p>
                </div>
                <a href="{!! action('TicketsController@edit', $ticket->slug) !!}" class="btn btn-info pull-left">Edit</a>

               <form method="post" action="{!! action('TicketsController@destroy', $ticket->slug) !!}" class="pull-left">
                   <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                      <div>
                        <button type="submit" class="btn btn-warning">Borrar</button>
                         <a href="{!! action('TicketsController@index') !!}" class="btn btn-info pull-left">Cancelar</a>
                        
                      </div>
                </form>

            </div>
    </div>
    

