<?= $this->extend('layout/template'); ?>



<?= $this->section('content'); ?>

<div class="flex items-center m-20 border-gray-600 rounded shadow p-3">
  <img src="https://tailwindcss.com/_next/static/media/sarah-dayan.a8ff3f1095a58085a82e3bb6aab12eb2.jpg" alt="portrait" width="130" height="130" class="rounded mr-4">
  <div class="text-gray-700">
    <h2 class="text-gray-900 font-bold text-2xl">Sarah Dayan</h2>
    <div class="text-sm">Product Engineer</div>
    <div class="text-sm">erinlundford@example.com</div>
    <div class="text-sm">(555) 765-4321</div>
  </div>
</div>


<!-- spacing -->
<div class="p-20">
  <h2 class="mb-4">Spacing Section</h2>
  <p class="mb-4">Tailwind helps to space things out with margin and padding</p>
  <button class="mr-3 px-4 py-2">Learn More</button>
  <button class="py-2 px-8">Sign Up</button>
</div>

<div class="p-20 bg-blue-300">
  <h2 class="">Box Properties</h2>
  <div class=" mt-4 p-10 bg-purple-300 rounded-lg border-purple-800 border shadow-4xl">I am a box</div>
</div>

<!-- sizing and numbering -->
<div class="p-20 bg-blue-500">
  <button class="p-4 bg-green-400 rounded w-8">click me</button>
  <button class="p-4 bg-green-400 rounded w-12">click me</button>
  <button class="p-4 bg-green-400 rounded w-20">click me</button>
  <button class="p-4 bg-green-400 rounded w-32">click me</button>
  <button class="p-4 bg-green-400 rounded w-48">click me</button>
</div>

<!-- typography -->
<div class="p-20 text-gray-800 leading-relaxed text-lg">
  <h2 class="mb-1 text-4xl text-gray-700 font-bold tracking-wide">learning about tailwind</h2>
  <h3 class="mb-8 text-2xl text-gray-500">is better than raining</h3>
  <p class="mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam accusamus, nesciunt facere quia unde fugiat animi aliquam quaerat porro. Unde praesentium optio hic nihil pariatur sint dolores voluptatum velit quaerat!</p>
  <p class="mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim pariatur animi beatae consectetur nihil natus eos libero quisquam, eum ipsam veniam iusto quas dolore unde suscipit rerum. Fugiat, accusantium non?</p>
  <p class="mb-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat id amet voluptas, recusandae cupiditate nihil autem a dolore distinctio veritatis ea, sint tempore! Maiores quos in vero veritatis facilis autem!</p>
</div>

<div class="p-20 bg-gray-800 space-y-3">
  <div class="p-4 rounded-lg bg-red-100 text-red-800 hover:bg-red-900 hover:text-red-100 transition duration-500 hover:translate-x-4 transform hover:scale-110">I am a box</div>
  <div class="p-4 rounded-lg bg-red-200 text-red-700 animate-spin">I am a box</div>
  <div class="p-4 rounded-lg bg-red-300 text-red-600 animate-ping">I am a box</div>
  <div class="p-4 rounded-lg bg-red-400 text-red-200 animate-pulse">I am a box</div>
  <div class="p-4 rounded-lg bg-red-500 text-red-200 animate-bounce">I am a box</div>
  <div class="p-4 rounded-lg bg-red-600 text-red-200">I am a box</div>
  <div class="p-4 rounded-lg bg-red-700 text-red-100">I am a box</div>
  <div class="p-4 rounded-lg bg-red-800 text-red-200">I am a box</div>
  <div class="p-4 rounded-lg bg-red-900 text-red-200">I am a box</div>
  <div class="p-4 rounded-lg bg-blue-600">I am a box</div>
</div>

<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-blue-400 to-purple-400">
  <h1 class="text-6xl font-bold bg-clip-text text-transparent bg-gradient-to-br from-blue-600 to-purple-600">Gradients are here</h1>
</div>

<a href="/pages/contact">tesssssssssssssss</a>

<?= $this->endSection(); ?>