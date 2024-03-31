import './bootstrap';
import L from 'leaflet';

// document.querySelector('#submit-button').addEventListener(
//     'click',
//     () => window.axios.post('/button/clicked')
// );


// Subscribe to the public channel called "public-channel"
// Echo.channel('public-channel')

//     // Listen for the event called "button.clicked"
//     .listen('.test.event', (e) => {

//         // Display the "message" in an alert box
//         alert(e.message);
//     });

 // Create map if a map exists on the page
if (document.getElementById('map')) {
    console.log("Hello World");
    var map = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
}
