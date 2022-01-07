<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/navbar.css">
<link rel="stylesheet" href="css/forms.css">


<?php require_once("../components/template.php"); ?>

<body>

<div class="page-container fluid-container">
    <?php require_once("../components/navbar.php"); ?>

    <nav class="gray-box">
    <div class="container d-flex">
        Σύνδεση
    </div>
    </nav>
    <div class="login-container-wrapper">
        <div class="login-container">
                <h3 style="text-align:center;">ΣΥΝΔΕΣΗ</h3>
                <hr>
                <h7 style="text-align:center;">Συμπληρώστε το όνομα χρήστη και τον κωδικό πρόσβασης</h7>
                <h7 style="text-align:center;"> για να συνδεθείτε στην πλατφόρματου ΔΟΑΤΑΠ.</h7>
                <br>
                <h7 style="text-align:center;">Εναλλακτικά μπορείτε να συνδεθείτε μέσω <a href="taxisnet">TaxisNet</a></h7>
                <hr>
                <div class="mb-3">
                    <i class="fas fa-user-circle"></i>
                    <label for="formGroupExampleInput" class="form-label">Όνομα Χρήστη</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" required>
                </div>
                <div class="mb-3">
                    <i class="fas fa-key"></i>
                    <label for="formGroupExampleInput2" class="form-label">Κωδικός</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" required>
                </div>
                <div class="mb-3">
                    <label>
                        <input type="checkbox" class="form-check-input" name="remember">Remember me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Σύνδεση</button>
                <div class="dropdown-divider"></div>
                <a class="forgot-item" style="color:blue; text-decoration:double; font-size:medium; text-align:right" href="#">Ξεχάσατε τον κωδικό σας;</button>
                <a class="create-item" style="color:blue; text-decoration:underline; font-size:x-large; text-align:center" href="#">Δημιουργία Λογαριασμού</a>
        </div>
        </div>

    </div>
</div>
    
</body>

<?php require_once("../components/footer.php"); ?>
