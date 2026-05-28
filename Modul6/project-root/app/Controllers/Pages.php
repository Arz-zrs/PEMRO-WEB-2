<?php
namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Models\ProfileModel;

class Pages extends BaseController
{
    protected $profileModel;

    public function __construct()
    {
        $this->profileModel = new ProfileModel();
    }

    public function index()
    {
        return redirect()->to('/home');
    }

    public function home()
    {
        $data['title'] = 'Home';
        $data['profile'] = $this->profileModel->getProfileDataSummary();

        return view('templates/header', $data)
            . view('pages/home')
            . view('templates/footer');
    }

    public function profile()
    {
        $data['title'] = 'Profile';
        $data['profile'] = $this->profileModel->getProfileData();

        return view('templates/header', $data)
            . view('pages/profile')
            . view('templates/footer');
    }

    public function view(string $page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); 

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }
}