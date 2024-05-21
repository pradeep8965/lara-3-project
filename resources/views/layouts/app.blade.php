<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Laravel</title>
        <style>
            .a_tdbr{
                border:1px dashed black;
            }
            header{
                height: 100px;
                background-color:#151C25;
                color:#fff;
            }
            main{
                height: 150px;
                background-color:#D3D3D3;
                color:black;
            }
            footer{
                height: 300px;
                background-color:#232F3E;
                color:#fff;
            }
            

        </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <div class="container-fluid a_tdbr">
            <header class="a_tdbr  text-center fw-bold">AMAZON.in </header>
            @yield('mymain')
            <footer>
            <div class="container text-center" >
                <div class="col" style="background-color: #37475A;">
                Back to top
            </div>
            </div>
                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                        <p class="fw-bold fs-4 mt-2 mb-0 "> Get to Know Us </p></br>    
                        About Us  </br> 
                        Careers  </br> 
                        Press Releases  </br> 
                        Amazon Science  
                        </div>
                        <div class="col">
                        <p class="fw-bold fs-4 mt-2 mb-0">Connect with Us </p> </br>
                        Facebook </br> 
                        Twitter </br> 
                        instagram 
                        </div>
                        <div class="col">
                        <p class="fw-bold fs-4 mt-2 mb-0">Make Money with Us </p> </br>  
                        Sell on Amazon </br>
                        Sell under Amazon Accelerator </br>
                        Protect and Build Your Brand  </br>
                        Amazon Global Selling  </br>
                        Become an Affiliate  </br>
                        Fulfilment by Amazon  </br>
                        Advertise Your Products  </br>
                        Amazon Pay on Merchants 
                        </div>
                        <div class="col">
                        <p class="fw-bold fs-4 mt-2 mb-0"> Let Us Help You 
                        </p>
                       </br>
                        COVID-19 and Amazon </br>
                        Your Account </br>
                        Returns Centre </br>
                        100% Purchase Protection </br>
                        Amazon App Download
                        Help
                        </div>
                    </div>
                </div>
            </footer>
       </div> 
        {{-- <h1>Hello</h1> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>