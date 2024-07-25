<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">در باشگاه آریا ثبت نام کنید.</h2>
        <p class="mt-2 text-center text-sm text-gray-600">
            یا
            <a wire:navigate href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">وارد حساب خود شوید</a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" wire:submit="register">
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">نام</label>
                    <div class="mt-1">
                        <input wire:model.live="form.name"
                               id="name"
                               name="name"
                               type="input"
                               required
                               class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('form.name') focus:border-red-500 border-red-500 outline-red-500 @enderror">
                    </div>
                    @error('form.name')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700">تلفن همراه</label>
                    <div class="mt-1">
                        <input wire:model.live="form.phone" id="phone" name="phone" type="input" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('form.phone') focus:border-red-500 border-red-500 outline-red-500 @enderror">
                        @error('form.phone')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <label for="gender" class="block text-sm font-medium text-gray-700">جنسیت</label>
                    <select wire:model.live="form.gender" id="gender" name="gender" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('form.gender') focus:border-red-500 border-red-500 outline-red-500 @enderror">
                        <option value="male" selected>مرد</option>
                        <option value="female">زن</option>
                    </select>
                    @error('form.gender')
                    <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">رمز عبور</label>
                    <div class="mt-1">
                        <input wire:model.live="form.password" id="password" name="password" type="password" autocomplete="current-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('form.password') focus:border-red-500 border-red-500 focus:ring-0 @enderror">
                        @error('form.password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">ثبت نام</button>
                </div>
            </form>
        </div>
    </div>
</div>
