<x-layouts.app :title="__('Users Create')">
    <div>
        <form action="{{ route('user.store') }}" method="post">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-white/10 pb-12">
                    <h2 class="text-base/7 font-semibold text-white">User Create</h2>
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="name" class="block text-sm/6 font-medium text-white">Name</label>
                            <div class="mt-2">
                                <input id="name" type="name" name="name" autocomplete="name"
                                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="email" class="block text-sm/6 font-medium text-white">Email</label>
                            <div class="mt-2">
                                <input id="email" type="email" name="email" autocomplete="email"
                                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="password" class="block text-sm/6 font-medium text-white">Password</label>
                            <div class="mt-2">
                                <input id="password" type="password" name="password" autocomplete="password"
                                    class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
            </div>
        </form>
    </div>
</x-layouts.app>
