@extends('adminlte::page')

@section('title', 'Edit Location')

@section('content')
    <div class="box">
        <div class="box-header with-border mt-4">
            <h3 class="box-title"><b>Edit Location</b></h3>
        </div>
        <form method="POST" action="{{ route('location.update', $location->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Use PUT for updating a resource -->
            <div class="box-body">

                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $location->name) }}" placeholder="Enter location name" required>
                </div>

                <!-- City Field -->
                <div class="form-group">
                    <label for="city">City*</label>
                    <select class="form-control" id="city" name="city" required>
                        <option value="" disabled>Select City</option>
                        <option value="Phnom Penh" {{ old('city', $location->city) == 'Phnom Penh' ? 'selected' : '' }}>Phnom Penh</option>
                        <option value="Banteay Meanchey" {{ old('city', $location->city) == 'Banteay Meanchey' ? 'selected' : '' }}>Banteay Meanchey</option>
                        <option value="Battambang" {{ old('city', $location->city) == 'Battambang' ? 'selected' : '' }}>Battambang</option>
                        <option value="Kandal" {{ old('city', $location->city) == 'Kandal' ? 'selected' : '' }}>Kandal</option>
                        <option value="Koh Kong" {{ old('city', $location->city) == 'Koh Kong' ? 'selected' : '' }}>Koh Kong</option>
                        <option value="Kratie" {{ old('city', $location->city) == 'Kratie' ? 'selected' : '' }}>Kratie</option>
                        <option value="Kampong Cham" {{ old('city', $location->city) == 'Kampong Cham' ? 'selected' : '' }}>Kampong Cham</option>
                        <option value="Kampong Chhnang" {{ old('city', $location->city) == 'Kampong Chhnang' ? 'selected' : '' }}>Kampong Chhnang</option>
                        <option value="Kampong Speu" {{ old('city', $location->city) == 'Kampong Speu' ? 'selected' : '' }}>Kampong Speu</option>
                        <option value="Kampong Thom" {{ old('city', $location->city) == 'Kampong Thom' ? 'selected' : '' }}>Kampong Thom</option>
                        <option value="Kep" {{ old('city', $location->city) == 'Kep' ? 'selected' : '' }}>Kep</option>
                        <option value="Mondulkiri" {{ old('city', $location->city) == 'Mondulkiri' ? 'selected' : '' }}>Mondulkiri</option>
                        <option value="Preah Vihear" {{ old('city', $location->city) == 'Preah Vihear' ? 'selected' : '' }}>Preah Vihear</option>
                        <option value="Prey Veng" {{ old('city', $location->city) == 'Prey Veng' ? 'selected' : '' }}>Prey Veng</option>
                        <option value="Pursat" {{ old('city', $location->city) == 'Pursat' ? 'selected' : '' }}>Pursat</option>
                        <option value="Ratanakiri" {{ old('city', $location->city) == 'Ratanakiri' ? 'selected' : '' }}>Ratanakiri</option>
                        <option value="Siem Reap" {{ old('city', $location->city) == 'Siem Reap' ? 'selected' : '' }}>Siem Reap</option>
                        <option value="Sihanoukville" {{ old('city', $location->city) == 'Sihanoukville' ? 'selected' : '' }}>Sihanoukville</option>
                        <option value="Stung Treng" {{ old('city', $location->city) == 'Stung Treng' ? 'selected' : '' }}>Stung Treng</option>
                        <option value="Svay Rieng" {{ old('city', $location->city) == 'Svay Rieng' ? 'selected' : '' }}>Svay Rieng</option>
                        <option value="Takeo" {{ old('city', $location->city) == 'Takeo' ? 'selected' : '' }}>Takeo</option>
                        <option value="Tboung Khmum" {{ old('city', $location->city) == 'Tboung Khmum' ? 'selected' : '' }}>Tboung Khmum</option>
                    </select>
                </div>

                <!-- Latitude Field -->
                <div class="form-group">
                    <label for="latitude">Latitude*</label>
                    <input type="text" class="form-control" id="latitude" name="latitude" value="{{ old('latitude', $location->latitude) }}" placeholder="Enter Latitude" required>
                </div>

                <!-- Longitude Field -->
                <div class="form-group">
                    <label for="longitude">Longitude*</label>
                    <input type="text" class="form-control" id="longitude" name="longitude" value="{{ old('longitude', $location->longitude) }}" placeholder="Enter Longitude" required>
                </div>

                <!-- Link Field -->
                <div class="form-group">
                    <label for="link">Link*</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{ old('link', $location->link) }}" placeholder="Enter Link" required>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-success btn-block">Update Location</button>
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
</script>
