<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'front.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/all-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about-us' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.us',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tech-web-team_page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/testimonial-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'testimonial.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs-page-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.page.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/blogs-publications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.page.publications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/consultancy-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'consultancy.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/research-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'research.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/managing/committe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C1lkvVLbGaQCPgmA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/advisor/committe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qQLgP01LMF8DuTNo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/all/notice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'allnotice.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admission/now' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admission.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sponsor-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sponsor.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/certificate-verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'certificate.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/check-certificate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'check.certificate',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/show-cart' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show-cart',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-cart-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update-cart-product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/checkout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'checkout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'confirm.order',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/gallery-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'gallery.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contacts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contacts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-profile-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-member-details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.member.details',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-member-details-store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.member.details.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/user-update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.update.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enrollment-page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'enrollment.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enroll' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'enroll',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/enrollment_data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.enrollment.form.data',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GaWuuPysOxMt0r5a',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OZP1UUle0wJAdFC1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YFxlq3iehOKQfBSu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.gallery',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.gallery',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-gallery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.gallery',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.services',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.services',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.about',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.about',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.about',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.team',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.team',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-team' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.team',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-sub-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.sub.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-sub-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.sub.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-sub-menu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.sub.menu',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-testimonial' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.testimonial',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.blogs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.blogs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-blogs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.blogs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-sponsor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.sponsor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-sponsor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.sponsor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-sponsor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.sponsor',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.category',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.category',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.product',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.product',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-receipt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.receipt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-receipt' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.receipt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-research' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.research',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-research' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.research',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-research' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.research',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add-consultancy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.consultancy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-consultancy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.consultancy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/manage-enrollment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mange.enrollment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_enroll_certificate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.enrollment.certificate',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_enrollment_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.enrollment.info',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_enrollment_info' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.enrollmetn.info',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_result' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.result',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_result' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.result',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.subject',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.subject',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updae_subject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.subject',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_result_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.result.type',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_result_type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.result.type',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_uploaded_result' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.uploaded.result',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_notice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_notice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_notice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_counter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add.counter',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store_counter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.counter',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/english_language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'english.language',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/bangla_language' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'bangla.language',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-banner-title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.banner.title',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-banner-title' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.banner.title',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-logo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.logo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-links' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.links',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-number' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.numbers',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-footer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.footer',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/store-main-banner' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'store.main.banner',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/general-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'general.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile-settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update-profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.profile',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J6vLV0uFWD32O4Qd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/s(?|ervices\\-details/([^/]++)(*:37)|ub\\-menu\\-details/([^/]++)(*:70)|how_result/([^/]++)(*:96))|/a(?|bout\\-page/([^/]++)(*:128)|dd\\-to\\-cart/([^/]++)(*:157))|/team\\-single\\-publication/([^/]++)(*:201)|/blogs\\-details/([^/]++)(*:233)|/re(?|search\\-details/([^/]++)(*:271)|move\\-cart\\-product/([^/]++)(*:307))|/p(?|roduct\\-details/([^/]++)(*:345)|assword/reset/([^/]++)(*:375))|/e(?|nroll(?|ment/([^/]++)(*:410)|_certificate/([^/]++)(*:439))|dit(?|\\-(?|gallery/([^/]++)(*:475)|s(?|ervices/([^/]++)(*:503)|ub\\-menu/([^/]++)(*:528)|ponsor/([^/]++)(*:551))|about/([^/]++)(*:574)|te(?|am/([^/]++)(*:598)|stimonial/([^/]++)(*:624))|m(?|enu/([^/]++)(*:649)|ain\\-banner/([^/]++)(*:677))|b(?|logs/([^/]++)(*:703)|anner\\-title/([^/]++)(*:732))|category/([^/]++)(*:758)|product/([^/]++)(*:782)|research/([^/]++)(*:807))|_(?|subject/([^/]++)(*:836)|notice/([^/]++)(*:859))))|/d(?|elete\\-about/([^/]++)(*:896)|ownload_enrollment/([^/]++)(*:931))|/view\\-receipt/([^/]++)(*:963)|/up(?|date\\-(?|enrollment/([^/]++)(*:1005)|main\\-banner/([^/]++)(*:1035))|load_result/([^/]++)(*:1065))|/notice_details/([^/]++)(*:1099))/?$}sDu',
    ),
    3 => 
    array (
      37 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      70 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'submenu.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      96 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'show.result',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      128 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'about.page',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      157 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add-to-cart',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      201 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'team.single.publication',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      271 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'research.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      307 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'remove-cart-product',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      345 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'product.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'enrollment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      439 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload.enrollment.certificate',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      475 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.gallery',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      503 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.services',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.sub.menu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      551 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.sponsor',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.about',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      598 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.team',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.testimonial',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      649 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.menu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.main.banner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      703 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.blogs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.banner.title',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      758 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.category',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.product',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.research',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.subject',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit.notice',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete.about',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      931 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'download.enrollment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      963 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'view.receipt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.enrollment',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1035 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update.main.banner',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1065 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upload.result',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1099 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notice.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'front.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_home',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_home',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'front.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'services-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_services_details',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_services_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'services.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'all-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_all_services',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_all_services',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-page/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_about_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_about_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'about.us' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about-us',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_about_us',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_about_us',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'about.us',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tech-web-team_page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_team_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_team_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'team.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'testimonial.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'testimonial-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_testimonial_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_testimonial_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'testimonial.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'team.single.publication' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'team-single-publication/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_team_single_publication',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_team_single_publication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'team.single.publication',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_blogs_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_blogs_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.page.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'blogs-page-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_blogs_page_store',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_blogs_page_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs.page.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.page.publications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs-publications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_blogs_publications',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_blogs_publications',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs.page.publications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blogs-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_blogs_details',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_blogs_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'consultancy.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'consultancy-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_consultancy_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_consultancy_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'consultancy.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'research.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'research-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_research_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_research_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'research.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'research.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'research-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_research_details',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_research_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'research.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'submenu.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sub-menu-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_sub_menu_details',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_sub_menu_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'submenu.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C1lkvVLbGaQCPgmA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'managing/committe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@managingcommitte',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@managingcommitte',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::C1lkvVLbGaQCPgmA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qQLgP01LMF8DuTNo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'advisor/committe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@advisercommitte',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@advisercommitte',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qQLgP01LMF8DuTNo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'allnotice.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'all/notice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@allnoticepage',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@allnoticepage',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'allnotice.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admission.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admission/now',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@admissionnow',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@admissionnow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admission.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sponsor.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sponsor-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@sponsor_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@sponsor_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sponsor.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'certificate.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'certificate-verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@certificate_verify',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@certificate_verify',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'certificate.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'check.certificate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'check-certificate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@check_certificate',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@check_certificate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'check.certificate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_product_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_product_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'product.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product-details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_product_details',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_product_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'product.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add-to-cart' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add-to-cart/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@index',
        'controller' => 'App\\Http\\Controllers\\CartController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add-to-cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'show-cart' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'show-cart',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@show',
        'controller' => 'App\\Http\\Controllers\\CartController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'show-cart',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'remove-cart-product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'remove-cart-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@remove',
        'controller' => 'App\\Http\\Controllers\\CartController@remove',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'remove-cart-product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update-cart-product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-cart-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\CartController@update',
        'controller' => 'App\\Http\\Controllers\\CartController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update-cart-product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'checkout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\CheckoutController@index',
        'controller' => 'App\\Http\\Controllers\\CheckoutController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'confirm.order' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\CheckoutController@confirm_order',
        'controller' => 'App\\Http\\Controllers\\CheckoutController@confirm_order',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'confirm.order',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'gallery.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'gallery-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_gallery',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_gallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'gallery.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contacts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contacts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_contacts',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_contacts',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contacts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-profile-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralController@tech_web_user_profile_settings',
        'controller' => 'App\\Http\\Controllers\\GeneralController@tech_web_user_profile_settings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.profile.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.member.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user-member-details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralController@tech_web_user_member_details',
        'controller' => 'App\\Http\\Controllers\\GeneralController@tech_web_user_member_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.member.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.member.details.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-member-details-store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralController@tech_web_user_member_details_store',
        'controller' => 'App\\Http\\Controllers\\GeneralController@tech_web_user_member_details_store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.member.details.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.update.profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user-update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralController@tech_web_user_update_profile',
        'controller' => 'App\\Http\\Controllers\\GeneralController@tech_web_user_update_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'user.update.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'enrollment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enrollment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_enrollment',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_enrollment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'enrollment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'enrollment.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enrollment-page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_enrollment_page',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_enrollment_page',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'enrollment.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'enroll' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enroll',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_enroll',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_enroll',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'enroll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.enrollment.form.data' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'enrollment_data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_store_enrollment_form_data',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_store_enrollment_form_data',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.enrollment.form.data',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_contact',
        'controller' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GaWuuPysOxMt0r5a' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::GaWuuPysOxMt0r5a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OZP1UUle0wJAdFC1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OZP1UUle0wJAdFC1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YFxlq3iehOKQfBSu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::YFxlq3iehOKQfBSu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@tech_web_index',
        'controller' => 'App\\Http\\Controllers\\HomeController@tech_web_index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@tech_web_adminHome',
        'controller' => 'App\\Http\\Controllers\\HomeController@tech_web_adminHome',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'admin.home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\GalleryController@tech_web_add_gallery',
        'controller' => 'App\\Http\\Controllers\\GalleryController@tech_web_add_gallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\GalleryController@tech_web_store_gallery',
        'controller' => 'App\\Http\\Controllers\\GalleryController@tech_web_store_gallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-gallery/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\GalleryController@tech_web_edit_gallery',
        'controller' => 'App\\Http\\Controllers\\GalleryController@tech_web_edit_gallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.gallery' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-gallery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\GalleryController@tech_web_update_gallery',
        'controller' => 'App\\Http\\Controllers\\GalleryController@tech_web_update_gallery',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.gallery',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@tech_web_add_services',
        'controller' => 'App\\Http\\Controllers\\ServiceController@tech_web_add_services',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.services' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@tech_web_store_services',
        'controller' => 'App\\Http\\Controllers\\ServiceController@tech_web_store_services',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-services/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@tech_web_edit_services',
        'controller' => 'App\\Http\\Controllers\\ServiceController@tech_web_edit_services',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.services' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ServiceController@tech_web_update_services',
        'controller' => 'App\\Http\\Controllers\\ServiceController@tech_web_update_services',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@add_about',
        'controller' => 'App\\Http\\Controllers\\AboutController@add_about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.about' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@store_about',
        'controller' => 'App\\Http\\Controllers\\AboutController@store_about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-about/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@edit_about',
        'controller' => 'App\\Http\\Controllers\\AboutController@edit_about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.about' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@update_about',
        'controller' => 'App\\Http\\Controllers\\AboutController@update_about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete.about' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete-about/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\AboutController@delete_about',
        'controller' => 'App\\Http\\Controllers\\AboutController@delete_about',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete.about',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_add_team',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_add_team',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.team',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.team' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_store_team',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_store_team',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.team',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.team' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-team/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_edit_team',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_edit_team',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.team',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.team' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-team',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_update_team',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_update_team',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.team',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_add_menu',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_add_menu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.menu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_store_menu',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_store_menu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-menu/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_edit_menu',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_edit_menu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.menu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_update_menu',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_update_menu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.sub.menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-sub-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_add_sub_menu',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_add_sub_menu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.sub.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.sub.menu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-sub-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_store_sub_menu',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_store_sub_menu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.sub.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.sub.menu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-sub-menu/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_edit_sub_menu',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_edit_sub_menu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.sub.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.sub.menu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-sub-menu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TeamController@tech_web_update_sub_menu',
        'controller' => 'App\\Http\\Controllers\\TeamController@tech_web_update_sub_menu',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.sub.menu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TestimonialController@tech_web_add_testimonial',
        'controller' => 'App\\Http\\Controllers\\TestimonialController@tech_web_add_testimonial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TestimonialController@tech_web_store_testimonial',
        'controller' => 'App\\Http\\Controllers\\TestimonialController@tech_web_store_testimonial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-testimonial/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TestimonialController@tech_web_edit_testimonial',
        'controller' => 'App\\Http\\Controllers\\TestimonialController@tech_web_edit_testimonial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.testimonial' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-testimonial',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\TestimonialController@tech_web_update_testimonial',
        'controller' => 'App\\Http\\Controllers\\TestimonialController@tech_web_update_testimonial',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.testimonial',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.blogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_add_blogs',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_add_blogs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.blogs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_store_blogs',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_store_blogs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.blogs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-blogs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_edit_blogs',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_edit_blogs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.blogs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-blogs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_update_blogs',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_update_blogs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.blogs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.sponsor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-sponsor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_add_sponsor',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_add_sponsor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.sponsor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.sponsor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-sponsor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_store_sponsor',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_store_sponsor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.sponsor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.sponsor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-sponsor/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_edit_sponsor',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_edit_sponsor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.sponsor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.sponsor' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-sponsor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_update_sponsor',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_update_sponsor',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.sponsor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@tech_web_add_category',
        'controller' => 'App\\Http\\Controllers\\CategoryController@tech_web_add_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@tech_web_store_category',
        'controller' => 'App\\Http\\Controllers\\CategoryController@tech_web_store_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-category/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@tech_web_edit_category',
        'controller' => 'App\\Http\\Controllers\\CategoryController@tech_web_edit_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.category' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoryController@tech_web_update_category',
        'controller' => 'App\\Http\\Controllers\\CategoryController@tech_web_update_category',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@tech_web_add_product',
        'controller' => 'App\\Http\\Controllers\\ProductController@tech_web_add_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@tech_web_store_product',
        'controller' => 'App\\Http\\Controllers\\ProductController@tech_web_store_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.product' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-product/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@tech_web_edit_product',
        'controller' => 'App\\Http\\Controllers\\ProductController@tech_web_edit_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.product' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ProductController@tech_web_update_product',
        'controller' => 'App\\Http\\Controllers\\ProductController@tech_web_update_product',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.product',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.receipt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-receipt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_add_receipt',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_add_receipt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.receipt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.receipt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-receipt',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_store_receipt',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_store_receipt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.receipt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'view.receipt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'view-receipt/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BlogController@tech_web_view_receipt',
        'controller' => 'App\\Http\\Controllers\\BlogController@tech_web_view_receipt',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'view.receipt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.research' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-research',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResearchController@tech_web_add_research',
        'controller' => 'App\\Http\\Controllers\\ResearchController@tech_web_add_research',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.research',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.research' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-research',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResearchController@tech_web_store_research',
        'controller' => 'App\\Http\\Controllers\\ResearchController@tech_web_store_research',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.research',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.research' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-research/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResearchController@tech_web_edit_research',
        'controller' => 'App\\Http\\Controllers\\ResearchController@tech_web_edit_research',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.research',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.research' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-research',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResearchController@tech_web_update_research',
        'controller' => 'App\\Http\\Controllers\\ResearchController@tech_web_update_research',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.research',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.consultancy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add-consultancy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ConsultancyController@tech_web_add_consultancy',
        'controller' => 'App\\Http\\Controllers\\ConsultancyController@tech_web_add_consultancy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.consultancy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.consultancy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-consultancy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ConsultancyController@tech_web_store_consultancy',
        'controller' => 'App\\Http\\Controllers\\ConsultancyController@tech_web_store_consultancy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.consultancy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mange.enrollment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manage-enrollment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_manage_enrollment',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_manage_enrollment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'mange.enrollment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.enrollment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update-enrollment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_update_enrollment',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_update_enrollment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.enrollment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'download.enrollment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'download_enrollment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_download_enrollment',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_download_enrollment',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'download.enrollment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upload.enrollment.certificate' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'enroll_certificate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_enroll_certificate',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_enroll_certificate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'upload.enrollment.certificate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.enrollment.certificate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_enroll_certificate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_store_enroll_certificate',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_store_enroll_certificate',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.enrollment.certificate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.enrollment.info' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_enrollment_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_add_enrollment_info',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_add_enrollment_info',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.enrollment.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.enrollmetn.info' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_enrollment_info',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteController@tech_web_store_enrollment_info',
        'controller' => 'App\\Http\\Controllers\\WebsiteController@tech_web_store_enrollment_info',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.enrollmetn.info',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.result' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_result',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_add_result',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_add_result',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.result',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.result' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_result',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_store_result',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_store_result',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.result',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.subject' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_add_subject',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_add_subject',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.subject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_store_subject',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_store_subject',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.subject' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_subject/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_edit_subject',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_edit_subject',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.subject' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updae_subject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_update_subject',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_update_subject',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.subject',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_result_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_add_result_type',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_add_result_type',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.result.type' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_result_type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_store_result_type',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_store_result_type',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.result.type',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upload.result' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'upload_result/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_upload_result',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_upload_result',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'upload.result',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.uploaded.result' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_uploaded_result',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_store_uploaded_result',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_store_uploaded_result',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.uploaded.result',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'show.result' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'show_result/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_user',
        ),
        'uses' => 'App\\Http\\Controllers\\ResultController@tech_web_show_result',
        'controller' => 'App\\Http\\Controllers\\ResultController@tech_web_show_result',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'show.result',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_notice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NoticeController@tech_web_add_notice',
        'controller' => 'App\\Http\\Controllers\\NoticeController@tech_web_add_notice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.notice' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_notice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NoticeController@tech_web_store_notice',
        'controller' => 'App\\Http\\Controllers\\NoticeController@tech_web_store_notice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_notice/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NoticeController@tech_web_edit_notice',
        'controller' => 'App\\Http\\Controllers\\NoticeController@tech_web_edit_notice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.notice' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_notice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\NoticeController@tech_web_update_notice',
        'controller' => 'App\\Http\\Controllers\\NoticeController@tech_web_update_notice',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notice.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'notice_details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\NoticeController@tech_web_notice_details',
        'controller' => 'App\\Http\\Controllers\\NoticeController@tech_web_notice_details',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'notice.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add.counter' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_counter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CounterController@tech_web_add_counter',
        'controller' => 'App\\Http\\Controllers\\CounterController@tech_web_add_counter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add.counter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.counter' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store_counter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\CounterController@tech_web_store_counter',
        'controller' => 'App\\Http\\Controllers\\CounterController@tech_web_store_counter',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.counter',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'english.language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'english_language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@tech_web_english_language',
        'controller' => 'App\\Http\\Controllers\\LanguageController@tech_web_english_language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'english.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'bangla.language' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'bangla_language',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LanguageController@tech_web_bangla_language',
        'controller' => 'App\\Http\\Controllers\\LanguageController@tech_web_bangla_language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'bangla.language',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.banner.title' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-banner-title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BannerAndTitleController@tech_web_store_banner_tile',
        'controller' => 'App\\Http\\Controllers\\BannerAndTitleController@tech_web_store_banner_tile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.banner.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.banner.title' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-banner-title/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BannerAndTitleController@tech_web_edit_banner_tile',
        'controller' => 'App\\Http\\Controllers\\BannerAndTitleController@tech_web_edit_banner_tile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.banner.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.banner.title' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-banner-title',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\BannerAndTitleController@tech_web_update_banner_tile',
        'controller' => 'App\\Http\\Controllers\\BannerAndTitleController@tech_web_update_banner_tile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.banner.title',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.logo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-logo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_logo',
        'controller' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_logo',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.logo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.links' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-links',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_links',
        'controller' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_links',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.links',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.numbers' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-number',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_numbers',
        'controller' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_numbers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.numbers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.footer' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-footer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_footer',
        'controller' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_footer',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.footer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'store.main.banner' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'store-main-banner',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_main_banner',
        'controller' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_store_main_banner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'store.main.banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit.main.banner' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit-main-banner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_edit_main_banner',
        'controller' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_edit_main_banner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit.main.banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.main.banner' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-main-banner/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_update_main_banner',
        'controller' => 'App\\Http\\Controllers\\WebsiteSettingsController@tech_web_update_main_banner',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.main.banner',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'general.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'general-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralController@tech_web_general_settings',
        'controller' => 'App\\Http\\Controllers\\GeneralController@tech_web_general_settings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'general.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile-settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralController@tech_web_profile_settings',
        'controller' => 'App\\Http\\Controllers\\GeneralController@tech_web_profile_settings',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update.profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update-profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'is_admin',
        ),
        'uses' => 'App\\Http\\Controllers\\GeneralController@tech_web_update_profile',
        'controller' => 'App\\Http\\Controllers\\GeneralController@tech_web_update_profile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J6vLV0uFWD32O4Qd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000067a0000000000000000";}";s:4:"hash";s:44:"x1JlCxpRCV32Ycw6u6EzvgZo9fPOPX4Enfzu6QAOvEs=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::J6vLV0uFWD32O4Qd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
