<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container mx-auto px-4 sm:px-8">

    <!-- component -->
    <div class="flex items-center  bg-green-300">
        <div class="w-full bg-white rounded shadow-lg p-8 m-4 md:max-w-sm md:mx-auto">
            <h1 class="block w-full text-center text-grey-darkest mb-6">tambah data</h1>
            <form class="mb-4 md:flex md:flex-wrap md:justify-between" action="/komik/save" method="post">
                <?= csrf_field(); ?>
                <div class="flex flex-col mb-4 md:w-full">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="judul">judul</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="judul" id="judul">
                </div>
                <div class="flex flex-col mb-4 md:w-full">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="penulis">penulis</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="penulis" id="penulis">
                </div>
                <div class="flex flex-col mb-4 md:w-full">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="penerbit">penerbit</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="penerbit" id="penerbit">
                </div>
                <div class="flex flex-col mb-6 md:w-full">
                    <label class="mb-2 uppercase font-bold text-lg text-grey-darkest" for="sampul">sampul</label>
                    <input class="border py-2 px-3 text-grey-darkest" type="text" name="sampul" id="sampul">
                </div>
                <button class="block bg-green-500 hover:bg-green-700 text-white uppercase text-lg mx-auto p-4 rounded" type="submit">Tambah</button>
            </form>
            <a class="block w-full text-center no-underline text-sm text-grey-dark hover:text-grey-darker" href="/login">Already have an account?</a>
        </div>
    </div>

    <?php if (session()->getFlashdata('pesan')) :  ?>

        <div class="flex p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800 mt-32" role="alert">
            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
            </svg>
            <div>
                <span class="font-medium">Success alert!</span> <?= session()->getFlashdata('pesan'); ?>
            </div>
        </div>
    <?php endif; ?>


    <div class="py-8">
        <!-- <a class="inline-flex text-white bg-indigo-500 border-0 my-5 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="/komik/create">Tambah data baru +</a> -->

        <div>
            <h2 class="text-2xl font-semibold leading-tight">Invoices</h2>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow-md rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Client / Invoice
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Amount
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                Issued / Due
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                AKTIF
                            </th>
                            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100"></th>
                        </tr>
                    </thead>


                    <tbody>

                        <?php foreach ($komik as $name) : ?>
                            <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <div class="flex">
                                        <div class="flex-shrink-0 w-10 h-10">
                                            <img class="w-full h-full rounded-full" src="/img/<?= $name['sampul']; ?>" alt="" />
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                <?= $name['judul']; ?>
                                            </p>
                                            <p class="text-gray-600 whitespace-no-wrap">000004</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 text-lg"><?= $name['penulis']; ?></p>

                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <p class="text-gray-900 whitespace-no-wrap">Sept 28, 2019</p>
                                    <p class="text-gray-600 whitespace-no-wrap">Due in 3 days</p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <a class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded" href="/komik/<?= $name['slug']; ?>">Detail</a>

                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                    <button type="button" class="inline-block text-gray-500 hover:text-gray-700">
                                        <svg class="inline-block h-6 w-6 fill-current" viewBox="0 0 24 24">
                                            <path d="M12 6a2 2 0 110-4 2 2 0 010 4zm0 8a2 2 0 110-4 2 2 0 010 4zm-2 6a2 2 0 104 0 2 2 0 00-4 0z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div>




<?= $this->endSection(); ?>