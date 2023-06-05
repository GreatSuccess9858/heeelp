document.querySelector('#at-locale').onclick = function () {
    if (this.checked) window.location = '/set-locale/gr'
    else window.location = '/set-locale/en'
}
document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    // Validate form data
    const name = document.querySelector('#name').value.trim();
    const _token = document.querySelector('input[name="_token"]').value.trim();
    const email = document.querySelector('#email').value.trim();
    const file = document.querySelector('#file').files[0];

    if (!name || !email || !file) {
        // Show error message if form data is invalid
        alert('Please enter your name, email, and select a file to upload.');
        return;
    }
    // Upload file to MediaFire
    const mediaFireAPIKey = 'YOUR_MEDIAFIRE_API_KEY';
    const mediaFireAPIEndpoint = 'https://www.mediafire.com/api/1.4/upload/upload.php';

    const formData = new FormData();
    formData.append('file', file);
    formData.append('key', mediaFireAPIKey);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', mediaFireAPIEndpoint);
    xhr.onload = function () {

        if (xhr.status === 200) {
            // MediaFire API request successful
            const response = JSON.parse(xhr.responseText);
            const mediaFireLink = response.response.file_links.normal_download;

            // Send form data and MediaFire link to server
            const data = {
                _token: _token,
                name: name,
                email: email,
                file_link: mediaFireLink
            };

            const xhr2 = new XMLHttpRequest();
            xhr2.open('POST', '/send-mail');
            xhr2.setRequestHeader('Content-Type', 'application/json');
            xhr2.onload = function () {
                if (xhr2.status === 200) {
                    // Form submission successful
                    alert('Thank you for your submission!');
                } else {
// Form submission failed
                    alert('Form submission failed. Please try again later.');
                }
            };


            xhr2.send(JSON.stringify(data));
        } else {
            // MediaFire API request failed
            alert('File upload failed. Please try again later.');
        }
    };


    xhr.send(formData);
});
