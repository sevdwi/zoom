<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" href="<?= base_url('assets/business.png') ?>" type="image/png" sizes="16x16">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="<?= base_url('assets/business.png') ?>" alt="Your Company">
            <h2 class="font-mono mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Jadwal Zoom
                Diskominfo</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="<?= base_url('/login') ?>" method="POST">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="bg-red-100 text-red-700 p-2 rounded mb-2">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>
                <div>
                    <label for="username" class="block text-sm/6 font-medium text-gray-900">Username</label>
                    <div class="mt-2">
                        <input type="text" name="username" id="" placeholder="Username" autocomplete="username" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                        <!-- <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                        </div> -->
                    </div>
                    <div class="mt-2">
                        <input type="password" name="password" id="" placeholder="Password"
                            autocomplete="current-password" required
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                        in</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>