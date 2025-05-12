<?php include_once 'includes/header.php';?>
    <main class="container">
        <div class="row">
            <h1 class="text-center text-uppercase fs-1 fw-bolder my-3">Login</h1>
            <form action="" method="post">
                <div class="email">
                    <label class="form-label fs-1 my-3 fw-semibold" for="email">Email</label>
                    <input class="form-control fs-2" type="email" name="email" id="email"/>
                </div>
                <div class="passwd">
                    <label class="form-label fs-1 my-3 fw-semibold" for="passwd">Mots de passe</label>
                    <input class="form-control fs-2" type="password" name="passwd" id="passwd"/>
                </div>
                <div class="btn-group my-3 w-100" role="group" aria-label="Basic checkbox toggle button group">
                    <input class="btn-check" type="checkbox" name="rgpd" id="rgpd" autocomplete="off"/>
                    <label class="btn btn-outline-primary fs-2" for="rgpd">J'acceptes les conditions d'utilisations</label>
                </div>
                <div class="text-center my-3">
                    <button class="btn btn-primary fs-1" type="submit">Inscription</button>
                </div>
            </form>
        </div>
    </main>
<?php include_once 'includes/footer.php';?>