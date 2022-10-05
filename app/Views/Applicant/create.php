<?php

require_once APPROOT . '/Views/Includes/header.php';
$data = $data ?? [];

?>

<form method="post" action="<?php URLROOT ?>/applicant/store">
    <div class="mt-4 ml-4">
        <div>
            <label for="full_name">Full Name</label>
            <input id="full_name" type="text" name="FirstName" placeholder="John">
            <input id="full_name" type="text" name="LastName" placeholder="Doe">
        </div>
        <div class="mt-2">
            <label for="application">Application for</label>
            <select name="JobId" id="application">
                <option selected disabled>Choose a job</option>
                <option value="1">Job 1</option>
            </select>
        </div>
        <div class="mt-2">
            <label for="email_input">Email</label>
            <input id="email_input" type="email" name="Email" placeholder="E-mail">
        </div>
        <div class="mt-2">
            <label for="phone_input">Phone Number</label>
            <input id="phone_input" type="tel" name="Phone" placeholder="Phone Number">
        </div>
        <div class="mt-2">
            <label for="birthday_input">Birth Date</label>
            <input id="birthday_input" type="date" name="BirthDate" placeholder="mm/dd/yy">
        </div>

        <div class="mt-2">
            <label for="Adress">Adress</label>

            <div class="">
                <div class="">
                    <input id="Adress" type="text" name="Street" placeholder="Street">
                </div>

                <div class="">
                    <input id="Adress" type="number" name="Number" placeholder="Number">
                </div>

                <div class="">
                    <input id="Adress" type="text" name="NumberExtension" placeholder="Number extension">
                </div>

                <div class="">
                    <input id="Adress" type="text" name="Zipcode" placeholder="Zipcode">
                </div>

                <div class="">
                    <input id="Adress" type="text" name="Place" placeholder="Place">
                </div>

            </div>
        </div>

        <div class="mt-2">
            <button type="submit" value="submit">Submit</button>
        </div>
    </div>
</form>