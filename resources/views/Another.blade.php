<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=\, initial-scale=1.0">
        <title>Another Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <h1 class= "text-center">Amazon.In</h1>
        <x-button title="Amazon Pay" />
        <x-button title="Amazon MiniTV" />
        <x-button title="Sell" />
        <x-button title="Best Seller" />
        {{-- <x-button title="Mobiles" /> --}}
        <x-button title="Mobiles" dropdown="true">
            <li><a class="dropdown-item" href="#">Apple</a></li>
            <li><a class="dropdown-item" href="#">Samsung</a></li>
            <li><a class="dropdown-item" href="#">OnePlus</a></li>
            <li><a class="dropdown-item" href="#">Google Pixel</a></li>
            <li><a class="dropdown-item" href="#">VIvo</a></li>
            <li><a class="dropdown-item" href="#">IQOO 7</a></li>
        </x-button>
        @component('components.button',['title'=>'Today Deals '])
        @endcomponent
        @component('components.button',['title'=>'Electronics '])
        @endcomponent
        @component('components.button',['title'=>'Prime '])
        @endcomponent
        @component('components.button',['title'=>'Custmor Services '])
        @endcomponent
        @component('components.button',['title'=>'Fashion '])
        @endcomponent
        @component('components.button',['title'=>'Home & Kithcen '])
        @endcomponent
        @component('components.button',['title'=>' New Releases'])
        @endcomponent

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>