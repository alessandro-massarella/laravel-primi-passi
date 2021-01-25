<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>ex-dischi-musicali</title>
        <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style/dischi.css">
    </head>
    <body>
      <div id="myApp">
        <header>
            <div class="container">
                <img src="img/logo.png" alt="logo" />
            </div>
        </header>

        <div class="cds-container container">

{{-- DOVREI ESEGUIRE UN FOREACH ALL'INTERNO DELL'ARRAY CONTENUTO NELLA VARIABILE $RECORDS 
IN DischiController.php. MA VISTO CHE L'ARRAY È DI TIPO MULTIDIMENSIONALE,
CONTIENE CIOÈ 2 ARRAY, SUCCESS E RESPONSE. VISTO CHE I NOSTRI DATI SUI DISCHI SONO 
CONTENUTI IN RESPONSE, ESEGUO IL CICLO PROPRIO SU QUEST'ULTIMO: 
 --}}            
            @foreach ($response as $record)
                <div class="cd">                                                            
                    <img src="{{ $record['poster'] }}" alt="" /> {{-- accedo ai singoli dati tramite la bracket notation --}}
                    <h3> {{ $record['title']}}</h3>
                    <span class="author">{{ $record['author']}}</span>
                    <span class="year">{{ $record['year']}}</span>
                </div>
            @endforeach

        </div>
      </div>
    </body>
</html>