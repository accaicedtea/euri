<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <style>
    .card {
        width: 10rem;
    }

    @media (min-width: 768px) {
        .card {
            width: 14rem;
        }
    }
    </style>
</head>
<div class="container-fluid">
    <!-- Sezione Filtri -->
    <section class="mb-4">

        <div class="title">
            <h5 class="mb-0">Filtri</h5>
        </div>
        <div class="row">
            <form method="get" action="">
                <div class="row g-3">
                    <!-- Filtro Ricerca -->
                    <div class="col-md-4">
                        <label for="searchInput" class="form-label">Cerca</label>
                        <input type="text" class="form-control" id="searchInput" name="search"
                            placeholder="Cerca per titolo..." value="">
                    </div>

                    <!-- Year Filter -->
                    <div class="col-md-3">
                        <div class="row mt-2">
                            <div class="col ">
                                <label>From</label>
                                <input class="form-control" type="text" placeholder="from">
                            </div>
                            <div class="col-1 mt-3">
                                >
                            </div>
                            <div class="col">
                                <label>To</label>
                                <input class="form-control" type="text" placeholder="to">
                            </div>
                        </div>
                    </div>


                    <!-- Nationality Filter -->
                    <div class="col-md-3">
                        <label for="nationalitySelect" class="form-label">Nationality</label>
                        <select class="form-select" id="nationalitySelect" name="nationality">
                            <option value="">All</option>
                            <option value="it">Italy</option>
                            <option value="fr">France</option>
                            <option value="de">Germany</option>
                        </select>
                    </div>
                    <!-- Size Filter -->
                    <div class="col-md-3">
                        <label for="categorySelect" class="form-label">Size</label>
                        <select class="form-select" id="categorySelect" name="category">
                            <option value="">All sizes</option>
                            <option value="1">Size 1</option>
                            <option value="2">Size 2</option>
                            <option value="3">Size 3</option>
                        </select>
                    </div>
                    <!-- Sort Filter -->
                    <div class="col-md-3">
                        <label for="sortSelect" class="form-label">Sort by</label>
                        <select class="form-select" id="sortSelect" name="sort">
                            <option value="newest">Newest</option>
                            <option value="oldest">Oldest</option>
                            <option value="title">Title A-Z</option>
                        </select>
                    </div>

                    <!-- Action Buttons -->
                    <div class="col-md-2 d-flex align-items-end">
                        <div class="btn-group w-100" role="group">
                            <button type="submit" class="btn btn-primary">Apply</button>
                            <a href="#" class="btn btn-outline-secondary">Reset</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
</div>
</section>

<!-- Sezione Card -->
<section>
    <div class="row justify-content-center g-4">
        <?php foreach ($items as $item): ?>
        <div class="col-auto">
            <?= view('card', [
                'title' => $item['title'] ?? '',
                'text'  => $item['testo'] ?? '',
                'image' => $item['img'] ?? '',
                'nationality' => $item['nationality'] ?? '',
                'size' => $item['size'] ?? '',
                'variant' => $item['variant'] ?? '',
                'release_year' => $item['release_year'] ?? ''
            ]) ?>
        </div>
        <?php endforeach; ?>
    </div>
</section>
</div>