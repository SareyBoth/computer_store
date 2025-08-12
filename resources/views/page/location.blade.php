<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenStreetMap with Markers</title>

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

    <!-- Tailwind CSS for better styling -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        #map {
            height: 500px;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Laravel Blade Header -->
    <x-header />

    <div class="container mx-auto mt-10 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Interactive Map with OpenStreetMap</h2>
        <p class="text-gray-600 mt-2">Click on the marker to see details.</p>
        
        <div class="mt-6 mx-auto w-11/12 ">
            <div id="map"></div>
        </div>
    </div>

    <!-- Laravel Blade Footer -->
    <x-footer />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <script>
        var map = L.map('map', {
            center: [13.4105, 103.8660], // Centered on Cambodia
            zoom: 6, // Adjust zoom level for Cambodia
            zoomControl: true
        });

        // Load OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; OpenStreetMap contributors'
        }).addTo(map);

        // Use the PHP $locations variable directly in JavaScript
        var locations = @json($locations); // Convert PHP array to JavaScript object

        locations.forEach(location => {
            var marker = L.marker([location.latitude, location.longitude]).addTo(map)
                .bindPopup(`
                    <h5 class='text-lg'>${location.name}</h5>
                    <p class='text-gray-600'><b>City:</b> ${location.city}</p>
                    <a href="${location.link}" target="_blank" class='text-blue-500 underline'>Map link</a>
                `);
        });
    </script>

</body>
</html>
