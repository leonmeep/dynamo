

<nav class="flex justify-evenly p-5">

    <a href="/" class="text-black font-thin hover:bg-green-400 hover:animate-pulse p-1 rounded-full">Home</a>

    <a href="/about" class="<?= urlIs('/about') ? 'bg-pink-200' : 'text-black font-thin' ?> hover:bg-green-400 hover:animate-pulse p-1 rounded-full">About</a>

    <a href="/contact" class="<?= urlIs('/contact') ? 'bg-pink-200' : 'text-black font-thin' ?> hover:bg-green-400 hover:animate-pulse p-1 rounded-full">Subscribe</a>
</nav>