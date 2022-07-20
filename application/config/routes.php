<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

//Access Files
$route['default_controller'] = 'landing';
$route['login'] = 'Access/login';
$route['register'] = 'Register/RegisterPage';
$route['recover']='Recover/RecoverPage';
$route['service'] = 'service/ServicePage';
$route['about']='About/AboutPage';
$route['faq']='Faq/FaqPage';


//Admin Files
$route['admin'] = 'Admin_SystemSetup/UI';
$route['admin/dashboard'] = 'Admin/Dashboard';
$route['admin/users'] = 'Admin_Users/UserPage';
$route['admin/add-user'] = 'Admin_Add_User/AddUser';
$route['admin/services'] = 'Admin_Services/ServicePage';
$route['admin/add-service'] = 'Admin_Add_Service/AddService';
$route['admin/calendar'] = 'Admin_Calendar/CalendarPage';
$route['admin/dentists'] = 'Admin_Dentist/DentistPage';
$route['admin/add-dentist'] = 'Admin_Add_Dentist/AddDentist';
$route['admin/branches'] = 'Admin_Branch/BranchPage';
$route['admin/add-branch'] = 'Admin_Add_Branch/AddBranch';
$route['admin/invoices'] = 'Admin_Invoices/InvoicePage';
$route['admin/add-invoices'] = 'Admin_Add_Invoice/InvoicePage';

//Staff Files
$route['staff'] = 'Staff_SystemSetup/UI';
$route['staff/dashboard'] = 'Staff/Dashboard';
$route['staff/appointment'] = 'Staff_Appointment/AppointmentPage';
$route['staff/add-appointment'] = 'Staff_Add_Appointment/AddAppointment';
$route['staff/calendar'] = 'Staff_Calendar/CalendarPage';
$route['staff/invoices'] = 'Staff_Invoices/InvoicePage';

//Dentist Files
$route['dentist'] = 'Dentist_Calendar/CalendarPage';
$route['dentist/appointment'] = 'Dentist_Appointment/AppointmentPage';
$route['dentist/add-appointment'] = 'Dentist_Add_Appointment/AddAppointment';
$route['dentist/calendar'] = 'Dentist_Calendar/CalendarPage';
$route['dentist/schedule'] = 'Dentist_Schedule/SchedulePage';

//Patient Files
$route['patient'] = 'Patient_Calendar/PatientCalendarPage';
$route['patient/appointment'] = 'Patient_Appointment/AppointmentUserpage';
$route['patient/add-appointment'] = 'Patient_Add_Appointment/AddUserAppointment';
$route['patient/calendar'] = 'Patient_Calendar/PatientCalendarPage';
$route['patient/invoices'] = 'Patient_Invoices/PatientInvoicePage';


//Reserved Routes
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;


// dapat mawala ung index.php sa url eh
// pero naaccess na ung login update nyo nalang ung mga url sa assets
// dapat ung assets nyo nasa labas ng application folder