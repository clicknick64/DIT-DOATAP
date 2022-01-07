<link rel="stylesheet" href="css/index.css">
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
    <div class="page-content-container">
        <?php 
            require_once("../components/sidebar.php"); 
        ?>
        <div class="fluid-container" style="width:30rem; margin-top:1%;">
        <p>Μετά την οριστική υποβολή του χρήστη, η αίτηση λαμβάνει έναν μοναδικό 
            αριθμό καταχώρησης. Με αυτόν τον αριθμό θα μπορεί μέσω του προφίλ του 
            να παρακολουθεί την πορεία της αίτησής του.
        </p>

        <p>Σε επόμενο στάδιο εξετάζεται η πληρότητα των δικαιολογητικών της αίτησης.
            <br>
            Αν η αίτηση δεν είναι πλήρης θα δινεται στο χρήστη η δυνατότητα
            επεξεργασίας της, ώστε να συμπληρώσει τα κατάλληλα δικαιολογητικά.
            <br>
            Αν η αίτηση κριθεί επαρκής τότε λαμβάνει έναν αριθμό πρωτοκόλλου
            και προχωράει στο στάδιο της αξιολόγησης.
        </p>

        <p>
            Στο στάδιο της αξιολόγησης ξεκινάει η διαδικασία αντιστοίχισης του 
            τίτλου σπουδών, με ενός αντίστοιχου ελληνικού πανεπιστημιακού τμήματος. 
            <br>
            Εφόσον είναι εφικτή η αντιστοίχιση, η αίτηση εγκρίνεται. 
            <br>
            Σε περίπτωση μη εφικτής αντιστοίχισης, θα προτείνονται στον αιτούντα
            μαθήματα ελληνικών πανεπιστημιακών τμημάτων, στα οποία θα χρειαστεί να
            εξεταστεί επιτυχώς, προκειμένου να εγκριθεί η αίτηση ισοτιμίας.
        </p>
    </div>
    </div>
</div>


</body>

<?php require_once("../components/footer.php"); ?>