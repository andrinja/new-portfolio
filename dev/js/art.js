
function removeFilter(event) {
    var removeButton = event.target;
    var filter = removeButton.parentElement;
    filter.parentNode.removeChild(filter);
    showOrHideGridItems();
}

//create filter when clicked on tag

var tags =document.querySelectorAll('.tag');
for (var i = 0; i<tags.length; i++) {
    var tag = tags[i];
    tag.addEventListener("click", addFilter);
}

function addFilter(event) {
    var tag = event.target;
    var tagText = tag.innerText;

    //check if the filter already exists
    var filterExists = false;

    var filters = document.querySelectorAll(".filter");
    //select current filters
    for(var i = 0; i < filters.length; i++) {
        var filterText = filters[i].children[0].innerText;
        if(tagText == filterText)  {
            filterExists = true;
        }
    }

    if(filterExists == false) {

//    create new filter
        var filter = document.createElement("div");
        var filterTitle = document.createElement("span");
        var removeButton = document.createElement("i");
        // give this element filter class

        filter.classList.add('filter');
        removeButton.classList.add('material-icons');

        // add content to filter elements
        filterTitle.innerText = tagText;
        removeButton.innerHTML = "close";
        removeButton.addEventListener("click", removeFilter);

        //add children to parent
        filter.appendChild(filterTitle);
        filter.appendChild(removeButton);

        // show filter in sidebar
        var filterList = document.querySelector(".filter-list");
        filterList.appendChild(filter);


    }

    showOrHideGridItems();
}

function showOrHideGridItems() {
    var filters = document.querySelectorAll('.filter');
    console.log(filters);
    if (filters.length != 0) {

        var gridItems = document.querySelectorAll('.grid .image-group');
        for(var i = 0; i<gridItems.length; i++) {
            var tags = gridItems[i].childNodes[5].children;
            var showGridItem = false;

            for(var t = 0; t < tags.length; t++) {
                var tag = tags[t].innerText;

                for(var f = 0; f < filters.length; f++) {
                    var filterName = filters[f].childNodes[0].innerText;
                    if(tag == filterName) {
                        showGridItem = true;
                    }
                }
            }
            if(showGridItem == true) {
                gridItems[i].classList.remove('hidden');
            } else {
                gridItems[i].classList.add('hidden');
            }
        }
    } else {
        var gridItems = document.querySelectorAll('.grid .image-group');
        for(var i = 0; i <gridItems.length; i++) {
            gridItems[i].classList.remove('hidden');
        }
    }
}
var imagePreviewCloseButton = document.querySelector('.close-image-preview');


if(imagePreviewCloseButton != undefined){
    imagePreviewCloseButton.addEventListener('click', closeImagePreview);
}


function closeImagePreview(event) {
    var imagePreview = document.querySelector('.image-preview');
    var target = event.target;
    if(target.tagName != 'IMG') {
        imagePreview.classList.remove('shown');
    }

}

var imageGroups = document.querySelectorAll('.image-group');

for(var i = 0; i<imageGroups.length; i++) {
    imageGroups[i].addEventListener('click', showImagePreview);
}

function showImagePreview(event) {
    var imageGroup = event.currentTarget;
    var target = event.target;
    if (target.className != 'tag') {

        var imagePath = imageGroup.childNodes[1].getAttribute('src');

        if(imagePath == null){
            //we know that the item is one level deeper
            imagePath = imageGroup.childNodes[1].childNodes[1].getAttribute('src');

        }
        var imagePreview = document.querySelector('.image-preview');
        imagePreview.childNodes[3].setAttribute('src', imagePath);
        imagePreview.classList.add('shown');

        imagePreview.addEventListener('click', closeImagePreview);
    }

}


var linkGroupAll = document.querySelectorAll(".link-group");
for(var i = 0; i<linkGroupAll.length; i++)      {
    var linkGroup = linkGroupAll[i];
    console.log(linkGroup);
    linkGroup.addEventListener('mouseover', showAnimation);
}

function showAnimation(event) {
    console.log('x');
    var linkGroup = event.currentTarget;
    var firstChild = linkGroup.children[0];
    var name = firstChild.getAttribute('data-name');
    var svgContainers = document.querySelectorAll('.svg-container');

    //select by data-name attribute

    for(var i=0; i<svgContainers.length; i++) {
        var svgContainer = svgContainers[i];
        var svgName = svgContainer.getAttribute('data-name');

        if(name == svgName) {
            svgContainer.classList.add('shown');

        } else {
            svgContainer.classList.remove('shown');
        }
    }

}

// if svg Container is hovered raise professor arms up

var btnSelectSlider = document.querySelector('.btn-select-slider');
var btnSelectGrid = document.querySelector('.btn-select-grid');

if(btnSelectSlider != undefined){
    btnSelectSlider.addEventListener('click', switchToSlider);
}


function switchToSlider() {
    var imageContainer = document.querySelector('.images');
    imageContainer.classList.remove('grid');
    imageContainer.classList.add('slider');


}

if(btnSelectGrid != undefined){
    btnSelectGrid.addEventListener('click', switchToGrid);
}

function switchToGrid() {
    var imageContainer = document.querySelector('.images');
    imageContainer.classList.remove('slider');
    imageContainer.classList.add('grid');
}

function slideImage(){
    var images = document.querySelectorAll(".image-group");


//find currently shown image
    var shownImage = document.querySelector(".image-group.active");


//if no Image shown then show the first one
    if(shownImage == null){
        images[0].classList.add('active');
    }
    else {
        for(var i = 0; i<images.length; i++){
            if(images[i] == shownImage) {
                shownImage.classList.remove('active');

                var nextImageNumber = i + 1;
                var nextImage = images[nextImageNumber];

                if(nextImage == null){
                    nextImage = images[0];
                }

                //select all the filters
                var filters = document.querySelectorAll('.filter');

                //if no filters selected, do not do any of this
                if(filters.length != 0){
                    var imageShowable = false;

                    while(!imageShowable){


                        for(var j=0; j<filters.length; j++) {
                            var filter = filters[j].children[0].innerText;
                            var tags = nextImage.children[2].children;
                            for(var k=0; k<tags.length; k++) {
                                var tag = tags[k].innerHTML;
                                if (tag == filter) {
                                    imageShowable = true;
                                }
                            }
                        }

                        if(!imageShowable){
                            nextImageNumber++;

                            nextImage = images[nextImageNumber];


                            if(nextImage == null){
                                nextImageNumber = 0;
                            }

                            nextImage = images[nextImageNumber];


                        }
                    }
                }

                nextImage.classList.add('active');

            }
        }
    }
//wait 3s then show next image

    slider = setTimeout(function () {
        slideImage();
    },3000);
}

var slider;

var sliderExists = document.querySelector('.slider');
var gridExists = document.querySelector('.grid');

if(sliderExists != undefined || gridExists != undefined){
    slideImage();
}



//all 3 sections
var sectionsAll = document.querySelectorAll('.section');
for(var i = 0; i < sectionsAll.length; i++) {
    var section = sectionsAll[i];
    section.addEventListener('click', chooseSection);

}

//    add active class to chosed section and remove
function chooseSection(event) {
    var section = event.currentTarget;
    var sectionName = section.attributes[1].value;

    section.classList.add('active');

    for(var i = 0; i < sectionsAll.length; i++) {
        if(sectionsAll[i] != section) {
            sectionsAll[i].classList.remove('active');
        }
    }

/*    //choose whether  on paintings/prints/shop content
    var contentItems = document.querySelectorAll('.content-item');
    var selector = ".content-item" + "." + sectionName;
    var contentItem = document.querySelector(selector);

    for(var i = 0; i<contentItems.length; i++){
        contentItems[i].classList.remove('active');
    }
    contentItem.classList.add('active');*/

}

//press buy button

$('.buy-button').on('click', function (event) {
    event.stopPropagation(); //click on button
    $('.open-buy-page').addClass('open');

    //if click outside the open-buy-page then close the page
    $(document).on('click.closeBuyPage', function(event){

        if(event.target != $('.open-buy-page')[0] && event.target != $(this).closest('.open-buy-page')[0]){ //&& means "and"
            $('.open-buy-page').removeClass('open');
            $(document).off('click.closeBuyPage'); //click only once
        }
    })
});