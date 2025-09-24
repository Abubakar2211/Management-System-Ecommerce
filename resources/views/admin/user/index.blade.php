<x-layouts.app :title="__('Users')">
    <div class="overflow-x-auto ">
        <div class="flex justify-between">
            <h1 class="text-lg my-2"> Users</h1>
            <a href="{{ route('user.create') }}"
                class="text-stone-900 bg-white border border-stone-300 focus:outline-none hover:bg-stone-100 focus:ring-4 focus:ring-stone-100 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-stone-800 dark:text-white dark:border-stone-600 dark:hover:bg-stone-700 dark:hover:border-stone-600 dark:focus:ring-stone-700"><i
                    class="fa-solid fa-plus"></i> Create</a>
        </div>
        <table class="min-w-full bg-white rounded-xl overflow-hidden">
            <thead class="bg-stone-950 whitespace-nowrap">
                <tr>
                    <th class="p-4 text-left text-[13px] font-semibold text-white">
                        Name
                    </th>
                    <th class="p-4 text-left text-[13px] font-semibold text-white">
                        Email
                    </th>
                    <th class="p-4 text-left text-[13px] font-semibold text-white">
                        Role
                    </th>
                    <th class="p-4 text-left text-[13px] font-semibold text-white">
                        Joined At
                    </th>
                    <th class="p-4 text-left text-[13px] font-semibold text-white">
                        Actions
                    </th>
                </tr>
            </thead>
            <tbody class="whitespace-nowrap">
                <tr class="bg-stone-900 hover:bg-stone-800">
                    <td class="p-4 text-[15px] text-white font-medium">
                        John Doe
                    </td>
                    <td class="p-4 text-[15px] text-white font-medium">
                        john@example.com
                    </td>
                    <td class="p-4 text-[15px] text-white font-medium">
                        Admin
                    </td>
                    <td class="p-4 text-[15px] text-white font-medium">
                        2022-05-15
                    </td>
                    <td class="p-4">
                        <div class="flex items-center">
                            <a href="{{ route('assignUserToRole') }}" title="Assign Role" class="cursor-pointer mr-3">
                                <i class="fa-solid fa-user-tag"></i>
                            </a>
                            <a href="{{ route('assignUserToPermission') }}" title="Assign Permission"
                                class="cursor-pointer mr-3">
                                <i class="fa-solid fa-key"></i>
                            </a>
                            <a href="{{ route('user.edit') }}" class="mr-3 cursor-pointer" title="Edit">
                                <i class="fa-solid fa-pen"></i>
                            </a>
                            <form action="{{ route('user.destroy') }}">
                                <button title="Delete" class="cursor-pointer">
                                    <i class="fa-solid fa-delete-left"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-layouts.app>
