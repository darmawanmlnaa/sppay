<div class="card">
    <div class="card-header">
        <h4>Ubah Password</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('password.update') }}" method="post" class="needs-validation">
            @csrf
            @method('put')
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Kata sandi sekarang</label>
                    <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current-password" required>
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Kata sandi baru</label>
                    <input id="password" name="password" type="password" class="form-control" autocomplete="new-password" required>
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Konfirmasi kata sandi</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password" required>
                    <div class="invalid-feedback">
                        Please fill in the email
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group mb-0 col-12">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="seepass" class="custom-control-input" id="seepass" onclick="seePassword()">
                        <label class="custom-control-label" for="seepass">Lihat kata sandi</label>
                    </div>
                </div>
            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </form>
    </div>
</div>

{{-- breeze template --}}
{{-- <section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label for="current_password" :value="__('Current Password')" />
            <x-text-input id="current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('New Password')" />
            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section> --}}