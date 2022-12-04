<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">Verify Account</h2>
        <p class="mt-1 text-sm text-gray-600">Your account is

            @if ($user->verified_status == 'not_verified')
                <span style="color:red; font-weight:bolder">
                    NOT VERIFIED
                </span>
            @elseif ($user->verified_status == 'verified')
                <span style="color:green; font-weight:bolder">
                    VERIFIED
                </span>
            @else
                <span>being verified by the admin</span>
            @endif

        </p>
    </header>

    @if ($user->verified_status == 'not_verified')
        @if ($user->id_card == null || $user->selfie_id == null)
            <p class="mt-0 text-sm text-red-600">Please add your id card and selfie with id card</p>
        @endif
        <form action="/profile/verify" method="post">
            @csrf
            <button id="verifyButton" type="submit"
                class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-500 active:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Verify Account
            </button>
        </form>
        @if ($user->id_card == null || $user->selfie_id == null)
            <script>
                btn = document.getElementById("verifyButton");
                btn.setAttribute('disabled', 'true');
            </script>
        @endif
    @endif




</section>
