<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>


<div class="py-40 ">
    <div class="bg-white rounded-lg  shadow-2xl md:flex mx-auto w-3/5">
        <img src="/img/<?= $komik['sampul']; ?>" alt="Boat" class="rounded-t-lg 
                md:w-1/3 md:rounded-l-lg md:rounded-t-none"> <!-- over-ride with rounded none -->

        <div class="p-6 space-y-12 ">
            <h2 class="mb-2 font-bold text:xl md:text-2xl text-orange-700"><?= $komik['judul']; ?></h2>
            <p class="text-orange-700"><?= $komik['penulis']; ?></p>
            <div class="">
                <a class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded" href="/komik/delete/<?= $komik['id']; ?>">delate</a>
                <a class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="/komik/edit/<?= $komik['slug']; ?>">edit</a>
            </div>

            <!-- <form action="/komik/<?= $komik['id']; ?>" method="post">

                <input type="hidden" name="_method" value="DELATE">
                <button class="inline-flex text-white bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded" type="submit">delate</button>

            </form> -->

            <a class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="/komik/">kebali</a>

        </div>

    </div>
</div>




<?= $this->endSection(); ?>