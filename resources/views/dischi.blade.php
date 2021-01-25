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

            @foreach ($records as $record)

                <div class="cd">
                    <img src="{{ $record['response']['poster'] }}" alt="" />
                    <h3> {{ $record['response']['title']}}</h3>
                    <span class="author">{{ $record['response']['author'] }}</span>
                    <span class="year">{{ $record['response']['year']}}</span>
                </div>
            @endforeach

        </div>
      </div>
    </body>
</html>