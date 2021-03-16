<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="flex flex-col bg-gray-100">
            <div class="h-screen flex flex-col">
                <div class="h-full flex items-center justify-center">
                    <div class="relative max-w-md bg-white rounded shadow">
                        <div>
                            <div class="absolute w-12 h-12 -top-6 left-4 flex items-center justify-center bg-blue-500 rounded p-4">
                                <span class="font-semibold text-white uppercase">hi</span>
                            </div>
                            <div class="px-4 py-8 text-gray-900">
                                This is a test of the computer's navigational systems.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
