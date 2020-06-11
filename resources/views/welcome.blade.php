<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="md:flex mx-auto container border p-4 mt-5">
            <div class="md:flex-shrink-0">
                <img
                    class="rounded-lg md:w-56"
                    src="https://images.unsplash.com/photo-1569012871812-f38ee64cd54c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=450&q=80"
                    alt="marketing"
                >
            </div>
            <div class="mt-4 md:mt-0 md:ml-6">
                <div class="uppercase tracking-wide text-sm text-indigo-600 font-bold">
                    Marketing
                </div>
                <a
                    href="#"
                    class="block mt-1 text-lg leading-tight font-semibold text-gray-900 hover:underline"
                >
                    Finding Customers for your new business
                </a>
                <p class="mt-2 text-gray-600">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur at corrupti iure doloribus,
                     debitis dicta voluptatibus voluptate quod?
                    Aperiam mollitia ipsa eligendi amet delectus, quaerat officiis ut? Ea, eaque nisi.
                </p>
            </div>
        </div>
    </body>
</html>
