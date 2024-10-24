<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\WhoweareController;
use App\Http\Controllers\Admin\WhychooseUsController;
use App\Http\Controllers\Admin\ContactDetailsController;
use App\Http\Controllers\Admin\CareerController;
use App\Http\Controllers\Admin\TermsConditionsController;
use App\Http\Controllers\Admin\RefundPolicyController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CaseStudyController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\GeneralSettingsController;
use App\Http\Controllers\Admin\SiteContent\HomePageController;
use App\Http\Controllers\Admin\SiteContent\SocialLinkController;
use App\Http\Controllers\Admin\SiteContent\FooterInformationController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SitemapController;

Route::get('/admin/login', [AuthController::class, 'login'])->name('admin.login')->middleware('guest');
Route::post('/admin/login', [AuthController::class, 'LoginDashboard'])->name('login.post');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'is_admin', 'en.locale'], 'as' => 'admin.'], function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


    Route::group(['prefix' => 'general-settings'], function () {
        Route::get('', [GeneralSettingsController::class, 'GeneralSettings'])->name('general.settings')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [GeneralSettingsController::class, 'GeneralSettingsEdit'])->name('general.settings.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [GeneralSettingsController::class, 'GeneralSettingsUpdate'])->name('general.settings.update')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-settings', [GeneralSettingsController::class, 'updateSettings'])->name('general.settings.update_settings')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-social-login', [GeneralSettingsController::class, 'updateSocialLogin'])->name('general.settings.update_social_login')->middleware(['permission:cms-edit', 'isDemo']);
        Route::post('/update-email', [GeneralSettingsController::class, 'updateEmail'])->name('general.settings.update_email')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'blog'], function () {
        Route::get('', [BlogController::class, 'blog'])->name('blog')->middleware(['permission:blog-list|blog-create|blog-edit|blog-delete']);
        Route::get('/create', [BlogController::class, 'blogCreate'])->name('blog.create')->middleware(['permission:blog-create']);
        Route::post('/create', [BlogController::class, 'blogStore'])->name('blog.store')->middleware(['permission:blog-create', 'isDemo']);
        Route::get('/edit/{id}', [BlogController::class, 'blogEdit'])->name('blog.edit')->middleware(['permission:blog-edit']);
        Route::post('/update', [BlogController::class, 'blogUpdate'])->name('blog.update')->middleware(['permission:blog-edit', 'isDemo']);
        Route::get('/delete/{id}', [BlogController::class, 'blogDelete'])->name('blog.delete')->middleware(['permission:blog-delete', 'isDemo']);
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('', [CategoryController::class, 'category'])->name('category')->middleware(['permission:category-list-create|category-edit|category-delete']);
        Route::get('/create', [CategoryController::class, 'categoryCreate'])->name('category.create')->middleware(['permission:category-create']);
        Route::post('/create', [CategoryController::class, 'categoryStore'])->name('category.store')->middleware(['permission:category-create', 'isDemo']);
        Route::get('/edit/{id}', [CategoryController::class, 'categoryEdit'])->name('category.edit')->middleware(['permission:category-edit']);
        Route::post('/update', [CategoryController::class, 'categoryUpdate'])->name('category.update')->middleware(['permission:category-edit', 'isDemo']);
        Route::get('/active/{id}', [CategoryController::class, 'categoryActive'])->name('category.active')->middleware(['permission:category-edit', 'isDemo']);
        Route::get('/inactive/{d}', [CategoryController::class, 'categoryInactive'])->name('category.inactive')->middleware(['permission:category-edit', 'isDemo']);
        Route::get('/delete/{id}', [CategoryController::class, 'categoryDelete'])->name('category.delete')->middleware(['permission:category-delete', 'isDemo']);
    });



    Route::group(['prefix' => 'slider'], function () {
        Route::get('', [SliderController::class, 'slider'])->name('slider');
        Route::get('/create', [SliderController::class, 'sliderCreate'])->name('slider.create');
        Route::post('/create', [SliderController::class, 'sliderStore'])->name('slider.store')->middleware('isDemo');
        Route::get('/edit/{id}', [SliderController::class, 'sliderEdit'])->name('slider.edit');
        Route::post('/update', [SliderController::class, 'sliderUpdate'])->name('slider.update')->middleware('isDemo');
        Route::get('/active/{id}', [SliderController::class, 'sliderActive'])->name('slider.active')->middleware('isDemo');
        Route::get('/inactive/{id}', [SliderController::class, 'sliderInactive'])->name('slider.inactive')->middleware('isDemo');
        Route::get('/delete/{id}', [SliderController::class, 'sliderDelete'])->name('slider.delete')->middleware('isDemo');
    });


    Route::group(['prefix' => 'service'], function () {
        Route::get('', [ServiceController::class, 'service'])->name('service');
        Route::get('/create', [ServiceController::class, 'serviceCreate'])->name('service.create');
        Route::post('/create', [ServiceController::class, 'serviceStore'])->name('service.store')->middleware('isDemo');
        Route::get('/edit/{id}', [ServiceController::class, 'serviceEdit'])->name('service.edit');
        Route::post('/update', [ServiceController::class, 'serviceUpdate'])->name('service.update')->middleware('isDemo');
        Route::get('/active/{id}', [ServiceController::class, 'serviceActive'])->name('service.active')->middleware('isDemo');
        Route::get('/inactive/{id}', [ServiceController::class, 'serviceInactive'])->name('service.inactive')->middleware('isDemo');
        Route::get('/delete/{id}', [ServiceController::class, 'serviceDelete'])->name('service.delete')->middleware('isDemo');
    });


    Route::group(['prefix' => 'career'], function () {
        Route::get('', [CareerController::class, 'career'])->name('career');
        Route::get('/create', [CareerController::class, 'careerCreate'])->name('career.create');
        Route::post('/create', [CareerController::class, 'careerStore'])->name('career.store')->middleware('isDemo');
        Route::get('/edit/{id}', [CareerController::class, 'careerEdit'])->name('career.edit');
        Route::post('/update', [CareerController::class, 'careerUpdate'])->name('career.update')->middleware('isDemo');
        Route::get('/active/{id}', [CareerController::class, 'careerActive'])->name('career.active')->middleware('isDemo');
        Route::get('/inactive/{id}', [CareerController::class, 'careerInactive'])->name('career.inactive')->middleware('isDemo');
        Route::get('/delete/{id}', [CareerController::class, 'careerDelete'])->name('career.delete')->middleware('isDemo');
    });


    Route::group(['prefix' => 'team'], function () {
        Route::get('', [TeamController::class, 'team'])->name('team');
        Route::get('/create', [TeamController::class, 'teamCreate'])->name('team.create');
        Route::post('/create', [TeamController::class, 'teamStore'])->name('team.store')->middleware('isDemo');
        Route::get('/edit/{id}', [TeamController::class, 'teamEdit'])->name('team.edit');
        Route::post('/update', [TeamController::class, 'teamUpdate'])->name('team.update')->middleware('isDemo');
        Route::get('/active/{id}', [TeamController::class, 'teamActive'])->name('team.active')->middleware('isDemo');
        Route::get('/inactive/{id}', [TeamController::class, 'teamInactive'])->name('team.inactive')->middleware('isDemo');
        Route::get('/delete/{id}', [TeamController::class, 'teamDelete'])->name('team.delete')->middleware('isDemo');
    });


    Route::group(['prefix' => 'casestudy'], function () {
        Route::get('', [CaseStudyController::class, 'casestudy'])->name('casestudy');
        Route::get('/create', [CaseStudyController::class, 'casestudyCreate'])->name('casestudy.create');
        Route::post('/create', [CaseStudyController::class, 'casestudyStore'])->name('casestudy.store')->middleware('isDemo');
        Route::get('/edit/{id}', [CaseStudyController::class, 'casestudyEdit'])->name('casestudy.edit');
        Route::post('/update', [CaseStudyController::class, 'casestudyUpdate'])->name('casestudy.update')->middleware('isDemo');
        Route::get('/active/{id}', [CaseStudyController::class, 'casestudyActive'])->name('casestudy.active')->middleware('isDemo');
        Route::get('/inactive/{id}', [CaseStudyController::class, 'casestudyInactive'])->name('casestudy.inactive')->middleware('isDemo');
        Route::get('/delete/{id}', [CaseStudyController::class, 'casestudyDelete'])->name('casestudy.delete')->middleware('isDemo');
    });


    Route::group(['prefix' => 'testimonial'], function () {
        Route::get('', [TestimonialController::class, 'testimonial'])->name('testimonial');
        Route::get('/create', [TestimonialController::class, 'testimonialCreate'])->name('testimonial.create');
        Route::post('/create', [TestimonialController::class, 'testimonialStore'])->name('testimonial.store')->middleware('isDemo');
        Route::get('/edit/{id}', [TestimonialController::class, 'testimonialEdit'])->name('testimonial.edit');
        Route::post('/update', [TestimonialController::class, 'testimonialUpdate'])->name('testimonial.update')->middleware('isDemo');
        Route::get('/active/{id}', [TestimonialController::class, 'testimonialActive'])->name('testimonial.active')->middleware('isDemo');
        Route::get('/inactive/{id}', [TestimonialController::class, 'testimonialInactive'])->name('testimonial.inactive')->middleware('isDemo');
        Route::get('/delete/{id}', [TestimonialController::class, 'testimonialDelete'])->name('testimonial.delete')->middleware('isDemo');
    });


    Route::group(['prefix' => 'contactdetails'], function () {
        Route::get('', [ContactDetailsController::class, 'contactdetails'])->name('contactdetails');
        Route::get('/details/{id}', [ContactDetailsController::class, 'contactdetailsView'])->name('contactdetails.details');
        Route::get('/delete/{id}', [ContactDetailsController::class, 'contactdetailsDelete'])->name('contactdetails.delete')->middleware('isDemo');
    });


    Route::group(['prefix' => 'whychooseus'], function () {
        Route::get('/edit/{id}', [WhychooseUsController::class, 'whychooseusEdit'])->name('whychooseus.edit');
        Route::post('/update', [WhychooseUsController::class, 'whychooseusUpdate'])->name('whychooseus.update')->middleware('isDemo');
    });


    Route::group(['prefix' => 'termscondition'], function () {
        Route::get('/edit/{id}', [TermsConditionsController::class, 'termsconditionEdit'])->name('termscondition.edit');
        Route::post('/update', [TermsConditionsController::class, 'termsconditionUpdate'])->name('termscondition.update')->middleware('isDemo');
    });


    Route::group(['prefix' => 'privacypolicy'], function () {
        Route::get('/edit/{id}', [PrivacyPolicyController::class, 'privacypolicyEdit'])->name('privacypolicy.edit');
        Route::post('/update', [PrivacyPolicyController::class, 'privacypolicyUpdate'])->name('privacypolicy.update')->middleware('isDemo');
    });


    Route::group(['prefix' => 'refundpolicy'], function () {
        Route::get('/edit/{id}', [RefundPolicyController::class, 'refundpolicyEdit'])->name('refundpolicy.edit');
        Route::post('/update', [RefundPolicyController::class, 'refundpolicyUpdate'])->name('refundpolicy.update')->middleware('isDemo');
    });


    Route::group(['prefix' => 'about'], function () {
        Route::get('/edit/{id}', [WhoweareController::class, 'aboutEdit'])->name('about.edit');
        Route::post('/update', [WhoweareController::class, 'aboutUpdate'])->name('about.update')->middleware('isDemo');
    });


    Route::group(['prefix' => 'brand'], function () {
        Route::get('', [BrandController::class, 'brand'])->name('brand')->middleware(['permission:brand-list|brand-create|brand-edit|brand-delete']);
        Route::get('/create', [BrandController::class, 'brandCreate'])->name('brand.create')->middleware(['permission:brand-create']);
        Route::post('/create', [BrandController::class, 'brandStore'])->name('brand.store')->middleware(['permission:brand-create', 'isDemo']);
        Route::get('/edit/{id}', [BrandController::class, 'brandEdit'])->name('brand.edit')->middleware(['permission:brand-edit']);
        Route::post('/update', [BrandController::class, 'brandUpdate'])->name('brand.update')->middleware(['permission:brand-edit', 'isDemo']);
        Route::get('/active/{id}', [BrandController::class, 'brandActive'])->name('brand.active')->middleware(['permission:brand-edit', 'isDemo']);
        Route::get('/inactive/{d}', [BrandController::class, 'brandInactive'])->name('brand.inactive')->middleware(['permission:brand-edit', 'isDemo']);
        Route::get('/delete/{id}', [BrandController::class, 'brandDelete'])->name('brand.delete')->middleware(['permission:brand-delete', 'isDemo']);
    });



    Route::group(['prefix' => 'profile/'], function () {
        //Admin_Profile
        Route::get('', [AdminProfileController::class, 'adminProfile'])->name('profile');
        Route::post('update', [AdminProfileController::class, 'adminProfileUpdate'])->name('profile.update')->middleware(['isDemo']);
        Route::post('change-password', [AdminProfileController::class, 'changePassword'])->name('change_password')->middleware(['isDemo']);
    });

    Route::group(['prefix' => 'site-content/home-page'], function () {
        Route::get('', [HomePageController::class, 'homePage'])->name('home.page.site.content')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [HomePageController::class, 'homePageEdit'])->name('home.page.site.content.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [HomePageController::class, 'homePageUpdate'])->name('home.page.site.content.update')->middleware(['permission:cms-edit', 'isDemo']);
    });


    Route::group(['prefix' => 'social-link'], function () {
        Route::get('', [SocialLinkController::class, 'socialLink'])->name('social.link')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::get('/edit/{id}', [SocialLinkController::class, 'socialLinkEdit'])->name('social.link.edit')->middleware(['permission:cms-edit']);
        Route::post('/update', [SocialLinkController::class, 'socialLinkUpdate'])->name('social.link.update')->middleware(['permission:cms-edit', 'isDemo']);
    });

    Route::group(['prefix' => 'footer-information'], function () {
        Route::get('/edit', [FooterInformationController::class, 'footerInformationEdit'])->name('footer.information.edit')->middleware(['permission:cms-list|cms-create|cms-edit|cms-delete']);
        Route::post('/update', [FooterInformationController::class, 'footerInformationUpdate'])->name('footer.information.update')->middleware(['permission:cms-edit', 'isDemo']);
    });


    //Manage Menus
    Route::get('/static-menus', [MenuController::class, 'staticMenus'])->name('static_menus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/edit-static-menu/{id}', [MenuController::class, 'editStaticMenu'])->name('edit_static_menu')->middleware(['permission:menu-edit']);
    Route::get('/dynamic-menus', [MenuController::class, 'dynamicMenus'])->name('dynamic_menus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/create-menu', [MenuController::class, 'createMenu'])->name('create_menu')->middleware(['permission:menu-create']);
    Route::post('/store-menu', [MenuController::class, 'storeMenu'])->name('store_menu')->middleware(['permission:menu-create', 'isDemo']);
    Route::get('/edit-menu/{id}', [MenuController::class, 'editMenu'])->name('edit_menu')->middleware(['permission:menu-edit']);
    Route::post('/update-menu/{id}', [MenuController::class, 'updateMenu'])->name('update_menu')->middleware(['permission:menu-edit', 'isDemo']);
    Route::get('/delete-menu/{id}', [MenuController::class, 'deleteMenu'])->name('delete_menu')->middleware(['permission:menu-delete', 'isDemo']);
    Route::get('/submenus', [MenuController::class, 'submenus'])->name('submenus')->middleware(['permission:menu-list|menu-create|menu-edit|menu-delete']);
    Route::get('/create-submenu', [MenuController::class, 'createSubmenu'])->name('create_submenu')->middleware(['permission:menu-create']);
    Route::post('/store-submenu', [MenuController::class, 'storeSubmenu'])->name('store_submenu')->middleware(['permission:menu-create', 'isDemo']);
    Route::get('/edit-submenu/{id}', [MenuController::class, 'editSubmenu'])->name('edit_submenu')->middleware(['permission:menu-edit']);
    Route::post('/update-submenu/{id}', [MenuController::class, 'updateSubmenu'])->name('update_submenu')->middleware(['permission:menu-edit', 'isDemo']);
    Route::get('/delete-submenu/{id}', [MenuController::class, 'deleteSubmenu'])->name('delete_submenu')->middleware(['permission:menu-delete', 'isDemo']);


    //SEO Management
    Route::get('/manage-seo/{slug}', [SeoController::class, 'manageSeo'])->name('manage_seo')->middleware(['permission:cms-create|cms-edit']);
    Route::post('/update-seo/{slug}', [SeoController::class, 'updateSeo'])->name('update_seo')->middleware(['permission:cms-create|cms-edit', 'isDemo']);

    //User Settings
    Route::get('/admins', [UserController::class, 'adminList'])->name('admin_list')->middleware(['permission:user-list|user-create|user-edit|user-delete']);
    Route::get('/create-admin', [UserController::class, 'createAdmin'])->name('create_admin')->middleware(['permission:user-create']);
    Route::post('/store-admin', [UserController::class, 'storeAdmin'])->name('store_admin')->middleware(['permission:user-create', 'isDemo']);
    Route::get('/edit-admin/{id}', [UserController::class, 'editAdmin'])->name('edit_admin')->middleware(['permission:user-edit']);
    Route::post('/update-admin/{id}', [UserController::class, 'updateAdmin'])->name('update_admin')->middleware(['permission:user-edit', 'isDemo']);
    Route::get('/customers', [UserController::class, 'customerList'])->name('customer_list')->middleware(['permission:user-list|user-create|user-edit|user-delete']);
    Route::get('/customer/{status}/{user_id}', [UserController::class, 'customerStatusChange'])->name('customer_status_change')->middleware(['permission:user-list|user-create|user-edit|user-delete', 'isDemo']);
    Route::get('/admin-status/{id}', [UserController::class, 'statusChange'])->name('status_change')->middleware(['permission:user-list', 'isDemo']);

    //Role Settings
    Route::get('/roles', [RoleController::class, 'index'])->name('role_list')->middleware(['role:Super Admin']);
    Route::get('/create-role', [RoleController::class, 'createRole'])->name('create_role')->middleware(['role:Super Admin']);
    Route::post('/store-role', [RoleController::class, 'storeRole'])->name('store_role')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/edit-role/{id}', [RoleController::class, 'editRole'])->name('edit_role')->middleware(['role:Super Admin']);
    Route::post('/update-role/{id}', [RoleController::class, 'updateRole'])->name('update_role')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/delete-role/{id}', [RoleController::class, 'deleteRole'])->name('delete_role')->middleware(['role:Super Admin', 'isDemo']);

    Route::get('/sitemap-list', [SitemapController::class, 'index'])->name('sitemap_list')->middleware(['role:Super Admin']);
    Route::get('/sitemap-create', [SitemapController::class, 'create'])->name('sitemap_create')->middleware(['role:Super Admin']);
    Route::post('/sitemap-store', [SitemapController::class, 'store'])->name('sitemap_store')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/sitemap-delete', [SitemapController::class, 'delete'])->name('sitemap_delete')->middleware(['role:Super Admin', 'isDemo']);
    Route::get('/sitemap-download/{id}', [SitemapController::class, 'download'])->name('sitemap_download')->middleware(['role:Super Admin', 'isDemo']);
});
