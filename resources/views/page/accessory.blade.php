    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        </div>
        <div class="carousel-inner h-[602px]">
            <div class="carousel-item">
                <a href="#akko"><img src="https://akkogear.eu/cdn/shop/files/Pink-PBT-3087-Banner-2800-1000.jpg?v=1700825607&width=2800" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#hyper"><img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/c8806116-6bf9-4368-9608-58b4e92ab58d.__CR0,0,1464,600_PT0_SX1464_V1___.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#corsair"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/36d389a86334a58ecdec5063c1216c26.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item active">
                <a><img src="https://tkcustomcomputer.com/assets/uploads/advertises/0c094013b59fc1408eb99a575a3a3666.jpg" class="d-block w-100" alt="..."></a>
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
    
    <div class="mx-80 mt-8 pb-4">
        <!--razer-->
        <div>
            <div id="razer" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/f7db4a1057dc1d9a7333ecb6c50da03b.png">
                    </div>
                </div>
                <div class="grid grid-cols-3">
                @foreach ($razer as $accessory)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($accessory->image) }}" alt="{{ $accessory->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $accessory->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $accessory->price }}</p>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>        
        </div> 
        <!--corsair-->
        <div>
            <div id="corsair" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/36d389a86334a58ecdec5063c1216c26.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="corsairLoop">
                    @foreach ($corsair as $accessory)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($accessory->image) }}" alt="{{ $accessory->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $accessory->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $accessory->price }}</p>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>        
        </div> 
        <!--dxracer-->
        <div>
            <div id="dxracer" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/31f094a70eeb9a9f07e6770bfb918aea.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="dxracerLoop">
                    @foreach ($dxracer as $accessory)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($accessory->image) }}" alt="{{ $accessory->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $accessory->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $accessory->price }}</p>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>        
        </div> 
        <!--logitech-->
        <div>
            <div id="logitech" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/7580bbea16caeca69649a383086c280c.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="logitechLoop">
                    @foreach ($logitech as $accessory)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($accessory->image) }}" alt="{{ $accessory->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $accessory->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $accessory->price }}</p>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>        
        </div> 
        <!--hyper-->
        <div>
            <div id="hyper" >
                <div class=" bg-gray-200">
                    <div>
                        <img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/c8806116-6bf9-4368-9608-58b4e92ab58d.__CR0,0,1464,600_PT0_SX1464_V1___.jpg" alt="">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="hyperLoop">
                    @foreach ($hyperx as $accessory)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($accessory->image) }}" alt="{{ $accessory->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $accessory->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $accessory->price }}</p>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>        
        </div> 
        <!--akko-->
        <div>
            <div id="akko" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://akkogear.eu/cdn/shop/files/Pink-PBT-3087-Banner-2800-1000.jpg?v=1700825607&width=2800">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="akkoLoop">
                    @foreach ($akko as $accessory)
                    <div>
                        <div class="border border-gray-200 p-12 text-center relative h-[250px]">
                            <img class="w-[220px] mix-blend-multiply top-0 bottom-0 right-0 left-0 p-auto m-auto" src="{{ asset($accessory->image) }}" alt="{{ $accessory->name }}">
                        </div>
                        <div class="border border-gray-200 px-4 pt-8">
                            <p class="text-center font-semibold text-blue-500 text-lg">{{ $accessory->name }}</p>
                            <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $accessory->price }}</p>
                            <div class="py-2">-------------------------------</div>
                        </div>
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>        
        </div> 
    </div>
    <div class="mx-80">
        <x-footer class="mx-80"/>
    </div>
    <div class=" z-10 fixed right-0 bottom-0 flex space-x-2 bg-black px-2 pt-1 bg-opacity-90 " id="navbar" style="transition: display 1s, bottom 1s;">
        <a href="#razer"><img class="h-10 px-4 border-r my-1 border-white  " src="https://tkcustomcomputer.com/assets/uploads/brands/f5cd6f347cf02020566755e1cfbbc500.png"></a>
        <a href="#corsair"><img class="h-10 px-4 border-r my-1 border-white" src="https://cwsmgmt.corsair.com/press/CORSAIRLogo2020_stack_W.png"></a>
        <a href="#dxracer"><img class="h-10 px-4 border-r my-1 border-white " src="https://assets.wfcdn.com/im/58724186/resize-h110-w290%5Ecompr-r85/6600/66005023/default_name.jpg"></a>
        <a href="#logitech"><img class="h-10 px-4 border-r my-1 border-white" src="https://logodownload.org/wp-content/uploads/2018/03/logitech-logo-2.png"></a>
        <a href="#hyper"><img class="h-10 px-4 border-r my-1 border-white" src="https://tkcustomcomputer.com/assets/uploads/brands/3a5cde05d7f4585101bc305827877887.png"></a>
        <a href="#akko"><img class="h-10 px-4 border-r my-1 border-white " src="https://econnect-td.sgp1.digitaloceanspaces.com/color-brand-logos/Akko%20Logo.png"></a>
    </div>

</body>
<script>

</script>
</html>