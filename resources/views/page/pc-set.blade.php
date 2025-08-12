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

    <div class="mx-80 mt-8 pb-4"> 
        <!--lenovo-->
        <div>
            <div id="lenovo" >
                <div class=" bg-gray-200">
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="lenovoLoop">
                    @foreach ($lenovo as $item)
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="{{ asset($item->image) }}"  alt="{{ $item->name }}">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg">{{ $item->name }}</p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ {{ $item->price }}</p>
                                </div>
                            </div> 
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>        
        </div> 
    </div>

    <!--footer-->
    <x-footer/>
</body>
</html>