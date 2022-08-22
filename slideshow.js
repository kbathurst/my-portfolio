"use strict"

const $ = selector => document.querySelector(selector);


document.addEventListener("DOMContentLoaded", () => {
    const caption = $("#caption");
    const mainImage = $("#main-image");

    const links = $("#image-list").querySelectorAll("a");

    const imageCache = [];
    let image = null;
    for ( let link of links ) {
        image = new Image();
        image.src = link.href;
        image.alt = link.title;
        imageCache[imageCache.length] = image;
    }

    let imageCounter = 0;
    setInterval ( () => {
        //calculate the index for the current image
        imageCounter = (imageCounter + 1) % imageCache.length;
        //get image from array
        image = imageCache[imageCounter];
        //set HTML img and h2 with values from image object
        mainImage.src = image.src;
        mainImage.alt = image.alt
        caption.textContent = image.alt;
    },

    3000); //3 second interval
});