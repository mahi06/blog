<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Offers</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        
    </head>
    <body>
        
        <table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Cash Back</th>
        </tr>
    </thead>
    <tbody>
    @foreach($offers as $offer)
        <tr>
            <td>{!! $offer['name'] !!}</td>
            <td> <img src="{{ URL::to($offer['image_url']) }}" alt="profile Pic" height="200" width="200"></td>
            <td>{!! $offer['cash_back'].'$' !!}</td>
        </tr>
    @endforeach
    </tbody>
</table>
    </body>
</html>
