<div class="card text-center">

    <div class="card-body">
        <h5 class="card-title">{{$quote->text}}</h5>
        <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
        <a class="btn btn-outline-primary" target="_blank" href="{{$quote->url}}">Open</a>
        <a class="btn btn-outline-secondary" href=#>Edit</a>
        <a class="btn btn-outline-danger" href=#>Delete</a>
    </div>
    <div class="card-footer text-muted">
        {{ date('d-m-Y', strtotime($quote->updated_at))}}
    </div>
</div>

<!--    

<div class="card text-center">
        <div class="card-body">
    
            <h5 class="card-title"></h5>
                
        </div>
    </div>

-->