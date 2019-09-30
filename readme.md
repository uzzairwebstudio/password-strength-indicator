**Password Strength Indicator**

This is the password stength indicator package written for Laravel. The indicator algorithm is taken from [Dropbox Low-Budget Password Strength Estimation](https://github.com/dropbox/zxcvbn).

**Installation**

First and foremost,

    composer require uzzairwebstudio/password-strength

then include the blade file which contains assets link in your master template.

    @include('password-strength::asset')

Make sure to add 'password' id to your password input and include the password strength meter view just below the password input.

    <input type="password" name="password" id="password">
    @include('password-strength::password-meter')

That's it. 