<?php
include APPROOT . "/Views/Includes/header.php";
$data = $data ?? [] ?>

<form method="post" action="<?php URLROOT ?>/applicant/update/<?= $data["applicant"]->Id ?>">
    <div class="mt-4 ml-4">
        <div>
            <label for="full_name">Full Name</label>
            <input id="full_name" type="text" name="FirstName" placeholder="First Name" value="<?php echo $data["applicant"]->FirstName ?>">
            <input id="full_name" type="text" name="LastName" placeholder="Last Name" value="<?php echo $data["applicant"]->LastName ?>">
        </div>
        <div class="mt-2">
            <label for="application">Application for</label>
            <select name="JobId" id="application">
                <option selected disabled>Choose a job</option>
                <option value="1" <?php if ($data['applicant']->JobId == '1') {
                                        echo 'Selected';
                                    } ?>>Job 1</option>
            </select>
        </div>
        <div class="mt-2">
            <label for="email_input">Email</label>
            <input id="email_input" type="email" name="Email" placeholder="E-mail" value="<?php echo $data["applicant"]->Email ?>">
        </div>
        <div class="mt-2">
            <label for="phone_input">Phone Number</label>
            <input id="phone_input" type="tel" name="Phone" placeholder="Phone Number" value="<?php echo $data["applicant"]->Phone ?>">
        </div>
        <div class="mt-2">
            <label for="birthday_input">Birth Date</label>
            <input id="birthday_input" type="date" name="BirthDate" placeholder="mm/dd/yy" value="<?php echo $data["applicant"]->BirthDate ?>">
        </div>

        <div class="mt-2">
            <label for="Adress">Adress</label>

            <div class="">
                <div class="">
                    <input id="Adress" type="text" name="Street" placeholder="Street" value="<?php echo $data["applicant"]->Street ?>">
                </div>

                <div class="">
                    <input id="Adress" type="number" name="Number" placeholder="Number" value="<?php echo $data["applicant"]->Number ?>">
                </div>

                <div class="">
                    <input id="Adress" type="text" name="NumberExtension" placeholder="Number extension" value="<?php echo $data["applicant"]->NumberExtension ?>">
                </div>

                <div class="">
                    <input id="Adress" type="text" name="Zipcode" placeholder="Zipcode" value="<?php echo $data["applicant"]->ZipCode ?>">
                </div>

                <div class="">
                    <input id="Adress" type="text" name="Place" placeholder="Place" value="<?php echo $data["applicant"]->Place ?>">
                </div>

            </div>
        </div>
        <div class="mt-2">
            <a href="<?= URLROOT ?>/applicant/destroy/<?php echo $data['applicant']->Id ?>">
                <button type="submit" value="submit" class="text-danger">Delete</button>
            </a>
            <br>

            <button type="submit" value="submit" class="text-success">Edit</button>
        </div>
    </div>
</form>