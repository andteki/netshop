var fileUploadElem = document.querySelector('#imageFile');
var storeButton = document.querySelector('#storeButton');
var host = 'http://localhost:8000/api/';

const uploadFile = () => {
    const files = fileUploadElem.files;
    const formData = new FormData();
    formData.append('file', files[0]);
    let endpoint = 'imageup';
    let url = host + endpoint;
    fetch(url, {
        method: 'post',
        body: formData
    })
    .then(response => response.json())
    .then(result => {
        console.log(result);
    })
    .catch(err => {
        console.log(err);
    })
    ;
}

storeButton.addEventListener('click', () => {
    uploadFile();
})