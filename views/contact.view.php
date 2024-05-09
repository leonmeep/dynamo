<?php

require 'views/partials/header.php';
require 'views/partials/nav.php';



?>


<p class="flex justify-center p-6 pr-6 pb-6 pl-6 pt-6 m-7 ml-7 mr-7 mt-7 mb-7 text-black">
    If you'd like to receive emails about all our upcoming events please fill in the form below</p>

<form class="flex justify-center p-6 pr-6 pb-6 pl-6 pt-6 m-7 ml-7 mr-7 mt-7 mb-7 text-black gap-1.5" action="/contact" method="POST">
    <div>
        <label for="name" class="hidden">Name</label>
        <input type="text" id="name" name="name" required="" placeholder="Your name...">
    </div>
    <div>
        <label for="email" class="hidden">Email</label>
        <input type="email" id="email" name="email" required="" placeholder="Your email...">
    </div>

    <button type="submit" class="text-black hover:bg-green-400 hover:animate-pulse p-1 rounded-full">Send</button>
</form>

<?php require 'views/partials/footer.php'; ?>
