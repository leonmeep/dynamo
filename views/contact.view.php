<?php
require 'views/partials/nav.php';
require 'views/partials/header.php';


?>




<form action="/contact" method="POST" class="flex m-2 flex-col flex-wrap p-9 space-x-0 space-y-3.5 justify-start content-between text-2xl bg-lime-500 rounded-tl-lg rounded-tr-lg rounded-br-lg rounded-bl-lg border-dotted border-8 border-yellow-300 shadow-none blur-none hue-rotate-30 transition-colors animate-none">
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
