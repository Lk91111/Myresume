<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myresume extends CI_Controller {

	
	public function index()
	{
		$this->load->view('user/index');
	}
        public function resume_templates()
	{
		$this->load->view('user/resume-templates');
	}
        public function about_us()
	{
		$this->load->view('user/about-us');
	}
        public function editor_index()
	{
		$this->load->view('admin/index');
	}
        
        public function write_resume_cv()
	{
		$this->load->view('user/career-blog/resume-advice-for-students-with-no-experience');
	}
        public function create_cover_letters()
	{
		$this->load->view('user/career-blog/how-to-write-a-cover-letter-guide');
	}
        public function examples()
	{
		$this->load->view('user/career-blog/computer-science-resume');
	}
        
        public function inspiring_motivational_stories()
	{
		$this->load->view('user/career-blog/elon-musk-one-page-resume');
	}
        public function find_a_job()
	{
		$this->load->view('user/career-blog/why-should-we-hire-you-best-answers');
	}
        public function over()
	{
		$this->load->view('user/404');
	}
}


