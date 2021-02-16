

$(document).ready(function() {
    
    // $('.datatable').DataTable();

        // Setup - add a text input to each footer cell
        $('.datatable thead th').each( function () {
            var title = $(this).text();
            $(this).html( '<input type="text" placeholder="Search '+title+'" class="form-control" />' );
        } );
     
        // DataTable
        $('.datatable').DataTable({
            
            // responsive: true,
            // orderCellsTop: true,
            // fixedHeader: true,
            // pageLength: 100,
            dom: 'lBfrtip',
            
            buttons: [
                {extend: "pdf", exportOptions: {columns:':visible'}, className: "btn btn-sm btn-primary",},
                {extend: "excel", exportOptions: {columns:':visible'}, className: "btn btn-sm btn-primary",},
                {extend: "colvis", className: "btn btn-sm btn-primary",},
            ],

            initComplete: function () {
                // Apply the search
                this.api().columns().every( function () {
                    var that = this;
     
                    $( 'input', this.footer() ).on( 'keyup change clear', function () {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    } );
                } );
            

            }
        });

        // $('.datatable thead').on( 'keyup', ".column_search",function () {
                
        //     table
        //     .column( $(this).parent().index() )
        //     .search( this.value )
        //     .draw();
        // });


      

//------------------------ image upload
// $(document).ready(function() {
    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('.for-image').attr('src', e.target.result);
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


//---------------------------Check in stop watch
(function timer() {
	'use strict';

	//declare
	var output = document.getElementById('clock-timer');
	var toggle = document.getElementById('clock-toggle');
	var clear = document.getElementById('clock-clear');
	var running = false;
	var paused = false;
	var timer;
	
	// timer start time
	var then;
	// pause duration
	var delay;
	// pause start time
	var delayThen;

	
	// start timer
	var start = function() {
		delay = 0;
		running = true;
		then = Date.now();
		timer = setInterval(run,51);
		toggle.innerHTML = 'stop';
	};
	
	
	// parse time in ms for output
	var parseTime = function(elapsed) {
		// array of time multiples [hours, min, sec, decimal]
		var d = [3600000,60000,1000,10];
		var time = [];
		var i = 0;

		while (i < d.length) {
			var t = Math.floor(elapsed/d[i]);

			// remove parsed time for next iteration
			elapsed -= t*d[i];

			// add '0' prefix to m,s,d when needed
			t = (i > 0 && t < 10) ? '0' + t : t;
			time.push(t);
			i++;
		}
		
		return time;
	};
	
	
	// run
	var run = function() {
		// get output array and print
		var time = parseTime(Date.now()-then-delay);
		output.innerHTML = time[0] + ':' + time[1] + ':' + time[2] + '.' + time[3];
	};
	
	
	// stop
	var stop = function() {
		paused = true;
		delayThen = Date.now();
		toggle.innerHTML = 'resume';
		clear.dataset.state = 'visible';
		clearInterval(timer);

		// call one last time to print exact time
		run();
	};
	
	
	// resume
	var resume = function() {
		paused = false;
		delay += Date.now()-delayThen;
		timer = setInterval(run,51);
		toggle.innerHTML = 'stop';
		clear.dataset.state = '';
	};
	
	
	// clear
	var reset = function() {
		running = false;
		paused = false;
		toggle.innerHTML = 'start';
		output.innerHTML = '0:00:00.00';
		clear.dataset.state = '';
	};
	
	
	// evaluate and route
	var router = function() {
		if (!running) start();
		else if (paused) resume();
		else stop();
	};
	
	toggle.addEventListener('click',router);
	clear.addEventListener('click',reset);
	
})();



} );