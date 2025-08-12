@extends('adminlte::page')

@section('title', 'Edit Accessory')

@section('content')
    <div class="box">
        <div class="box-header with-border mt-4">
            <h3 class="box-title"><b>Accessory Edit Form</b></h3>
        </div>
        <form method="POST" action="{{ route('accessory.update', $accessory->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="box-body">

                <!-- Name Field -->
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Accessory name" value="{{ old('name', $accessory->name) }}" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="price">Price*</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" value="{{ old('price', $accessory->price) }}" required>
                    </div>
                </div>

                <div class="row">
                    <!-- Brand Field -->
                    <div class="form-group col-6">
                        <label for="brand">Brand*</label>
                        <select class="form-control" id="brand" name="brand" required>
                            <option value="" disabled>Select Brand</option>
                            <option value="razer" {{ $accessory->brand == 'razer' ? 'selected' : '' }}>Razer</option>
                            <option value="corsair" {{ $accessory->brand == 'corsair' ? 'selected' : '' }}>Corsair</option>
                            <option value="dxracer" {{ $accessory->brand == 'dxracer' ? 'selected' : '' }}>DX Racer</option>
                            <option value="logitech" {{ $accessory->brand == 'logitech' ? 'selected' : '' }}>Logitech</option>
                            <option value="hyperx" {{ $accessory->brand == 'hyperx' ? 'selected' : '' }}>HyperX</option>
                            <option value="akko" {{ $accessory->brand == 'akko' ? 'selected' : '' }}>Akko</option>
                        </select>
                    </div>

                    <div class="form-group col-6">
                        <label for="description">Description*</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description" value="{{ old('description', $accessory->description) }}" required>
                    </div>
                </div>

                <!-- Image Upload with Preview -->
                <div class="form-group">
                    <div class="mt-3">
                        <img id="imagePreview" src="{{ asset($accessory->image) }}" alt="Image Preview" class="img-thumbnail" style="max-width: 200px; display: block;">
                    </div>
                    <label for="image">Change Image</label>
                    <input type="file" class="form-control" id="image" name="image" onchange="previewImage(event)">
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-success btn-block">Update Accessory</button>
            </div>
        </form>
    </div>
@stop

<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const preview = document.getElementById('imagePreview');
        preview.src = reader.result; // Set the image source to the result of FileReader
        preview.style.display = 'block'; // Ensure the preview is visible
    };
    reader.readAsDataURL(event.target.files[0]); // Read the file as a Data URL
}

// Functions for checkboxes if needed
function checkAll(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}[]"]`);
    checkboxes.forEach(checkbox => checkbox.checked = true);
}
function clearAll(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}[]"]`);
    checkboxes.forEach(checkbox => checkbox.checked = false);
}
</script>
