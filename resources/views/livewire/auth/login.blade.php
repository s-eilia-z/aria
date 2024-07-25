<div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
        <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">وارد حساب کاربری خود شوید.</h2>
        <p class="mt-2 text-center text-sm text-gray-600">
            یا
            <a wire:navigate href="/register" class="font-medium text-indigo-600 hover:text-indigo-500">در باشگاه آریا ثبت نام کنید</a>
        </p>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <form class="space-y-6" wire:submit="login">
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
                    <label for="password" class="block text-sm font-medium text-gray-700">رمز عبور</label>
                    <div class="mt-1">
                        <input wire:model.live="form.password" id="password" name="password" type="password" autocomplete="current-password" required class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm @error('form.password') focus:border-red-500 border-red-500 focus:ring-0 @enderror">
                        @error('form.password')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input wire:model.live="form.remember" id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                        <label for="remember-me" class="mr-2 block text-sm text-gray-700">من رو یادت بمونه</label>
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">ثبت نام</button>
                </div>
            </form>
        </div>
    </div>
</div>
