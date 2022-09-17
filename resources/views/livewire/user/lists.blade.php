<div class="flex flex-col">
    <input type="text" wire:model="search" name="search" id="search" class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="Search for a registration">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="border-b">
                    <tr>
                        <th>Email</th>
                        <th>Name</th>
                        <th>City</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($registrations as $register)
                        <tr class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $register->email }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $register->name }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $register->city }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
