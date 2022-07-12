function searchMovies() {
    $("#movie-list").html("");

    $.ajax({
        url: "http://www.omdbapi.com/",
        type: "get",
        dataType: "json",
        data: {
            apikey: "dca61bcc",
            s: $("#search-input").val(),
        },
        success: function (nilai) {
            if (nilai.Response == "True") {
                let movies = nilai.Search;
                $.each(movies, function (i, data) {
                    $("#movie-list").append(
                        `
<div class="col-md-4">
    <div class="card mb-3">
        <img src="` +
                            data.Poster +
                            `" class="card-img-top" alt="..." />
        <div class="card-body">
            <h5 class="card-title">` +
                            data.Title +
                            `</h5>
            <h6 class="card-subtitle">
                Tahun rilis : ` +
                            data.Year +
                            `
            </h6>
            <a href="#" class="card-link see-detail" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="` +
                            data.imdbID +
                            `">See Detail</a>
        </div>
    </div>
</div>
`
                    );
                });

                $("#search-input").val();
            } else {
                $("#movie-list").html(
                    `
<div class="col">
    <h1 class="text-center">` +
                        nilai.Error +
                        `</h1>
</div>
`
                );
            }
        },
    });
}

$("#search-button").on("click", function () {
    searchMovies();
});

$("#search-input").on("keyup", function (p) {
    if (p.keyCode === 13) {
        searchMovies();
    }
});

$("#movie-list").on("click", ".see-detail", function () {
    $.ajax({
        url: "http://omdbapi.com/",
        type: "get",
        dataType: "json",
        data: {
            apikey: "dca61bcc",
            i: $(this).data("id"),
        },
        success: function (movie) {
            if (movie.Response === "True") {
                $(".modal-body").html(
                    `
<div class="container-fluid">
    <div class="row ">
        <div class="col-md-4">
            <img src="` +
                        movie.Poster +
                        `" class="img-fluid">
        </div>
        <div class="col-md-8">
        <ul class="list-group">
        <li class="list-group-item h3">` +
                        movie.Title +
                        `</li>
        <li class="list-group-item">Director : ` +
                        movie.Director +
                        `</li>
        <li class="list-group-item">Actors : ` +
                        movie.Actors +
                        `</li>
        <li class="list-group-item">Leanguage : ` +
                        movie.Language +
                        `</li>
        <li class="list-group-item">Released : ` +
                        movie.Released +
                        `</li>
        </ul>
        </div>
    </div>
</div>      
                `
                );
            }
        },
    });
});
