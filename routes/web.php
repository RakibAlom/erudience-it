<?php

use App\Http\Controllers\About\AboutPublicController;
use App\Http\Controllers\About\CompanyIntroController;
use App\Http\Controllers\About\OurServiceController;
use App\Http\Controllers\About\OurSkillController;
use App\Http\Controllers\About\OurStoryController;
use App\Http\Controllers\About\OurTimelineController;
use App\Http\Controllers\Admin\CacheController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\Gallery\ProjectClientController;
use App\Http\Controllers\Admin\Gallery\SkillBrandController;
use App\Http\Controllers\Admin\Gallery\WorkGalleryController;
use App\Http\Controllers\Admin\GetQuoteController;
use App\Http\Controllers\Admin\HeroSloganController;
use App\Http\Controllers\Admin\Setting\BackgroundMediaController;
use App\Http\Controllers\Admin\Setting\InformationSetupController;
use App\Http\Controllers\Admin\Setting\LicenceInfoController;
use App\Http\Controllers\Admin\Setting\PrivacyController;
use App\Http\Controllers\Admin\Setting\RefundPolicyController;
use App\Http\Controllers\Admin\Setting\TermsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Blog\BlogCategoryController;
use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\Blog\BlogPublicController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\Course\CourseCategoryController;
use App\Http\Controllers\Course\CourseController;
use App\Http\Controllers\Course\CoursePublicController;
use App\Http\Controllers\Hosting\BasicSharedHostingController;
use App\Http\Controllers\Hosting\HostingPublicController;
use App\Http\Controllers\Portfolio\PortfolioCategoryController;
use App\Http\Controllers\Portfolio\PortfolioController;
use App\Http\Controllers\Portfolio\PortfolioPublicController;
use App\Http\Controllers\Share\SocialShareController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/blog', [BlogPublicController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogPublicController::class, 'show'])->name('blog.show');

Route::get('/portfolio', [PortfolioPublicController::class, 'index'])->name('portfolio');
Route::get('/portfolio/{slug}', [PortfolioPublicController::class, 'show'])->name('portfolio.show'); 


Route::get('/about', [AboutPublicController::class, 'about'])->name('about');
Route::get('/achievement', [AboutPublicController::class, 'ourStory'])->name('our-story');
Route::get('/timeline', [AboutPublicController::class, 'timeline'])->name('timeline');

Route::get('/services', [AboutPublicController::class, 'services'])->name('services');
Route::get('/services/{slug}', [AboutPublicController::class, 'serviceShow'])->name('services.show');

Route::get('/course', [CoursePublicController::class, 'index'])->name('course');
Route::get('/course/{slug}', [CoursePublicController::class, 'show'])->name('course.show');
Route::get('/course/{slug}/class/{title}', [CoursePublicController::class, 'courseClass'])->name('course.class');
Route::get('/course/enroll/{id}', [CoursePublicController::class, 'enroll'])->name('course.enroll');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('send.contact');
Route::get('/hire-us', [ContactController::class, 'hireUs'])->name('hire-us');

Route::get('/privacy', [AboutPublicController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-condition', [AboutPublicController::class, 'terms'])->name('terms');
Route::get('/refund-policy', [AboutPublicController::class, 'refundPolicy'])->name('refund-policy');
Route::get('/licence', [AboutPublicController::class, 'licence'])->name('licence');
Route::get('/faq', [AboutPublicController::class, 'faq'])->name('faq');

Route::get('/hosting/basic-shared-hosting', [HostingPublicController::class, 'basicShared'])->name('hosting.basic-shared');


Route::middleware(['auth'])->group(function (){
    Route::get('user/{username}', [UserController::class, 'profile'])->name('user.profile');
    Route::get('user/settings/{username}', [UserController::class, 'settings'])->name('user.settings');
    Route::post('user/settings/{username}', [UserController::class, 'updateSettings'])->name('user.update.settings');
    Route::post('user/change-picture/{username}', [UserController::class, 'changePicture'])->name('user.change-picture');
    Route::post('user/change-password/{username}', [UserController::class, 'changePassword'])->name('user.change-password');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('auth.logout');
Route::get('/admin', function () {return redirect('admin/dashboard'); });

// ADMIN DASHBOARD ROUTE ARE HERE 
Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function (){

    Route::get('/dashboard' , [DashboardController::class, 'index'])->name('dashboard');

    // USER ROUTE ARE HERE 
    Route::get('/user', [UserController::class, 'user'])->name('user');

    // INFO SETUP ROUTE ARE HERE
    Route::get('/settings/information-setup', [InformationSetupController::class, 'index'])->name('information-setup');
    Route::post('/settings/information-setup/store', [InformationSetupController::class, 'store'])->name('store.information-setup');
    Route::post('/settings/information-setup/update',[InformationSetupController::class, 'update'])->name('update.information-setup');

    // BACKGROUND MEDIA ROUTE ARE HERE
    Route::get('/settings/homepage/background-media', [BackgroundMediaController::class, 'index'])->name('background-media');
    Route::post('/settings/homepage/background-media/store', [BackgroundMediaController::class, 'store'])->name('store.background-media');
    Route::post('/settings/homepage/background-media/update',[BackgroundMediaController::class, 'update'])->name('update.background-media');
    Route::get('/settings/dark-mode',[BackgroundMediaController::class, 'darkMode'])->name('dark-mode');

    // HERO SLOGAN ROUTE ARE HERE
    Route::get('/settings/homepage/hero-slogan', [HeroSloganController::class, 'index'])->name('hero-slogan');
    Route::get('/settings/homepage/hero-slogan/deactive', [HeroSloganController::class, 'deactiveList'])->name('deactive-list.hero-slogan');
    Route::get('/settings/homepage/hero-slogan/trash-list', [HeroSloganController::class, 'trash'])->name('trash.hero-slogan');
    Route::get('/settings/homepage/hero-slogan/create', [HeroSloganController::class, 'create'])->name('create.hero-slogan');
    Route::post('/settings/homepage/hero-slogan/store', [HeroSloganController::class, 'store'])->name('store.hero-slogan');
    Route::get('/settings/homepage/hero-slogan/edit/{slogan}', [HeroSloganController::class, 'edit'])->name('edit.hero-slogan');
    Route::post('/settings/homepage/hero-slogan/update/{slogan}', [HeroSloganController::class, 'update'])->name('update.hero-slogan');
    Route::get('/settings/homepage/hero-slogan/active/{slogan}', [HeroSloganController::class, 'active'])->name('active.hero-slogan');
    Route::get('/settings/homepage/hero-slogan/deactive/{slogan}', [HeroSloganController::class, 'deactive'])->name('deactive.hero-slogan');
    Route::get('/settings/homepage/hero-slogan/permanent-delete/{slogan}', [HeroSloganController::class, 'permanentDelete'])->name('permanent-delete.hero-slogan');

    // TESTIMONIAL ROUTE ARE HERE
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial');
    Route::get('/testimonial/deactive', [TestimonialController::class, 'deactiveList'])->name('deactive-list.testimonial');
    Route::get('/testimonial/trash-list', [TestimonialController::class, 'trash'])->name('trash.testimonial');
    Route::get('/testimonial/create', [TestimonialController::class, 'create'])->name('create.testimonial');
    Route::post('/testimonial/store', [TestimonialController::class, 'store'])->name('store.testimonial');
    Route::get('/testimonial/edit/{testimonial}', [TestimonialController::class, 'edit'])->name('edit.testimonial');
    Route::post('/testimonial/update/{testimonial}', [TestimonialController::class, 'update'])->name('update.testimonial');
    Route::get('/testimonial/active/{testimonial}', [TestimonialController::class, 'active'])->name('active.testimonial');
    Route::get('/testimonial/deactive/{testimonial}', [TestimonialController::class, 'deactive'])->name('deactive.testimonial');
    Route::get('/testimonial/permanent-delete/{testimonial}', [TestimonialController::class, 'permanentDelete'])->name('permanent-delete.testimonial');

    // CLIENT BRAND LOGO ROUTE ARE HERE
    Route::get('/gallery/client-brand', [ProjectClientController::class, 'index'])->name('gallery.client-brand');
    Route::get('/gallery/client-brand/deactive', [ProjectClientController::class, 'deactiveList'])->name('gallery.deactive-list.client-brand');
    Route::get('/gallery/client-brand/trash-list', [ProjectClientController::class, 'trash'])->name('gallery.trash.client-brand');
    Route::get('/gallery/client-brand/create', [ProjectClientController::class, 'create'])->name('gallery.create.client-brand');
    Route::post('/gallery/client-brand/store', [ProjectClientController::class, 'store'])->name('gallery.store.client-brand');
    Route::get('/gallery/client-brand/edit/{logo}', [ProjectClientController::class, 'edit'])->name('gallery.edit.client-brand');
    Route::post('/gallery/client-brand/update/{logo}', [ProjectClientController::class, 'update'])->name('gallery.update.client-brand');
    Route::get('/gallery/client-brand/active/{logo}', [ProjectClientController::class, 'active'])->name('gallery.active.client-brand');
    Route::get('/gallery/client-brand/deactive/{logo}', [ProjectClientController::class, 'deactive'])->name('gallery.deactive.client-brand');
    Route::get('/gallery/client-brand/permanent-delete/{logo}', [ProjectClientController::class, 'permanentDelete'])->name('gallery.permanent-delete.client-brand');

    // SKILL BRAND LOGO ROUTE ARE HERE
    Route::get('/gallery/skill-brand', [SkillBrandController::class, 'index'])->name('gallery.skill-brand');
    Route::get('/gallery/skill-brand/deactive', [SkillBrandController::class, 'deactiveList'])->name('gallery.deactive-list.skill-brand');
    Route::get('/gallery/skill-brand/trash-list', [SkillBrandController::class, 'trash'])->name('gallery.trash.skill-brand');
    Route::get('/gallery/skill-brand/create', [SkillBrandController::class, 'create'])->name('gallery.create.skill-brand');
    Route::post('/gallery/skill-brand/store', [SkillBrandController::class, 'store'])->name('gallery.store.skill-brand');
    Route::get('/gallery/skill-brand/edit/{logo}', [SkillBrandController::class, 'edit'])->name('gallery.edit.skill-brand');
    Route::post('/gallery/skill-brand/update/{logo}', [SkillBrandController::class, 'update'])->name('gallery.update.skill-brand');
    Route::get('/gallery/skill-brand/active/{logo}', [SkillBrandController::class, 'active'])->name('gallery.active.skill-brand');
    Route::get('/gallery/skill-brand/deactive/{logo}', [SkillBrandController::class, 'deactive'])->name('gallery.deactive.skill-brand');
    Route::get('/gallery/skill-brand/permanent-delete/{logo}', [SkillBrandController::class, 'permanentDelete'])->name('gallery.permanent-delete.skill-brand');

    // WORK GALLERY ROUTE ARE HERE
    Route::get('/gallery/work-gallery', [WorkGalleryController::class, 'index'])->name('gallery.work-gallery');
    Route::get('/gallery/work-gallery/deactive', [WorkGalleryController::class, 'deactiveList'])->name('gallery.deactive-list.work-gallery');
    Route::get('/gallery/work-gallery/trash-list', [WorkGalleryController::class, 'trash'])->name('gallery.trash.work-gallery');
    Route::get('/gallery/work-gallery/create', [WorkGalleryController::class, 'create'])->name('gallery.create.work-gallery');
    Route::post('/gallery/work-gallery/store', [WorkGalleryController::class, 'store'])->name('gallery.store.work-gallery');
    Route::get('/gallery/work-gallery/edit/{gallery}', [WorkGalleryController::class, 'edit'])->name('gallery.edit.work-gallery');
    Route::post('/gallery/work-gallery/update/{gallery}', [WorkGalleryController::class, 'update'])->name('gallery.update.work-gallery');
    Route::get('/gallery/work-gallery/active/{gallery}', [WorkGalleryController::class, 'active'])->name('gallery.active.work-gallery');
    Route::get('/gallery/work-gallery/deactive/{gallery}', [WorkGalleryController::class, 'deactive'])->name('gallery.deactive.work-gallery');
    Route::get('/gallery/work-gallery/permanent-delete/{gallery}', [WorkGalleryController::class, 'permanentDelete'])->name('gallery.permanent-delete.work-gallery');

    // BLOG CATEGORY ROUTE ARE HERE
    Route::get('/blog/blog-category/list', [BlogCategoryController::class, 'index'])->name('blog.category');
    Route::get('/blog/blog-category/trash', [BlogCategoryController::class, 'trash'])->name('blog.trash-category');
    Route::get('/blog/blog-category/create', [BlogCategoryController::class, 'create'])->name('blog.create-category');
    Route::post('/blog/blog-category/store', [BlogCategoryController::class, 'store'])->name('blog.store-category');
    Route::get('/blog/blog-category/edit/{category}', [BlogCategoryController::class, 'edit'])->name('blog.edit-category');
    Route::post('/blog/blog-category/update/{category}', [BlogCategoryController::class, 'update'])->name('blog.update-category');
    Route::get('/blog/blog-category/active/{category}', [BlogCategoryController::class, 'active'])->name('blog.active-category');
    Route::get('/blog/blog-category/deactive/{category}', [BlogCategoryController::class, 'deactive'])->name('blog.deactive-category');
    Route::get('/blog/blog-category/permanent-delete/{category}', [BlogCategoryController::class, 'permanentDelete'])->name('blog.permanent-delete-category');

    // BLOG ROUTE ARE HERE
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/show/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store-blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog//edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{blog}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/active/{blog}', [BlogController::class, 'active'])->name('blog.active');
    Route::get('/blog/deactive/{blog}', [BlogController::class, 'deactive'])->name('blog.deactive');
    Route::get('/blog/permanent-delete/{blog}', [BlogController::class, 'permanentDelete'])->name('blog.permanent-delete');

    // PORTFOLIO CATEGORY ROUTE ARE HERE
    Route::get('/portfolio/portfolio-category/list', [PortfolioCategoryController::class, 'index'])->name('portfolio.category');
    Route::get('/portfolio/portfolio-category/trash', [PortfolioCategoryController::class, 'trash'])->name('portfolio.trash-category');
    Route::get('/portfolio/portfolio-category/create', [PortfolioCategoryController::class, 'create'])->name('portfolio.create-category');
    Route::post('/portfolio/portfolio-category/store', [PortfolioCategoryController::class, 'store'])->name('portfolio.store-category');
    Route::get('/portfolio/portfolio-category/edit/{category}', [PortfolioCategoryController::class, 'edit'])->name('portfolio.edit-category');
    Route::post('/portfolio/portfolio-category/update/{category}', [PortfolioCategoryController::class, 'update'])->name('portfolio.update-category');
    Route::get('/portfolio/portfolio-category/active/{category}', [PortfolioCategoryController::class, 'active'])->name('portfolio.active-category');
    Route::get('/portfolio/portfolio-category/deactive/{category}', [PortfolioCategoryController::class, 'deactive'])->name('portfolio.deactive-category');
    Route::get('/portfolio/portfolio-category/permanent-delete/{category}', [PortfolioCategoryController::class, 'permanentDelete'])->name('portfolio.permanent-delete-category');

    // PORTFOLIO ROUTE ARE HERE
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
    Route::get('/portfolio/show/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');
    Route::get('portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio/store-portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio//edit/{portfolio}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('/portfolio/update/{portfolio}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/portfolio/active/{portfolio}', [PortfolioController::class, 'active'])->name('portfolio.active');
    Route::get('/portfolio/deactive/{portfolio}', [PortfolioController::class, 'deactive'])->name('portfolio.deactive');
    Route::get('/portfolio/permanent-delete/{portfolio}', [PortfolioController::class, 'permanentDelete'])->name('portfolio.permanent-delete');

    // COURSE CATEGORY ROUTE ARE HERE
    Route::get('/course/course-category/list', [CourseCategoryController::class, 'index'])->name('course.category');
    Route::get('/course/course-category/trash', [CourseCategoryController::class, 'trash'])->name('course.trash-category');
    Route::get('/course/course-category/create', [CourseCategoryController::class, 'create'])->name('course.create-category');
    Route::post('/course/course-category/store', [CourseCategoryController::class, 'store'])->name('course.store-category');
    Route::get('/course/course-category/edit/{category}', [CourseCategoryController::class, 'edit'])->name('course.edit-category');
    Route::post('/course/course-category/update/{category}', [CourseCategoryController::class, 'update'])->name('course.update-category');
    Route::get('/course/course-category/active/{category}', [CourseCategoryController::class, 'active'])->name('course.active-category');
    Route::get('/course/course-category/deactive/{category}', [CourseCategoryController::class, 'deactive'])->name('course.deactive-category');
    Route::get('/course/course-category/permanent-delete/{category}', [CourseCategoryController::class, 'permanentDelete'])->name('course.permanent-delete-category');

    // COURSE ROUTE ARE HERE
    Route::get('/course', [CourseController::class, 'index'])->name('course');
    Route::get('/course/show/{slug}', [CourseController::class, 'show'])->name('course.show');
    Route::get('course/create', [CourseController::class, 'create'])->name('course.create');
    Route::post('/course/store-course', [CourseController::class, 'store'])->name('course.store');
    Route::get('/course/edit/{course}', [CourseController::class, 'edit'])->name('course.edit');
    Route::post('/course/update/{course}', [CourseController::class, 'update'])->name('course.update');
    Route::get('/course/active/{course}', [CourseController::class, 'active'])->name('course.active');
    Route::get('/course/deactive/{course}', [CourseController::class, 'deactive'])->name('course.deactive');
    Route::get('/course/permanent-delete/{course}', [CourseController::class, 'permanentDelete'])->name('course.permanent-delete');

    Route::get('/course/add-class/{id}', [CourseController::class, 'addClass'])->name('course.add-class');
    Route::post('/course/add-class/{id}', [CourseController::class, 'storeClass'])->name('course.store-class');
    Route::get('/course/class/active/{class}', [CourseController::class, 'activeClass'])->name('course.class.active');
    Route::get('/course/class/deactive/{class}', [CourseController::class, 'deactiveClass'])->name('course.class.deactive');

    // COMPANY INTRO ROUTE ARE HERE
    Route::get('/about/company-intro', [CompanyIntroController::class, 'index'])->name('about.company-intro');
    Route::post('/about/company-intro/store', [CompanyIntroController::class, 'store'])->name('about.company-intro.store');
    Route::post('/about/company-intro/update',[CompanyIntroController::class, 'update'])->name('about.company-intro.update');

    // OUR STORY ROUTE ARE HERE
    Route::get('/about/our-story', [OurStoryController::class, 'index'])->name('about.our-story');
    Route::get('/about/our-story/create', [OurStoryController::class, 'create'])->name('about.create.our-story');
    Route::post('/about/our-story/store', [OurStoryController::class, 'store'])->name('about.store.our-story');
    Route::get('/about/our-story/edit/{story}', [OurStoryController::class, 'edit'])->name('about.edit.our-story');
    Route::post('/about/our-story/update/{story}', [OurStoryController::class, 'update'])->name('about.update.our-story');
    Route::get('/about/our-story/active/{story}', [OurStoryController::class, 'active'])->name('about.active.our-story');
    Route::get('/about/our-story/deactive/{story}', [OurStoryController::class, 'deactive'])->name('about.deactive.our-story');
    Route::get('/about/our-story/permanent-delete/{story}', [OurStoryController::class, 'permanentDelete'])->name('about.permanent-delete.our-story');

     // OUR TIMELINE ROUTE ARE HERE
     Route::get('/about/our-timeline', [OurTimelineController::class, 'index'])->name('about.our-timeline');
     Route::get('/about/our-timeline/create', [OurTimelineController::class, 'create'])->name('about.create.our-timeline');
     Route::post('/about/our-timeline/store', [OurTimelineController::class, 'store'])->name('about.store.our-timeline');
     Route::get('/about/our-timeline/edit/{timeline}', [OurTimelineController::class, 'edit'])->name('about.edit.our-timeline');
     Route::post('/about/our-timeline/update/{timeline}', [OurTimelineController::class, 'update'])->name('about.update.our-timeline');
     Route::get('/about/our-timeline/active/{timeline}', [OurTimelineController::class, 'active'])->name('about.active.our-timeline');
     Route::get('/about/our-timeline/deactive/{timeline}', [OurTimelineController::class, 'deactive'])->name('about.deactive.our-timeline');
     Route::get('/about/our-timeline/permanent-delete/{timeline}', [OurTimelineController::class, 'permanentDelete'])->name('about.permanent-delete.our-timeline');

    // OUR SERVICE ROUTE ARE HERE
    Route::get('/about/our-service/', [OurServiceController::class, 'index'])->name('about.our-service');
    Route::get('/about/our-service/show/{slug}', [OurServiceController::class, 'show'])->name('about.our-service.show');
    Route::get('/about/our-service/create', [OurServiceController::class, 'create'])->name('about.our-service.create');
    Route::post('/about/our-service/store', [OurServiceController::class, 'store'])->name('about.our-service.store');
    Route::get('/about/our-service/edit/{service}', [OurServiceController::class, 'edit'])->name('about.our-service.edit');
    Route::post('/about/our-service/update/{service}', [OurServiceController::class, 'update'])->name('about.our-service.update');
    Route::get('/about/our-service/active/{service}', [OurServiceController::class, 'active'])->name('about.our-service.active');
    Route::get('/about/our-service/deactive/{service}', [OurServiceController::class, 'deactive'])->name('about.our-service.deactive');
    Route::get('/about/our-service/permanent-delete/{service}', [OurServiceController::class, 'permanentDelete'])->name('about.our-service.permanent-delete');

    // OUR SKILL ROUTE ARE HERE
    Route::get('/about/our-skill/', [OurSkillController::class, 'index'])->name('about.our-skill');
    Route::get('/about/our-skill/show/{slug}', [OurSkillController::class, 'show'])->name('about.our-skill.show');
    Route::get('/about/our-skill/create', [OurSkillController::class, 'create'])->name('about.our-skill.create');
    Route::post('/about/our-skill/store', [OurSkillController::class, 'store'])->name('about.our-skill.store');
    Route::get('/about/our-skill/edit/{skill}', [OurSkillController::class, 'edit'])->name('about.our-skill.edit');
    Route::post('/about/our-skill/update/{skill}', [OurSkillController::class, 'update'])->name('about.our-skill.update');
    Route::get('/about/our-skill/active/{skill}', [OurSkillController::class, 'active'])->name('about.our-skill.active');
    Route::get('/about/our-skill/deactive/{skill}', [OurSkillController::class, 'deactive'])->name('about.our-skill.deactive');
    Route::get('/about/our-skill/permanent-delete/{skill}', [OurSkillController::class, 'permanentDelete'])->name('about.our-skill.permanent-delete');

    // CONTACT ROUTE ARE HERE
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::get('/contact/{contact}', [ContactController::class, 'showContact'])->name('contact.show');
    Route::get('/contact/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');

    // PRIVACY ROUTE ARE HERE
    Route::get('/settings/privacy-policy', [PrivacyController::class, 'index'])->name('setting.privacy');
    Route::post('/settings/privacy-policy/store', [PrivacyController::class, 'store'])->name('setting.privacy.store');
    Route::post('/settings/privacy-policy/update',[PrivacyController::class, 'update'])->name('setting.privacy.update');

    // TERMS CONDITION ROUTE ARE HERE
    Route::get('/settings/terms', [TermsController::class, 'index'])->name('setting.terms');
    Route::post('/settings/terms/store', [TermsController::class, 'store'])->name('setting.terms.store');
    Route::post('/settings/terms/update',[TermsController::class, 'update'])->name('setting.terms.update');

    // REFUND POLICY ROUTE ARE HERE
    Route::get('/settings/refund-policy', [RefundPolicyController::class, 'index'])->name('setting.refund-policy');
    Route::post('/settings/refund-policy/store', [RefundPolicyController::class, 'store'])->name('setting.refund-policy.store');
    Route::post('/settings/refund-policy/update',[RefundPolicyController::class, 'update'])->name('setting.refund-policy.update');

    // LICENCE INFO ROUTE ARE HERE
    Route::get('/settings/licence-info', [LicenceInfoController::class, 'index'])->name('setting.licence-info');
    Route::post('/settings/licence-info/store', [LicenceInfoController::class, 'store'])->name('setting.licence-info.store');
    Route::post('/settings/licence-info/update',[LicenceInfoController::class, 'update'])->name('setting.licence-info.update');

    // FAQ ROUTE ARE HERE
    Route::get('/faq/list', [FaqController::class, 'index'])->name('faq');
    Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
    Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
    Route::get('/faq/edit/{faq}', [FaqController::class, 'edit'])->name('faq.edit');
    Route::post('/faq/update/{faq}', [FaqController::class, 'update'])->name('faq.update');
    Route::get('/faq/active/{faq}', [FaqController::class, 'active'])->name('faq.active');
    Route::get('/faq/deactive/{faq}', [FaqController::class, 'deactive'])->name('faq.deactive');
    Route::get('/faq/permanent-delete/{faq}', [FaqController::class, 'permanentDelete'])->name('faq.permanent-delete');

    // GET QUOTE ROUTE ARE HERE
    Route::get('/quote', [GetQuoteController::class, 'index'])->name('quote');
    Route::get('/quote/show/{id}', [GetQuoteController::class, 'show'])->name('quote.show');
    Route::get('/quote/create', [GetQuoteController::class, 'create'])->name('quote.create');
    Route::post('/quote/store', [GetQuoteController::class, 'store'])->name('quote.store');
    Route::get('/quote/edit/{quote}', [GetQuoteController::class, 'edit'])->name('quote.edit');
    Route::post('/quote/update/{quote}', [GetQuoteController::class, 'update'])->name('quote.update');
    Route::get('/quote/active/{quote}', [GetQuoteController::class, 'active'])->name('quote.active');
    Route::get('/quote/deactive/{quote}', [GetQuoteController::class, 'deactive'])->name('quote.deactive');
    Route::get('/quote/permanent-delete/{quote}', [GetQuoteController::class, 'permanentDelete'])->name('quote.permanent-delete');

    // BASIC HOSTING ROUTE ARE HERE
    Route::get('/hosting/basic-shared', [BasicSharedHostingController::class, 'index'])->name('hosting.basic');
    Route::get('/hosting/basic-shared/show/{id}', [BasicSharedHostingController::class, 'show'])->name('hosting.basic.show');
    Route::get('/hosting/basic-shared/create', [BasicSharedHostingController::class, 'create'])->name('hosting.basic.create');
    Route::post('/hosting/basic-shared/store', [BasicSharedHostingController::class, 'store'])->name('hosting.basic.store');
    Route::get('/hosting/basic-shared/edit/{hosting}', [BasicSharedHostingController::class, 'edit'])->name('hosting.basic.edit');
    Route::post('/hosting/basic-shared/update/{hosting}', [BasicSharedHostingController::class, 'update'])->name('hosting.basic.update');
    Route::get('/hosting/basic-shared/active/{hosting}', [BasicSharedHostingController::class, 'active'])->name('hosting.basic.active');
    Route::get('/hosting/basic-shared/deactive/{hosting}', [BasicSharedHostingController::class, 'deactive'])->name('hosting.basic.deactive');
    Route::get('/hosting/basic-shared/permanent-delete/{hosting}', [BasicSharedHostingController::class, 'permanentDelete'])->name('hosting.basic.permanent-delete');

    // SHARE ROUTE ARE HERE
    Route::get('/share', [SocialShareController::class, 'index'])->name('share');
    Route::get('/share/show/{slug}', [SocialShareController::class, 'show'])->name('share.show');
    Route::get('/share/create', [SocialShareController::class, 'create'])->name('share.create');
    Route::post('/share/store', [SocialShareController::class, 'store'])->name('share.store');
    Route::get('/share/edit/{share}', [SocialShareController::class, 'edit'])->name('share.edit');
    Route::post('/share/update/{share}', [SocialShareController::class, 'update'])->name('share.update');
    Route::get('/share/active/{share}', [SocialShareController::class, 'active'])->name('share.active');
    Route::get('/share/deactive/{share}', [SocialShareController::class, 'deactive'])->name('share.deactive');
    Route::get('/share/permanent-delete/{share}', [SocialShareController::class, 'permanentDelete'])->name('share.permanent-delete');

    // CACHE, CONFIG, OPTIMIZE
    Route::get('/route-cache', [CacheController::class, 'routeCache'])->name('routeCache');
    Route::get('/view-cache', [CacheController::class, 'viewCache'])->name('viewCache');
    Route::get('/event-cache', [CacheController::class, 'eventCache'])->name('eventCache');
    Route::get('/config-cache', [CacheController::class, 'configCache'])->name('configCache');
    Route::get('/clear-cache', [CacheController::class, 'clearCache'])->name('clearCache');
    Route::get('/clear-view', [CacheController::class, 'clearView'])->name('clearView');
    Route::get('/clear-event', [CacheController::class, 'clearEvent'])->name('clearEvent');
    Route::get('/clear-route', [CacheController::class, 'clearRoute'])->name('clearRoute');
    Route::get('/clear-optimize', [CacheController::class, 'clearOptimize'])->name('clearOptimize');
    Route::get('/storage-link', [CacheController::class, 'storageLink'])->name('storageLink');

});


// BASIC ROUTE ARE HERE
Route::get('name-slug', [SettingController::class, 'getName'])->name('name.slug');
Route::get('title-slug', [SettingController::class, 'getTitle'])->name('title.slug');
Route::get('meta-description', [SettingController::class, 'metaDescription'])->name('meta.description');
Route::get('get/tutorial-category/{id}', [SettingController::class, 'getTutorialCategory']);
Route::get('get/template-category/{id}', [SettingController::class, 'getTemplateCategory']);

// SITEMAP GENERATOR ROUTE ARE HERE
Route::get('sitemap', [SettingController::class, 'Sitemap'])->name('sitemap');

