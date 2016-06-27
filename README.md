# codeigniter-signup-form-with-email-verification

Simple registration form and login form created with bootstrap for the demostration of activating user account by email verification with following features.
- Codeigniter 3.0
- Bootstrap forms
- Form validation
- Email verification
- Signin and signup forms

### configuration

- First of all paste the downloaded condeigniter directory inside server directory(e.g. for XAMPP xampp->htdocs folder)

- config codeigniter database connection in codeiniter->application->config->database.php

```sh

/* local server */
$db['default'] = array(
 	'dsn'	=> '',
 	'hostname' => 'localhost',
 	'username' => 'root',
 	'password' => '',
 	'database' => 'company',
 	'dbdriver' => 'mysqli',
 	'dbprefix' => '',
 	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
create Employee table inside company database.
```sh
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;
```
### Now test the project..
for local server: http://localhost/codeigniter/

