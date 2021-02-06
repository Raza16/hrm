
$(document).ready(function() {
    
    $('#datatable').DataTable();

//------------------------ blog featured image upload
// $(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.featured-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".file-upload").on('change', function(){
        readURL(this);
    });

    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });

    // Employee profile image
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.featured-image').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".file-upload").on('change', function(){
        readURL(this);
    });

    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
// });

// var upload = new FileUploadWithPreview("myUniqueUploadId", {
//     showDeleteButtonOnImages: true,
//     text: {
//         chooseFile: "Upload image...",
//         browse: "Upload",
//         // selectedCount: "Custom Files Selected Copy",
//     },
//     images: {
//         baseImage: "https://via.placeholder.com/468x250?text=680+x+250",
//     },
//     presetFiles: [
//         // "../public/logo-promosis.png",
//         // "https://images.unsplash.com/photo-1557090495-fc9312e77b28?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=668&q=80",
//     ],
// });

//-------------------- title with slug
$("#title").keyup(function(){
    var str = $(this).val();
    var trims = $.trim(str)
    var slug = trims.replace(/[^a-z0-9]/gi, '-').replace(/-+/g, '-').replace(/^-|-$/g, '')
    $("#slug").val(slug.toLowerCase());
});


// $('#title').keyup(function(e) {
//     $.get('127.0.0.1:8000/check_slug', 
//         { 'title': $(this).val() }, 
//         function( data ) {
//             $('#slug').val(data.slug);
//         }
//     );
//   });


//--------------------------- Alert message
$(document).ready(function() {
    $("#alert").fadeTo(2000, 500).fadeOut(2000, function(){
        $("#alert").alert('close');
    });
});

// --------------Ck editor
ClassicEditor
.create( document.querySelector( '#editor' ) )
.catch( error => {
    console.error( error );
} );



} );