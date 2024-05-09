<?php

require 'views/partials/header.php';
require 'views/partials/nav.php';



?>


<p class="text-indigo-600">If you'd like to receive emails about all our up coming events please fill in the form below</p>

<form action="/contact" method="POST">
    <div>
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required="">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required="">
    </div>

    <button type="submit" class="bg-indigo-400">Send</button>
</form>

<?php require 'views/partials/footer.php'; ?>
