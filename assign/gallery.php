<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

.gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
}

.gallery-item {
    margin: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
    cursor: pointer;
}

.gallery-item:hover {
    transform: scale(1.05);
}

.gallery-item img {
    width: 300px;
    height: auto;
    border-radius: 5px;
}


.lightbox {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 999;
}

.lightbox-img {
    display: block;
    max-width: 90%;
    max-height: 90%;
    margin: auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.close-btn {
    position: absolute;
    top: 20px;
    right: 20px;
    cursor: pointer;
    color: #fff;
    font-size: 24px;
}

    </style>
</head>
<body>

<div class="gallery">
    <div class="gallery-item">
        <img src="image1.jpg" alt="Image 1">
    </div>
    <div class="gallery-item">
        <img src="image2.jpg" alt="Image 2">
    </div>
    <div class="gallery-item">
        <img src="image3.jpg" alt="Image 3">
    </div>

    <div class="gallery-item">
        <img src="landscape-enhancements-2-1.jpg" alt="Image 3">
    </div>
   
    
<script src="">
    document.addEventListener("DOMContentLoaded", function() {
    const gallery = document.getElementById('gallery');
    const images = gallery.querySelectorAll('.gallery-item img');

    images.forEach(img => {
        img.addEventListener('click', () => {
            const lightbox = document.createElement('div');
            lightbox.className = 'lightbox';
            lightbox.innerHTML = `<img src="${img.src}" class="lightbox-img">
                                 <span class="close-btn">&times;</span>`;
            document.body.appendChild(lightbox);

            const closeButton = lightbox.querySelector('.close-btn');
            closeButton.addEventListener('click', () => {
                document.body.removeChild(lightbox);
            });
        });
    });
});
</script>
</body>
</html>
