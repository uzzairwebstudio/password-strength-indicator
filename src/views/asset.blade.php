<link rel="stylesheet" href="vendor/uzzairwebstudio/password-strength/src/assets/password-strength.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var strength = {
            0: "Worst ☹",
            1: "Bad ☹",
            2: "Weak ☹",
            3: "Good ☺",
            4: "Strong ☻"
        }

        var password = document.getElementById('password');
        var meter = document.getElementById('password-strength-meter');
        var text = document.getElementById('password-strength-text');

        password.addEventListener('input', function () {
            var val = password.value;
            var result = zxcvbn(val);

            // Update the password strength meter
            meter.value = result.score;

            // Update the text indicator
            if (val !== "") {
                text.innerHTML = "Strength: " + "<strong>" + strength[result.score] + "</strong>" +
                    "<span class='feedback'>" + result.feedback.warning + " " + result.feedback.suggestions +
                    "</span";
            } else {
                text.innerHTML = "";
            }
        });
    });

</script>
