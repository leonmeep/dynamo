

<nav class="flex justify-evenly p-5">

    <a href="/" class="text-black font-thin hover:bg-green-400 hover:animate-pulse p-1 rounded">Home</a>

    <a href="/about" class="<?= urlIs('/about') ? 'bg-pink-200' : 'text-black font-thin' ?> hover:bg-green-400 hover:animate-pulse p-1 rounded">About</a>

    <a href="/subscribe" class="<?= urlIs('/subscribe') ? 'bg-pink-200' : 'text-black font-thin' ?> hover:bg-green-400 hover:animate-pulse p-1 rounded">Subscribe</a>
</nav>