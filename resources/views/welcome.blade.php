<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Laravel</title>
    <body>
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">Nombres</th>
                            <th scope="col" class="px-6 py-4">Grado</th>
                            <th scope="col" class="px-6 py-4">Seccion</th>
                            <th scope="col" class="px-6 py-4">Nivel</th>
                            <th scope="col" class="px-6 py-4">Turno</th>

                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($classrooms as $classroom )
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $classroom->id }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $classroom->students->name}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $classroom->degrees->academic_degree}}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $classroom->sections->academic_section }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $classroom->levels->academic_level  }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $classroom->turns->academic_turn }}</td>
                                </tr>
                                @endforeach

                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
    </body>
</html>
