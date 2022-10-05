<?php

class ApplicantModel
{
    private Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getApplicants(): array
    {
        $this->db->query('SELECT * FROM `applicant`');
        return $this->db->resultSet();
    }

    public function getApplicantById($id): object
    {
        $this->db->query('SELECT * FROM `applicant` WHERE `id` = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function destroyApplicantById($id): object
    {
        $this->db->query('DELETE FROM `applicant` WHERE `id` = :id');
        $this->db->bind(':id', $id);
        return $this->db->execute();
    }

    public function createApplicant()
    {
        $this->db->query('INSERT INTO `applicant` (`FirstName`, `LastName`, `JobId`, `Email`, `Phone`, `BirthDate`, `Street`, `Number`, `NumberExtension`, `Zipcode`, `Place`, `Applicantkey`, `IsActive`, `Decription`) VALUES (:FirstName, :LastName, :JobId, :Email, :Phone, :BirthDate, :Street, :Number, :NumberExtension, :Zipcode, :Place, :Applicantkey, :IsActive, :Decription)');

        $this->db->bind(':FirstName', $_POST['FirstName']);

        $this->db->bind(':LastName', $_POST['LastName']);

        $this->db->bind(':JobId', $_POST['JobId']);

        $this->db->bind(':Email', $_POST['Email']);

        $this->db->bind(':Phone', $_POST['Phone']);

        $this->db->bind(':BirthDate', $_POST['BirthDate'] ?? null);

        $this->db->bind(':Street', $_POST['Street']);

        $this->db->bind(':Number', $_POST['Number']);

        $this->db->bind(':NumberExtension', $_POST['Extension'] ?? null);

        $this->db->bind(':Zipcode', $_POST['Zipcode']);

        $this->db->bind(':Place', $_POST['Place']);

        $this->db->bind(':Applicantkey', random_int(100000, 999999));

        $this->db->bind(':IsActive', 1);

        $this->db->bind(':Decription', 0);

        $this->db->execute();

        header('LOCATION: /applicant');
    }

    public function updateApplicant($id)
    {
        $this->db->query('UPDATE `applicant` SET `FirstName` = :FirstName, `LastName` = :LastName, `JobId` = :JobId, `Email` = :Email, `Phone` = :Phone, `BirthDate` = :BirthDate, `Street` = :Street, `Number` = :Number, `NumberExtension` = :NumberExtension, `Zipcode` = :Zipcode, `Place` = :Place WHERE `Id` = :Id');

        $this->db->bind(':FirstName', $_POST['FirstName']);

        $this->db->bind(':LastName', $_POST['LastName']);

        $this->db->bind(':JobId', $_POST['JobId']);

        $this->db->bind(':Email', $_POST['Email']);

        $this->db->bind(':Phone', $_POST['Phone']);

        $this->db->bind(':BirthDate', $_POST['BirthDate'] ?? null);

        $this->db->bind(':Street', $_POST['Street']);

        $this->db->bind(':Number', $_POST['Number']);

        $this->db->bind(':NumberExtension', $_POST['Extension'] ?? null);

        $this->db->bind(':Zipcode', $_POST['Zipcode']);

        $this->db->bind(':Place', $_POST['Place']);

        $this->db->bind(':Id', $id);

        header('LOCATION: /applicant');
        return $this->db->execute();
    }
}
