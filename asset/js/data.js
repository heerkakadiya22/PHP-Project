function validateform() {
    var user_name = document.signup.user_name.value;
    var user_email = document.signup.user_email.value;
    var user_gender = document.signup.user_gender.value;
    var user_identity = document.signup.user_identity.value;
    var user_age = document.signup.user_age.value;
    var password = document.signup.password.value;
    var child_name = document.signup.child_name.value;
    var child_age = document.signup.child_age.value;
    var child_gender = document.signup.child_gender.value;

    var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
    var letters = /^[A-Za-z]+$/;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (user_name == "" || user_email == "" || user_gender == "" || user_identity == "" || user_age == "" || password == ""|| child_name == "" || child_age == "" || child_gender == "") {
        alert('Fill All the Details');
        return false;
    } else if (!letters.test(user_name)) {
        alert('Name field required only alphabet characters');
        document.signup.user_name.focus();
        return false;
    } else if (!filter.test(user_email)) {
        alert('Invalid email Detail');
        document.signup.user_email.focus();
        return false;
    } else if (user_identity == "teen" && (user_age < 6 || user_age > 17)) {
        alert('User age is not within valid range for teen');
        return false;
    } else if (user_identity == "parent" && user_age < 25) {
        alert('User age is not within valid range for parent');
        return false;
    } else if (user_identity == "adult" && (user_age < 18 || user_age > 50)) {
        alert('User age is not within valid range for adult');
        return false;
    } else if (user_identity == "old" && user_age < 60) {
        alert('User age is not within valid range for old');
        return false;
    } else if (!pwd_expression.test(password)) {
        alert('Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character.');
        document.signup.password.focus();
        return false;
    } else if (password.length < 6) {
        alert('Password minimum length is 6');
        document.signup.password.focus();
        return false;
    } else {
        alert("Thank you for signing up. Your signup was successful.");
        return true;
    }
}
