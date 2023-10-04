<?php require '../resources/views/layout/html_header.blade.php'; ?>
<?php require '../resources/views/layout/nav.blade.php'; ?>
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">USERS</h1>
    </div>
</header>
<main>
    <div class="bg-gray-900">
        <div class="mx-auto max-w-7xl">
            <div class="bg-gray-900 py-10">
                <div class="px-4 sm:px-6 lg:px-8">
                    <div class="sm:flex sm:items-center">
                        <div class="sm:flex-auto">
                            <h1 class="text-base font-semibold leading-6 text-white">Users</h1>
                            <p class="mt-2 text-sm text-gray-300">A list of all the users in your account including their name and email.</p>
                        </div>
                    </div>
                    <div class="mt-8 flow-root">
                        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <table class="min-w-full divide-y divide-gray-700">
                                    <thead>
                                    <tr>
                                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-white sm:pl-0">ID</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">NAME</th>
                                        <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-white">EMAIL</th>
                                    </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-800">
                                    <?php foreach ($users as $user): ?>
                                    <tr>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $user->id; ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $user->name; ?></td>
                                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $user->email; ?></td>
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
        </div>
    </div>

</main>




<?php require '../resources/views/layout/footer.blade.php'; ?>

