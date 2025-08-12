@extends('adminlte::page')

@section('title', 'Create Laptop')

@section('content')
    <div class="box">
        <div class="box-header with-border mt-4">
            <h3 class="box-title"><b>Laptop Form</b></h3>
        </div>
        <form method="POST" action="{{ route('laptop.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">

                <!-- Name Field -->
                <div class="row">
                    <div class="form-group col-6">
                        <label for="name">Name*</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Laptop name" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="price">Price*</label>
                        <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price" required>
                    </div>
                </div>

                <!-- Image Upload with Preview -->
                <div class="form-group">
                    <div class="mt-3">
                        <img id="imagePreview" src="#" alt="Image Preview" class="img-thumbnail" style="max-width: 200px; display: none;">
                    </div>
                    <label for="image">Image*</label>
                    <input type="file" class="form-control" id="image" name="image" required onchange="previewImage(event)">
                </div>

                <div class="row">
                    <!-- Type Field -->
                    <div class="form-group col-6">
                    <label for="brand">Brand*</label>
                        <select class="form-control" id="brand" name="brand" required>
                            <option value="" disabled selected>Select Brand</option>
                            <option value="asus">Asus</option>
                            <option value="rog">ROG</option>
                            <option value="msi">MSI</option>
                            <option value="lenovo">Lenovo</option>
                            <option value="microsoft">Microsoft</option>
                            <option value="alineware">Alineware</option>
                            <option value="gigabyte">Gigabyte</option>
                        </select>
                    </div>

                    <div class="form-group col-6">
                        <label for="cpu">CPU*</label>
                        <input type="text" class="form-control" id="cpu" name="cpu" placeholder="Enter CPU" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="ram">Ram*</label>
                        <input type="text" class="form-control" id="ram" name="ram" placeholder="Enter Ram" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="storage">Storage*</label>
                        <input type="text" class="form-control" id="storage" name="storage" placeholder="Enter Storage" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="graphic">Graphic*</label>
                        <input type="text" class="form-control" id="graphic" name="graphic" placeholder="Enter Graphic" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="display">Display*</label>
                        <input type="text" class="form-control" id="display" name="display" placeholder="Enter Display" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="os">Operation Software*</label>
                        <input type="text" class="form-control" id="os" name="os" placeholder="Enter Operation Software" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="battery">Battery*</label>
                        <input type="text" class="form-control" id="battery" name="battery" placeholder="Enter Battery" required>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="weight">Weight*</label>
                        <input type="text" class="form-control" id="weight" name="weight" placeholder="Enter Weight" required>
                    </div>

                    <div class="form-group col-6">
                        <label for="warranty">Warranty*</label>
                        <input type="text" class="form-control" id="warranty" name="warranty" placeholder="Enter Warranty" required>
                    </div>
                </div>

                <div class="form-group col-6">
                    <label for="upgrade">Upgrade*</label>
                    <input type="text" class="form-control" id="upgrade" name="upgrade" placeholder="Enter Upgrade" required>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-success btn-block">Create Laptop</button>
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
        preview.style.display = 'block'; // Show the preview
    };
    reader.readAsDataURL(event.target.files[0]); // Read the file as a Data URL
}

    // Function to check all checkboxes
function checkAll(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}[]"]`);
    checkboxes.forEach(checkbox => checkbox.checked = true);
}
// Function to uncheck all checkboxes
function clearAll(name) {
    const checkboxes = document.querySelectorAll(`input[name="${name}[]"]`);
    checkboxes.forEach(checkbox => checkbox.checked = false);
}
</script>
