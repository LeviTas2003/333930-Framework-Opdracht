<?php

class Applicant extends BaseController
{
    private ApplicantModel $applicantModel;

    public function __construct()
    {
        $this->applicantModel = $this->model('ApplicantModel');
    }

    public function index()
    {
        $data = [
            'applicant' => $this->applicantModel->getApplicants()
        ];

        $this->view('Applicant/index', $data);
    }

    public function edit($id)
    {
        $data = [
            'applicant' => $this->applicantModel->getApplicantById($id)
        ];

        $this->view('Applicant/edit', $data);
    }

    public function update($id)
    {
        $this->applicantModel->updateApplicant($id);
    }

    public function destroy($id)
    {
        if ($this->applicantModel->destroyApplicantById($id)) {
            header('LOCATION: /applicant');
        };
    }

    public function create()
    {
        $this->view('Applicant/create');
    }

    public function store()
    {
        $this->applicantModel->createApplicant();
    }
}
