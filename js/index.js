let img_div = document.querySelector('.show-image');
let img = img_div.querySelector('img');
// const fileToUpload1 = document.querySelector('#fileToUpload1');
const fileToUpload2 = document.querySelector('#fileToUpload2');

function upload(element) {
    element.addEventListener('change', (e) => {
        const file = e.target.files[0];
        console.log(file);
        const reader = new FileReader();
        reader.readAsDataURL(file);
        reader.addEventListener('load', () => {
            img.src = reader.result;
        });
    });
}
// upload(fileToUpload1);
upload(fileToUpload2);