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
    <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>

      <!--Image Slider-->
      <div id="carouselExampleIndicators" class="carousel slide mx-24" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner h-[602px]">
            <div class="carousel-item">
                <a href="#ram"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/4956fe83a51845855d983000a1af63af.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#cooler"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/d7412dbf62bb8bf9b79586a4dbbad574.png" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item active">
                <a href="#ssd"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/83edd7768f37538f3c606be94e8520d0.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#intelBoard"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/4b57e7fe878cb0fad1e6094f44cf916a.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#amdBoard"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/4b76eb36239869b68222e7e4ee294605.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#gpu"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/61784c16e8732ed9a32b0b09db32468c.jpg" class="d-block w-100" alt="..."></a>
            </div>
            <div class="carousel-item">
                <a href="#psu"><img src="https://tkcustomcomputer.com/assets/uploads/advertises/51bbd50cd400b88bf5ed5e5d61d3aba8.jpg" class="d-block w-100" alt="..."></a>
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
        <!--CPU-->
        <div>
            <div id="cpu" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full"src="https://tkcustomcomputer.com/assets/uploads/advertises/47560c8f3955fd728a99654e766b9540.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="cpuLoop">
                    <?php $__currentLoopData = $cpu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="<?php echo e(asset($item->image)); ?>"  alt="<?php echo e($item->name); ?>">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg"><?php echo e($item->name); ?></p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ <?php echo e($item->price); ?></p>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>        
        </div> 
        <!--Ram-->
        <div>
            <div id="ram" >
                <div class=" bg-gray-200">
                    <div>hotCoffee
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="ramLoop">
                    <?php $__currentLoopData = $ram; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="<?php echo e(asset($item->image)); ?>"  alt="<?php echo e($item->name); ?>">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg"><?php echo e($item->name); ?></p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ <?php echo e($item->price); ?></p>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>        
        </div> 
        <!--Cooler-->
        <div>
            <div id="cooler" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/d7412dbf62bb8bf9b79586a4dbbad574.png">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="coolerLoop">
                    <?php $__currentLoopData = $cooler; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="<?php echo e(asset($item->image)); ?>"  alt="<?php echo e($item->name); ?>">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg"><?php echo e($item->name); ?></p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ <?php echo e($item->price); ?></p>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>        
        </div> 
        <!--Intel Board-->
        <div>
            <div id="intelBoard" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/4b57e7fe878cb0fad1e6094f44cf916a.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="intelBoardLoop">
                    <?php $__currentLoopData = $intel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="<?php echo e(asset($item->image)); ?>"  alt="<?php echo e($item->name); ?>">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg"><?php echo e($item->name); ?></p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ <?php echo e($item->price); ?></p>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>        
        </div> 
        <!--AMD Board-->
        <div>
            <div id="amdBoard" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/4b76eb36239869b68222e7e4ee294605.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="amdBoardLoop">
                    <?php $__currentLoopData = $amd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="<?php echo e(asset($item->image)); ?>"  alt="<?php echo e($item->name); ?>">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg"><?php echo e($item->name); ?></p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ <?php echo e($item->price); ?></p>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>        
        </div> 
        <!--gpu-->
        <div>
            <div id="gpu" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/61784c16e8732ed9a32b0b09db32468c.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="gpuLoop">
                    <?php $__currentLoopData = $gpu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="<?php echo e(asset($item->image)); ?>"  alt="<?php echo e($item->name); ?>">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg"><?php echo e($item->name); ?></p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ <?php echo e($item->price); ?></p>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>        
        </div> 
        <!--psu-->
        <div>
            <div id="psu" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/51bbd50cd400b88bf5ed5e5d61d3aba8.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="psuLoop">
                    <?php $__currentLoopData = $psu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="<?php echo e(asset($item->image)); ?>"  alt="<?php echo e($item->name); ?>">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg"><?php echo e($item->name); ?></p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ <?php echo e($item->price); ?></p>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>        
        </div> 
         <!--ssd-->
         <div>
            <div id="ssd" >
                <div class=" bg-gray-200">
                    <div>
                        <img class="w-full mt-4"src="https://tkcustomcomputer.com/assets/uploads/advertises/83edd7768f37538f3c606be94e8520d0.jpg">
                    </div>
                </div>
                <div>
                    <div class=" grid grid-cols-3 gap-[0.2px] mt-8" id="ssdLoop">
                    <?php $__currentLoopData = $storage; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div >
                            <div class=" border border-gray-200 p-12 text-center relative h-[300px]">
                                <img class="w-[220px] mix-blend-multiply  top-0 mb-12 mx-auto mix-blend-multiply"  src="<?php echo e(asset($item->image)); ?>"  alt="<?php echo e($item->name); ?>">
                            </div>
                            <div class=" border border-gray-200 px-4 pt-8 space-y-4 pb-4 h-[300px]">
                                <div class=" px-4 pt-8">
                                    <p class="text-center font-semibold text-blue-500 text-lg"><?php echo e($item->name); ?></p>
                                    <p class="text-center text-3xl font-bold text-red-500 mt-2">$ <?php echo e($item->price); ?></p>
                                </div>
                            </div> 
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>        
        </div> 
    </div>

    <div class=" z-10 fixed right-0 bottom-0 flex space-x-2 bg-black px-2 pt-1 bg-opacity-90 " id="navbar" style="transition: display 1s, bottom 1s;">
        <a href="#cpu"><img class="h-10 px-4 border-r my-1 border-white  " src="https://cdn-icons-png.flaticon.com/128/2625/2625726.png"></a>
        <a href="#ram"><img class="h-10 px-4 border-r my-1 border-white" src="https://cdn-icons-png.flaticon.com/128/997/997606.png"></a>
        <a href="#cooler"><img class="h-10 px-4 border-r my-1 border-white " src="https://cdn-icons-png.flaticon.com/128/2729/2729104.png"></a>
        <a href="#intelBoard"><img class="h-10 px-4 border-r my-1 border-white" src="https://cdn-icons-png.flaticon.com/128/5921/5921800.png"></a>
        <a href="#amdBoard"><img class="h-10 px-4 border-r my-1 border-white" src="https://cdn-icons-png.flaticon.com/128/16755/16755984.png"></a>
        <a href="#gpu"><img class="h-10 px-4 border-r my-1 border-white " src="https://cdn-icons-png.flaticon.com/128/7310/7310330.png"></a>
        <a href="#psu"><img class="h-10 px-4 border-r my-1 border-white" src="https://cdn-icons-png.flaticon.com/128/7005/7005229.png"></a>
        <a href="#ssd"><img class="h-10 px-4  my-1 border-white" src="https://cdn-icons-png.flaticon.com/128/4854/4854407.png"></a>
    </div>

    <?php if (isset($component)) { $__componentOriginal8a8716efb3c62a45938aca52e78e0322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a8716efb3c62a45938aca52e78e0322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.footer','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $attributes = $__attributesOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__attributesOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a8716efb3c62a45938aca52e78e0322)): ?>
<?php $component = $__componentOriginal8a8716efb3c62a45938aca52e78e0322; ?>
<?php unset($__componentOriginal8a8716efb3c62a45938aca52e78e0322); ?>
<?php endif; ?>
</body>

</html><?php /**PATH /home/sareyboth/Desktop/computer store/resources/views/page/pc-hardware.blade.php ENDPATH**/ ?>