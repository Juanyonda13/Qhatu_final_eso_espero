 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/detailCraft.css">
    <link rel="stylesheet" href="../css/pasarela.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/> 
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Qhatu</title>
 </head>
 <body>
    <div class=" header col-12 p-0 d-flex justify-content-center flex-wrap ">
        <div class="col-2 fs-1">
             <a href="http://127.0.0.1:8000/index" class="titulo nav-link">Qhatu</a>

        </div>
        <div class="col-8 d-flex justify-content-center gap-2">
               <div class="col-6 d-flex justify-content-end pt-2 fs-4">
                      <a href="#" class="nav-link">Home</a>
               </div>
               <div class="col-6 d-flex justify-content-start pt-2 fs-4">
                      <a href="#" class="nav-link">Shope</a>
               </div>
        </div>
        <div class="col-2 d-flex justify-content-end gap-3 pt-3 fs-5">
            <i class="bi bi-person-circle"></i>
            <i class="bi bi-bag-plus"></i>
        </div>
        <div class="col-10 p-0">
            <hr class="" style="height:1px;border:none;color:#333;background-color:#333;">
        </div>
    </div>

    @yield('content')
    @extends('Layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
 </body>

 </html>