$(document).ready(function()
{
    $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'overlay', position: 'left', toggle: true});
    $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
    $("#PhotoGallery1").magnificPopup({delegate:'a', type:'image', gallery: {enabled: true, navigateByImgClick: true}});
    // $("#modalka").modal('show');
});