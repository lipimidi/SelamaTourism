Add todo list


send loc

```js


// Client-side (Trekkers sending location every minute)
function sendLocationToServer() {
    navigator.geolocation.getCurrentPosition(function(position) {
        const latitude = position.coords.latitude;
        const longitude = position.coords.longitude;

        fetch('/update-location', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({ latitude, longitude, user_id: 'trekker_123' })
        })
        .then(response => response.json())
        .then(data => console.log('Location updated'))
        .catch(error => console.error('Error:', error));
    });
}

setInterval(sendLocationToServer, 60000); // Send location every minute
```
 