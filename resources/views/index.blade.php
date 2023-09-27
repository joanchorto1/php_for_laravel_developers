
<?php require '../resources/views/layout/html_header.blade.php'; ?>
<?php require '../resources/views/layout/nav.blade.php'; ?>
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">TASKS LIST</h1>
    </div>
</header>
<main >


    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="mt-5 mb-5"><?= $greeting; ?></h1>
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">

                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Tasks</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of tasks.</p>
                </div>
                <!-- <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                     <button type="button" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add task</button>
                 </div>
                 -->
            </div>
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">ID</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Name</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Description</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Completed</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                            <?php foreach ($tasks as $task): ?>
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0"><?= $task->id; ?></td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $task->title; ?></td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $task->description; ?></td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $task->completed; ?></td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit<span class="sr-only">, Lindsay Walton</span></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                                    <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</main>
<?php require '../resources/views/layout/footer.blade.php'; ?>




