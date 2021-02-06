{{-- Success message on submit --}}
@if (session('success'))
    <div id="alert" class="alert alert-success alert-dismissible fade in mb-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
        <strong>Done!</strong> {{session('success')}}
    </div>
@endif

@if (session('error'))
    <div id="alert" class="alert alert-danger alert-dismissible fade in mb-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
        </button>
        <strong>Error!</strong> {{session('error')}}
    </div>
@endif

{{-- Updated message on submit --}}
@if (session()->has('update'))
    <div id="alert" class="alert alert-success alert-dismissible fade in mb-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Done!</strong> {{session('update')}}
    </div>
@endif

@if(session()->has('delete'))
    <div id="alert" class="alert alert-danger alert-dismissible fade in mb-1" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <strong>Delete!</strong> {{session('delete')}}
    </div>
@endif