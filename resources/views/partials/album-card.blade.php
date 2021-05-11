<div class="card shadow-sm">
    <h5 class="card-header">
        {{$cat->name}}
    </h5>
    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><b>Breed:</b> {{$cat->breed}}</li>
        <li class="list-group-item"><b>Age:</b> {{ $cat->birthday->diffInYears(\Carbon\Carbon::now()) }}</li>
        <li class="list-group-item"><b>Gender:</b> {{ ucfirst(strtolower($cat->gender)) }}</li>
    </ul>
    <div class="card-body">
        <p class="card-text">{{$cat->description}}</p>
        <div class="d-flex justify-content-between align-items-center">
            <div class="btn-group">
                <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
            <small class="text-muted">{{$cat->created_at->diffForHumans()}}</small>
        </div>
    </div>
</div>
