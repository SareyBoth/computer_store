<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <x-header/>
      
      <!--Image Slider-->
      <div id="carouselExampleIndicators" class="carousel slide mx-24" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner h-[602px]">
            <div class="carousel-item active">
                <a href="#rog"><img src="https://dlcdnwebimgs.asus.com/gain/902AE234-0AB4-42F5-9C36-EDBFE8E16A52/fwebp" class="d-block w-100" alt="..."></a>
            </div>
              <div class="carousel-item">
                <a href="#msi"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/094c3d901f18033aaaaee91126b0c3b9.jpeg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#lenovo"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/c9a3d43dc474c756a995a1825780ec7f.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#microsoft"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/f6735fffe49485423e742619f40cb524.png" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#gigabyte"><img src="https://www.aorus.com/image/banner/AI_Gaming%20Laptops-1710402775.jpg" class="d-block w-100" alt="..."></a>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

    <!--Body-->
    <div class="mx-80 mt-8">

        <!--Asus-->
        <div id="asus" >

            <!--Vivo Book-->
            <div class=" bg-gray-200 ">
                <div>
                    <img src="https://tkcustomcomputer.com/assets/uploads/advertises/642e1f6f63572fe2e01f7de3ea9571e4.jpg">
                </div>
            </div>
            <div>
                <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="asusLaptopLoop"></div>
            </div>

            <!--Zenbook-->
            <div class=" bg-gray-200 ">
                <div>
                    <img class="w-full" src="https://tkcustomcomputer.com/assets/uploads/advertises/917e8fc56fb2e3cb82dfc560004220d7.jpg">
                </div>
            </div>
            <div>
                <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="asusZenbookLoop">
                @foreach ($asus as $laptop)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($laptop->image) }}" alt="{{ $laptop->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $laptop->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $laptop->price }}</p>
                            <div class="pt-4">
                                <p>CPU     : <span class="text-blue-500 font-semibold">{{ $laptop->cpu }}</span></p>
                                <p>RAM     : <span class="text-red-500 font-semibold">{{ $laptop->ram }}</span></p>
                                <p>Storage : <span class="font-semibold">{{ $laptop->storage }}</span></p>
                                <p>Graphic : <span class="font-semibold">{{ $laptop->graphic }}</span></p>
                                <p>Display : <span class="font-semibold">{{ $laptop->display }}</span></p>
                                <p>OS      : <span class="font-semibold">{{ $laptop->os }}</span></p>
                                <p>Battery : <span class="font-semibold">{{ $laptop->battery }}</span></p>
                                <p>Weight  : <span class="font-semibold">{{ $laptop->weight }}</span></p>
                                <p>Warranty : <span class="font-semibold">{{ $laptop->warranty }}</span></p>
                            </div>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>

            <!--TUF-->
            <!-- <div class=" bg-gray-200 pt-2">
                <div>
                    <img class="w-full" src="https://tkcustomcomputer.com/assets/uploads/advertises/c67a6db61ec4b179c9aaa24d8aa25b39.jpg">
                </div>
            </div>
            <div>
                <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="asusTufLoop"></div>
            </div> -->

            <!--ROG-->
            <div id="rog" class=" bg-gray-200 ">
                <div>
                    <img class="w-full" src="https://tkcustomcomputer.com/assets/uploads/advertises/93d2c3086a7ff2e75e5a60635e9cc281.png">
                </div>
            </div>
            <div>
                <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="asusRogLoop">
                @foreach ($rog as $laptop)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($laptop->image) }}" alt="{{ $laptop->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $laptop->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $laptop->price }}</p>
                            <div class="pt-4">
                                <p>CPU     : <span class="text-blue-500 font-semibold">{{ $laptop->cpu }}</span></p>
                                <p>RAM     : <span class="text-red-500 font-semibold">{{ $laptop->ram }}</span></p>
                                <p>Storage : <span class="font-semibold">{{ $laptop->storage }}</span></p>
                                <p>Graphic : <span class="font-semibold">{{ $laptop->graphic }}</span></p>
                                <p>Display : <span class="font-semibold">{{ $laptop->display }}</span></p>
                                <p>OS      : <span class="font-semibold">{{ $laptop->os }}</span></p>
                                <p>Battery : <span class="font-semibold">{{ $laptop->battery }}</span></p>
                                <p>Weight  : <span class="font-semibold">{{ $laptop->weight }}</span></p>
                                <p>Warranty : <span class="font-semibold">{{ $laptop->warranty }}</span></p>
                            </div>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </div>
        <!--End Asus-->

        <!--MSI Gaming-->
        <div>
            <div id="msi" >

                <!--Msi Gaming-->
                <div class=" bg-gray-200">
                    <div>
                        <img src="https://tkcustomcomputer.com/assets/uploads/advertises/094c3d901f18033aaaaee91126b0c3b9.jpeg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="msiGamingLoop">
                    @foreach ($msi as $laptop)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($laptop->image) }}" alt="{{ $laptop->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $laptop->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $laptop->price }}</p>
                            <div class="pt-4">
                                <p>CPU     : <span class="text-blue-500 font-semibold">{{ $laptop->cpu }}</span></p>
                                <p>RAM     : <span class="text-red-500 font-semibold">{{ $laptop->ram }}</span></p>
                                <p>Storage : <span class="font-semibold">{{ $laptop->storage }}</span></p>
                                <p>Graphic : <span class="font-semibold">{{ $laptop->graphic }}</span></p>
                                <p>Display : <span class="font-semibold">{{ $laptop->display }}</span></p>
                                <p>OS      : <span class="font-semibold">{{ $laptop->os }}</span></p>
                                <p>Battery : <span class="font-semibold">{{ $laptop->battery }}</span></p>
                                <p>Weight  : <span class="font-semibold">{{ $laptop->weight }}</span></p>
                                <p>Warranty : <span class="font-semibold">{{ $laptop->warranty }}</span></p>
                            </div>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                @endforeach
                    </div>
                </div>
    
            </div>        
        </div>    
        <!--End MSI Gaming-->

        <!--MSI-->
        <!-- <div> -->
            <!-- <div > -->

                <!--Msi Gaming-->
                <!-- <div class=" bg-gray-200">
                    <div>
                        <img src="https://tkcustomcomputer.com/assets/uploads/advertises/b2acc8da29a5c0515533ee743f942380.jpeg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="msiLaptopLoop"></div>
                </div>
    
            </div>         -->
        <!-- </div>     -->
        <!--End MSI-->

         <!--Lenovo-->
         <div>
            <div id="lenovo" >

                <!--Msi Gaming-->
                <div class=" bg-gray-200">
                    <div>
                        <img src="https://tkcustomcomputer.com/assets/uploads/advertises/c9a3d43dc474c756a995a1825780ec7f.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="lenovoLaptopLoop">
                    @foreach ($lenovo as $laptop)
                        <div>
                            <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                                <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($laptop->image) }}" alt="{{ $laptop->name }}">
                            </div>
                            <div class="border border-gray-200 px-4 pt-8">
                                <p class="text-center font-semibold text-blue-500 text-lg">{{ $laptop->name }}</p>
                                <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $laptop->price }}</p>
                                <div class="pt-4">
                                    <p>CPU     : <span class="text-blue-500 font-semibold">{{ $laptop->cpu }}</span></p>
                                    <p>RAM     : <span class="text-red-500 font-semibold">{{ $laptop->ram }}</span></p>
                                    <p>Storage : <span class="font-semibold">{{ $laptop->storage }}</span></p>
                                    <p>Graphic : <span class="font-semibold">{{ $laptop->graphic }}</span></p>
                                    <p>Display : <span class="font-semibold">{{ $laptop->display }}</span></p>
                                    <p>OS      : <span class="font-semibold">{{ $laptop->os }}</span></p>
                                    <p>Battery : <span class="font-semibold">{{ $laptop->battery }}</span></p>
                                    <p>Weight  : <span class="font-semibold">{{ $laptop->weight }}</span></p>
                                    <p>Warranty : <span class="font-semibold">{{ $laptop->warranty }}</span></p>
                                </div>
                                <div class="py-2">-------------------------------</div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
    
            </div>        
        </div>    
        <!--End Lenovo-->

        <div>
            <div id="dell" >

                <!--Dell-->
                <div class=" bg-gray-200">
                    <div>
                        <img src="https://content.laptopoutlet.co.uk/DELL-Banner.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="lenovoLaptopLoop">
                    @foreach ($alienware as $laptop)
                        <div>
                            <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                                <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($laptop->image) }}" alt="{{ $laptop->name }}">
                            </div>
                            <div class="border border-gray-200 px-4 pt-8">
                                <p class="text-center font-semibold text-blue-500 text-lg">{{ $laptop->name }}</p>
                                <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $laptop->price }}</p>
                                <div class="pt-4">
                                    <p>CPU     : <span class="text-blue-500 font-semibold">{{ $laptop->cpu }}</span></p>
                                    <p>RAM     : <span class="text-red-500 font-semibold">{{ $laptop->ram }}</span></p>
                                    <p>Storage : <span class="font-semibold">{{ $laptop->storage }}</span></p>
                                    <p>Graphic : <span class="font-semibold">{{ $laptop->graphic }}</span></p>
                                    <p>Display : <span class="font-semibold">{{ $laptop->display }}</span></p>
                                    <p>OS      : <span class="font-semibold">{{ $laptop->os }}</span></p>
                                    <p>Battery : <span class="font-semibold">{{ $laptop->battery }}</span></p>
                                    <p>Weight  : <span class="font-semibold">{{ $laptop->weight }}</span></p>
                                    <p>Warranty : <span class="font-semibold">{{ $laptop->warranty }}</span></p>
                                </div>
                                <div class="py-2">-------------------------------</div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
    
            </div>        
        </div>    

        <!--surface-->
        <div>
            <div id="microsoft" >

                <!--Msi Gaming-->
                <div class=" bg-gray-200">
                    <div>
                        <img src="https://www.laptopoutlet.co.uk/cd/Microsoft-Banner1.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="surfaceLaptopLoop">
                    @foreach ($microsoft as $laptop)
                        <div>
                            <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                                <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($laptop->image) }}" alt="{{ $laptop->name }}">
                            </div>
                            <div class="border border-gray-200 px-4 pt-8">
                                <p class="text-center font-semibold text-blue-500 text-lg">{{ $laptop->name }}</p>
                                <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $laptop->price }}</p>
                                <div class="pt-4">
                                    <p>CPU     : <span class="text-blue-500 font-semibold">{{ $laptop->cpu }}</span></p>
                                    <p>RAM     : <span class="text-red-500 font-semibold">{{ $laptop->ram }}</span></p>
                                    <p>Storage : <span class="font-semibold">{{ $laptop->storage }}</span></p>
                                    <p>Graphic : <span class="font-semibold">{{ $laptop->graphic }}</span></p>
                                    <p>Display : <span class="font-semibold">{{ $laptop->display }}</span></p>
                                    <p>OS      : <span class="font-semibold">{{ $laptop->os }}</span></p>
                                    <p>Battery : <span class="font-semibold">{{ $laptop->battery }}</span></p>
                                    <p>Weight  : <span class="font-semibold">{{ $laptop->weight }}</span></p>
                                    <p>Warranty : <span class="font-semibold">{{ $laptop->warranty }}</span></p>
                                </div>
                                <div class="py-2">-------------------------------</div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
    
            </div>        
        </div>    
        <!--End surface-->

        <!--gigabyte-->
        <div>
            <div id="gigabyte" >

                <!--Msi Gaming-->
                <div class=" bg-gray-200">
                    <div>
                        <img src="https://www.aorus.com/image/banner/AI_Gaming%20Laptops-1710402775.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="gigabyteLaptopLoop">
                    @foreach ($gigabyte as $laptop)
                        <div>
                            <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                                <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($laptop->image) }}" alt="{{ $laptop->name }}">
                            </div>
                            <div class="border border-gray-200 px-4 pt-8">
                                <p class="text-center font-semibold text-blue-500 text-lg">{{ $laptop->name }}</p>
                                <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $laptop->price }}</p>
                                <div class="pt-4">
                                    <p>CPU     : <span class="text-blue-500 font-semibold">{{ $laptop->cpu }}</span></p>
                                    <p>RAM     : <span class="text-red-500 font-semibold">{{ $laptop->ram }}</span></p>
                                    <p>Storage : <span class="font-semibold">{{ $laptop->storage }}</span></p>
                                    <p>Graphic : <span class="font-semibold">{{ $laptop->graphic }}</span></p>
                                    <p>Display : <span class="font-semibold">{{ $laptop->display }}</span></p>
                                    <p>OS      : <span class="font-semibold">{{ $laptop->os }}</span></p>
                                    <p>Battery : <span class="font-semibold">{{ $laptop->battery }}</span></p>
                                    <p>Weight  : <span class="font-semibold">{{ $laptop->weight }}</span></p>
                                    <p>Warranty : <span class="font-semibold">{{ $laptop->warranty }}</span></p>
                                </div>
                                <div class="py-2">-------------------------------</div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
    
            </div>        
        </div>    
        <!--End gigabyte-->
        <div class=" z-10 fixed right-0 bottom-0 flex space-x-2 bg-black px-2 pt-1 bg-opacity-80 " id="navbar" style="transition: display 1s, bottom 1s;">
            <a href="#asus"><img class="h-10" src="https://logolook.net/wp-content/uploads/2023/09/Asus-Logo-1995.png"></a>
            <a href="#rog"><img class="h-10" src="https://tkcustomcomputer.com/assets/uploads/brands/cd146f6e2349bcfbe1e9c8da40c69d90.png"></a>
            <a href="#msi"><img class="h-10 mix-blend-multiply" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/13/Msi-Logo.jpg/1280px-Msi-Logo.jpg"></a>
            <a href="#lenovo"><img class="h-6 mt-1.5" src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Lenovo_logo_2015.svg/2560px-Lenovo_logo_2015.svg.png"></a>
            <a href="#microsoft"><img class="h-10" src="https://tkcustomcomputer.com/assets/uploads/brands/9646b12fd177e1fa95942a2bed0897dc.png"></a>
            <a href="#dell"><img class="h-10 mix-blend-multiply" src="https://tkcustomcomputer.com/assets/uploads/brands/a0cbeeab2d47deff39f7a6de4254fb11.png"></a>
            <a href="#gigabyte"><img class="h-10" src="https://tkcustomcomputer.com/assets/uploads/brands/3fdcac6e1ce047226c95900dff1303b3.png"></a>
        </div>

    <x-footer/>
</body>
</html>