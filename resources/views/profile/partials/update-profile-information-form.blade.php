<form id="send-verification" method="post" action="{{ route('verification.send') }}">
    @csrf
</form>

<div class="card">
    <form method="post" action="{{ route('profile.update') }}" class="needs-validation" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="card-header">
        <h4>Edit Profile</h4>
    </div>
    <div class="card-body">
        <div class="row">                               
            <div class="form-group col-md-12">
                <label>Nama</label>
                <input id="name" name="name" type="text" class="form-control" value="{{ Auth::user()->name }}" required="">
                <div class="invalid-feedback">
                    Please fill in the first name
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label>Email</label>
                <input id="email" name="email" type="email" class="form-control" value="{{ Auth::user()->email }}" required="">
                <div class="invalid-feedback">
                    Please fill in the email
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="form-group col-md-12">
                <label>Status</label>
                <input type="hidden" id="role" name="role" class="form-control" value="{{ Auth::user()->role }}" required="">
                <fieldset disabled>
                @if (Auth::user()->role == 'admin')
                    <input type="text" class="form-control" value="Admin">
                @elseif (Auth::user()->role == 'teacher')
                    <input type="text" class="form-control" value="Petugas">
                @else
                    <input type="text" class="form-control" value="Murid">
                @endif
                </fieldset>
            </div>
        </div> --}}
        <input type="hidden" id="role" name="role" class="form-control" value="{{ Auth::user()->role }}" required="">
        <input type="hidden" id="thumb" name="thumb" value="{{ Auth::user()->thumb }}">
    </div>
    <div class="card-footer text-right">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
    </form>
</div>


{{-- breeze template --}}
{{-- <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
    @csrf
    @method('patch')

    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div>
                <p class="text-sm mt-2 text-gray-800">
                    {{ __('Your email address is unverified.') }}

                    <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        {{ __('Click here to re-send the verification email.') }}
                    </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 font-medium text-sm text-green-600">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                @endif
            </div>
        @endif
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>{{ __('Save') }}</x-primary-button>

        @if (session('status') === 'profile-updated')
            <p
                x-data="{ show: true }"
                x-show="show"
                x-transition
                x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600"
            >{{ __('Saved.') }}</p>
        @endif
    </div>
</form> --}}