Symfony Demo (Symfony 3.4)
========================

Please follow the below Steps for run the demo project:
1. Pull the code Using Git
2. For Set the Database credentials in app/config/parameters.yml
3. Run this command: `composer install`
4. Create Database using this command: `php bin/console doctrine:database:create`
5. Create Database Tables using this command: `php bin/console doctrine:schema:update --force`
6. In this demo, 2 types of Users : Admin and Superadmin. Create users one admin and another one is superadmin because of admin have access to faculty module and superadmin have faculty and department access.
7. For Create Superadmin user follow the steps: `php bin/console fos:user:create superadmin --super-admin`
8. For Create admin user run the project and click on `Create an account`
9. For Run the Project using this command: `php bin/console server:run`

## Demo Project Requirment:

As Per Demo Project Requirements there are following features in this projects
1. Simple Crud Operations - Its integrated in Faculty and Department Modules
2. Create Doctrine Entities - Two Doctrine Entities Created 1. Faculty 2. Department
3. Create Custom Doctrine Extention - Its integrated in 2 Place for postUpdate events on Faculty and Department, Whenever admin is update the Faculty or Department date update the modified time automatically. Locations for Custom Doctrine Extensions: `src\AppBundle\EventListener\PostFaculty.php` and `src\AppBundle\EventListener\PostDepartment.php`
4. Create Custom DQL Function - Locations of DQL Functions: `src\AppBundle\EventListener\PostFaculty.php` and `src\AppBundle\EventListener\PostDepartment.php`
5. Create Custom Twig Extension - Custom Date format When User update the records Locations: `src\AppBundle\Twig\AppExtension.php`
6. Authentication: Integrate FOSUserBundle for Authentications
7. Create Symfony Events: Its integrated in 2 Place for postUpdate events on Faculty and Department, Whenever admin is update the Faculty or Department date update the modified time automatically. Locations for Symfony Events : `src\AppBundle\EventListener\PostFaculty.php` and `src\AppBundle\EventListener\PostDepartment.php`
8. Symfony ACL: Superadmin have full access and Admin have only Faculty Module Access. If Admin Click or Direct hit the URL of Department Module it Redirect on Access Denied Restrication Page and its Setup Using AccessDeniedHandler.
