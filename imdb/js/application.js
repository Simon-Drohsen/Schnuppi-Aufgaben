let images = document.querySelectorAll('.square-image');

function highlightLocation(element, color) {
  let locationName = element.getAttribute('location');
  let location = document.querySelector('.' + locationName);

  location.style.color = color;
}

images.forEach(function(image) {
  image.addEventListener('mouseenter', function() {
    highlightLocation(image, 'red');
  });

  image.addEventListener('mouseleave', function() {
    highlightLocation(image, '#160D74');
  });
});
