<?php
    if (DB_HOST == "localhost")
    {
        define("DOMAIN", SITE_DOMAIN.SITE_DIR);
        define("INC_DOMAIN", $_SERVER['DOCUMENT_ROOT'] . SITE_DIR);
    }
    else
    {
        define("DOMAIN", $_SERVER['DOCUMENT_ROOT']);
        define("INC_DOMAIN", $_SERVER['DOCUMENT_ROOT']);
    }

    // Link / Pages
    const PAGES = array(
        'home' => DOMAIN . '/home.php',
        'shuttle' => DOMAIN . '/bus_booking.php',
        'add-course' => DOMAIN . '/addCourse.php',
        'login' => DOMAIN . '/login.php',
        'admin' => DOMAIN . '/adminPanel.php',
        'logout' => DOMAIN . '/user/logout.php',
        'signup' => DOMAIN . '/signup.php',
        'profile' => DOMAIN . '/user/profile.php'
    );

    // Includes
    const INCLUDES = array(
        'connection' => INC_DOMAIN . '/include/connection.php',
        'main-function' => INC_DOMAIN . '/include/main-function.php',
        'course-function' => INC_DOMAIN . '/include/course-function.php',
        'login-function' => INC_DOMAIN . '/include/login-function.php',
        'shuttle-admin-function' => INC_DOMAIN . '/include/shuttle-admin-function.php',
        'shuttle-student-function' => INC_DOMAIN . '/include/shuttle-student-function.php',
        'signup-function' => INC_DOMAIN . '/include/signup-function.php',
        'nav-main-template' => INC_DOMAIN . '/template/nav-main.php',
        'view-all-course-template' => INC_DOMAIN . '/viewCourseListTemplate.php',
        'add-full-section-template' => INC_DOMAIN . '/addFullSectionTemplate.php',
        'add-time-template' => INC_DOMAIN . '/addTimeTemplate.php',
        'add-section-template' => INC_DOMAIN . '/addSectionTemplate.php',
        'add-course-template' => INC_DOMAIN . '/addCourseTemplate.php',
        'nav-logged-template' => INC_DOMAIN . '/template/nav-menu-for-logged-user.php',
        'nav-non-logged-template' => INC_DOMAIN . '/template/nav-menu-for-non-logged-user.php'
    );

    // Resources
    const CSS = array(
        'styles.css' => DOMAIN . '/css/styles.css',
        'modal.css' => DOMAIN . '/css/modal.css'
    );

    const JS = array(
        'toggle-visibility.js' => DOMAIN . '/js/toggle-visibility.js'
    );

    const IMG = array(
        'avatar' =>  DOMAIN . '/img/avatar.png',
        'logo' =>  DOMAIN . '/img/logo.png'
    );

    const DIR = array(
        'uploads' => DOMAIN . '/uploads/',
        'files' => DOMAIN . '/uploads/files/',
        'picture' => DOMAIN . '/uploads/picture/'
    );

    const INC_DIR = array(
        'uploads' => INC_DOMAIN . '/uploads/',
        'files' => INC_DOMAIN . '/uploads/files/',
        'picture' => INC_DOMAIN . '/uploads/picture/'
    );