<?php

require 'views/partials/header.php';
require 'views/partials/nav.php';
require_once 'Database.php';

?>


<p class="flex justify-center p-6 pr-6 pb-6 pl-6 pt-6 m-7 ml-7 mr-7 mt-7 mb-7 text-black">
    Subscribe to out mailing list and stay up to date on all our upcoming shows </p>

<form class="flex justify-center p-6 pr-6 pb-6 pl-6 pt-6 m-7 ml-7 mr-7 mt-7 mb-7 text-black gap-1.5" action="/subscribe" method="POST">
    <div>
        <label for="name" class="hidden">Name</label>
        <input type="text" class="shadow-md shadow-emerald-500" id="name" name="name" placeholder="Your name...">

        <?php if (isset($errors['name'])) : ?>
            <p class="text-red-500 text-xs mt-3.5"><?= $errors['name'] ?></p>
        <?php endif; ?>
    </div>
    <div>
        <label for="email" class="hidden">Email</label>
        <input type="email" class="shadow-md shadow-emerald-500" id="email" name="email" placeholder="Your email...">

        <?php if (isset($errors['email'])) : ?>
            <p class="text-red-500 text-xs mt-3.5"><?= $errors['email'] ?></p>
        <?php endif; ?>
    </div>
`
    <div>
        <button type="submit" class="text-black gap-3 hover:bg-green-400 hover:animate-pulse rounded ">Subscribe</button>
    </div>





</form>

<?php require 'views/partials/footer.php'; ?>
