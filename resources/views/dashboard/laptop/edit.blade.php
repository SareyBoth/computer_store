@extends('adminlte::page')

@section('title', 'Edit Laptop')

@section('content')
    <div class="box">
        <div class="box-header with-border mt-4">
            <h3 class="box-title"><b>Edit Laptop</b></h3>
        </div>

        <!-- Use PUT method for editing -->
        <form method="POST" action="{{ route('laptop.update', $laptop->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')  <!-- Laravel uses PUT for updates -->

            <div class="box-body">

                <!-- Name Field -->
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" 
                               value="{{ old('name', $laptop->name) }}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="price">Price*</label>
                        <input type="number" class="form-control" id="price" name="price" 
                               value="{{ old('price', $laptop->price) }}" required>
                    </div>
                </div>

                <!-- Image Upload with Preview -->
                <div class="form-group">
                    <div class="mt-3">
                        <img id="imagePreview" 
                             src="{{ asset($laptops->image ?? 'storage/default.jpg') }}" 
                             alt="Image Preview" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                    <label for="image">Change Image</label>
                    <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
                </div>

                <div class="row">
                    <!-- Brand Field -->
                    <div class="form-group col-6">
                        <label for="brand">Brand*</label>
                            <select class="form-control" id="brand" name="brand" required>
                                <option value="" disabled>Select Brand</option>
                                <option value="asus" {{ $laptop->brand == 'asus' ? 'selected' : '' }}>Asus</option>
                                <option value="rog" {{ $laptop->brand == 'rog' ? 'selected' : '' }}>ROG</option>
                                <option value="msi" {{ $laptop->brand == 'msi' ? 'selected' : '' }}>MSI</option>
                                <option value="lenovo" {{ $laptop->brand == 'lenovo' ? 'selected' : '' }}>Lenovo</option>
                                <option value="microsoft" {{ $laptop->brand == 'microsoft' ? 'selected' : '' }}>Microsoft</option>
                                <option value="alineware" {{ $laptop->brand == 'alineware' ? 'selected' : '' }}>Alienware</option>
                                <option value="gigabyte" {{ $laptop->brand == 'gigabyte' ? 'selected' : '' }}>Gigabyte</option>
                            </select>
                    </div>

                    <div class="form-group col-6">
                        <label for="cpu">CPU*</label>
                        <input type="text" class="form-control" id="cpu" name="cpu" 
                               value="{{ old('cpu', $laptop->cpu) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="ram">Ram*</label>
                        <input type="text" class="form-control" id="ram" name="ram" 
                               value="{{ old('ram', $laptop->ram) }}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="storage">Storage*</label>
                        <input type="text" class="form-control" id="storage" name="storage" 
                               value="{{ old('storage', $laptop->storage) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="graphic">Graphic*</label>
                        <input type="text" class="form-control" id="graphic" name="graphic" 
                               value="{{ old('graphic', $laptop->graphic) }}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="display">Display*</label>
                        <input type="text" class="form-control" id="display" name="display" 
                               value="{{ old('display', $laptop->display) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="os">Operation Software*</label>
                        <input type="text" class="form-control" id="os" name="os" 
                               value="{{ old('os', $laptop->os) }}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="battery">Battery*</label>
                        <input type="text" class="form-control" id="battery" name="battery" 
                               value="{{ old('battery', $laptop->battery) }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="weight">Weight*</label>
                        <input type="text" class="form-control" id="weight" name="weight" 
                               value="{{ old('weight', $laptop->weight) }}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="warranty">Warranty*</label>
                        <input type="text" class="form-control" id="warranty" name="warranty" 
                               value="{{ old('warranty', $laptop->warranty) }}" required>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label for="upgrade">Upgrade*</label>
                    <input type="text" class="form-control" id="upgrade" name="upgrade" 
                           value="{{ old('upgrade', $laptop->upgrade) }}" required>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-block">Update Laptop</button>
            </div>
        </form>
    </div>
@stop

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const preview = document.getElementById('imagePreview');
        preview.src = reader.result; // Set new image preview
        preview.style.display = 'block'; 
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
