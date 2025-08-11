let images = document.querySelectorAll('.square-image');
console.log(images);

function highlightLocation(element, color) {
    let locationName = element.getAttribute('data-location');
    let location = document.querySelector('#' + locationName);
    console.log(location);

    location.style.color = color;
}

images.forEach(function (image) {
    image.addEventListener('mouseenter', function () {
        highlightLocation(image, 'red');
    });

    image.addEventListener('mouseleave', function () {
        highlightLocation(image, '#160D74');
    });
});
