<div>
    <ul>
        @guest()
            <li><a href="{{ route('show-registration-form') }}">Registration</a></li>
            <li><a href="{{ route('show-login-form') }}">Login</a></li>

        @endguest

        @auth()
            <li><a href="{{ route('account') }}">Account</a></li>


            <li>
                <form method="post" action="{{ route('logout-process') }}">
                    @csrf
                    <button type="submit">Log out</button>
                </form>

            </li>
        @endauth

    </ul>
</div>
