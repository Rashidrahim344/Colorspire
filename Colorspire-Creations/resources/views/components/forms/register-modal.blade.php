@php
$config = [
  'id' => 'hs-toggle-between-modals-register-modal',
  'title' => 'Sign up',
  'subTitle' => 'Already have an account?',
  'loginBtn' => 'Sign in here',
  'loginBtnDataHS' => '#hs-toggle-between-modals-login-modal',
];
@endphp

<div
  id="{{ $config['id'] }}"
  class="hs-overlay hs-overlay-backdrop-open:bg-neutral-900/90 absolute start-0 top-0 z-50 hidden h-full w-full"
  data-lenis-prevent
>
  <div
    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 m-3 mt-0 opacity-0 transition-all ease-out sm:mx-auto sm:w-full sm:max-w-lg"
  >
    <div class="mx-auto w-full max-w-md p-6">
      <div
        class="mt-7 flex max-h-[calc(100vh-8rem)] flex-col rounded-xl border border-neutral-200 bg-neutral-100 shadow-xs dark:border-neutral-700 dark:bg-neutral-800"
      >
        <div class="overflow-y-auto p-4 sm:p-7">
          <div class="text-center">
            <div
              class="block text-2xl font-bold text-neutral-800 dark:text-neutral-200"
              role="heading"
              aria-level="1"
              aria-label="{{ $config['title'] }}"
            >
              {{ $config['title'] }}
            </div>
            <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
              {{ $config['subTitle'] }}
              <button
                class="rounded-lg p-1 font-medium text-orange-400 decoration-2 ring-zinc-500 outline-hidden hover:underline focus-visible:ring-3 dark:text-orange-400 dark:ring-zinc-200 dark:focus:outline-hidden"
                data-hs-overlay="{{ $config['loginBtnDataHS'] }}"
              >
                {{ $config['loginBtn'] }}
              </button>
            </p>
          </div>
          <div class="mt-5">
            <x-buttons.google-btn title="Sign up with Google" />
            <div
              class="flex items-center py-3 text-xs text-neutral-400 uppercase before:me-6 before:flex-[1_1_0%] before:border-t before:border-neutral-200 after:ms-6 after:flex-[1_1_0%] after:border-t after:border-neutral-200 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600"
            >
              Or
            </div>
            <form>
              <div class="grid gap-y-4">
                <x-forms.input.email-input
                  id="register-email"
                  errorId="register-email-error"
                />
                <x-forms.input.password-input
                  id="create-password"
                  errorId="register-password-error"
                  content="8+ characters required"
                />
                <x-forms.input.password-input
                  label="Confirm Password"
                  id="confirm-password"
                  errorId="confirm-password-error"
                  content="Password does not match the password"
                />
                <x-forms.input.checkbox label="I accept the " id="terms-agree">
                  <a
                    class="font-medium text-orange-400 decoration-2 hover:underline dark:text-orange-400 dark:focus:outline-hidden"
                    href="#">Terms and Conditions</a
                  >
                </x-forms.input.checkbox>
                <x-buttons.auth-btn title="Sign up" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
