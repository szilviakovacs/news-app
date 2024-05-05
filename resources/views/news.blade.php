<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<header class="container-fluid">

</header>
<div>

@foreach($newsdata as $news)

<div class="card mt-5 ml-5" style="width:90%">
    <div class="row center">
        <div class="col-sm-6">
            <div class="card-body">
                <h5 class="card-title">{{ $news->title }}</h5>
                <p class="card-text">{{ $news->description }}</p>
                <p class="card-text"><small class="text-muted"> Publish Date:
                        {{ date('d-m-Y', strtotime($news->created_at));  }}</small></p>
                <p class="card-text"><small class="text-muted"> Author: {{ $news->author }}</small></p>

            </div>
        </div>
    </div>
</div>

@endforeach    

<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
</div>
 </body>
</html>