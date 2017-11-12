var drawer = $('.drawer');

$(document).ready(function(){
    //use fake data is project pages not found
    //populate project dropdown
    $('.dropdown-drawer-item').remove();
    var projectPages = $('.project-page');
    if(projectPages.length == 0){
        var projects = localStorage.getItem('projects') || '[]';
        projects = JSON.parse(projects);
        var template = $('#dropdown-drawer-item').html();
        $.each(projects, function(i,project){
            var view = {name: project.name, caption: project.caption, anchor: 'index.php#' + project.anchor};
            var item = Mustache.render(template, view);
            $('#project-dropdown .dropdown-content').append(item);
        })
    }
    else {
        projectPages.each(function(){

            var template = $('#dropdown-drawer-item').html();
            var view = {name: $(this).find('.project-title').text(),
                        caption: $(this).find('.project-caption').text(),
                        anchor: '#' + $(this).closest('.section').attr('data-anchor')};
            var item = Mustache.render(template, view);

            //store project page information in local storage
            storeProject(view);
            $('#project-dropdown .dropdown-content').append(item);
        })
    }

    $('.dropdown-content').css('height', $('.dropdown-drawer-item').length * parseInt($('.dropdown-drawer-item').css('height')) + 'px');
})

/**
 * Select navigation from drawer
 */
drawer.find('.drawer-item').on('click', function(){
    $('.drawer-item').removeClass('active');
    if(!$(this).hasClass('dropdown')){
        $('.dropdown-drawer-item').removeClass('active');
        $(this).addClass('active');
    }
})

/**
 * Select navigation item from project dropdown
 */
$(document).on('click', '.dropdown-drawer-item',function(){
    $('.drawer-item, .dropdown-drawer-item').removeClass('active');
    $(this).addClass('active');
});

/**
 * Expand/Collapse project dropdown
 */

drawer.find('.dropdown-label').on('click', function(){
    $(this).closest('.dropdown').toggleClass('collapsed');
})

function storeProject(project){
    var projects = JSON.parse('[]');
    projects.push(project);
    projects = JSON.stringify(projects);
    localStorage.setItem('projects', projects);
}