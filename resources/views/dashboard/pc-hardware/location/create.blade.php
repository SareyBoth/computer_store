@extends('adminlte::page')

@section('title', 'Create Map')

@section('content')
    <div class="box">
        <div class="box-header with-border mt-4">
            <h3 class="box-title"><b>Location Form</b></h3>
        </div>
        <form method="POST" action="{{ route('location.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="box-body">

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter drink name" required>
                </div>

                <!-- Type Field -->
                <div class="form-group">
                    <label for="city">City*</label>
                    <select class="form-control" id="city" name="city" required>
                        <option value="" disabled selected>Select City</option>
                        <option value="Phnom Penh">Phnom Penh</option>
                        <option value="Banteay Meanchey">Banteay Meanchey</option>
                        <option value="Battambang">Battambang</option>
                        <option value="Kandal">Kandal</option>
                        <option value="Koh Kong">Koh Kong</option>
                        <option value="Kratie">Kratie</option>
                        <option value="Kampong Cham">Kampong Cham</option>
                        <option value="Kampong Chhnang">Kampong Chhnang</option>
                        <option value="Kampong Speu">Kampong Speu</option>
                        <option value="Kampong Thom">Kampong Thom</option>
                        <option value="Kep">Kep</option>
                        <option value="Koh Kong">Koh Kong</option>
                        <option value="Kratie">Kratie</option>
                        <option value="Mondulkiri">Mondulkiri</option>
                        <option value="Phnom Penh">Phnom Penh</option>
                        <option value="Preah Vihear">Preah Vihear</option>
                        <option value="Prey Veng">Prey Veng</option>
                        <option value="Pursat">Pursat</option>
                        <option value="Ratanakiri">Ratanakiri</option>
                        <option value="Siem Reap">Siem Reap</option>
                        <option value="Sihanoukville">Sihanoukville</option>
                        <option value="Stung Treng">Stung Treng</option>
                        <option value="Svay Rieng">Svay Rieng</option>
                        <option value="Takeo">Takeo</option>
                        <option value="Tboung Khmum">Tboung Khmum</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="latitude">Latitude*</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Enter Latitude" required>
                </div>

                <div class="form-group">
                    <label for="longitude">Longitude*</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Enter longitude" required>
                </div>

                <div class="form-group">
                    <label for="link">Link*</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="Enter Link" required>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-success btn-block">Create Drink</button>
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
