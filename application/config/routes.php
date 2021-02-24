<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Myresume';
$route['resume-templates'] = 'Myresume/resume_templates';
$route['about-us'] = 'Myresume/about_us';
$route['career-blog'] = 'Myresume/career_blog';
$route['career-blog/write-resume-cv'] = 'Myresume/write_resume_cv';
$route['career-blog/create-cover-letter'] = 'Myresume/create_cover_letters';
$route['career-blog/examples'] = 'Myresume/examples';
$route['career-blog/personal-development-advice'] = 'Myresume/personal_development_advice';
$route['career-blog/inspiring-motivational-stories'] = 'Myresume/inspiring_motivational_stories';
$route['career-blog/find-a-job'] = 'Myresume/find_a_job';
$route['editor-index'] = 'Myresume/editor_index';
$route['404_override'] = 'Myresume/over';
$route['translate_uri_dashes'] = FALSE;
