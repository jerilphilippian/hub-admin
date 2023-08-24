<?php
use App\Http\Livewire\UserAccount\Index as UserAccountIndex;
use App\Http\Livewire\UserAccount\Roles\Index as RoleIndex;
use App\Http\Livewire\UserAccount\Departments\Index as DepartmentsIndex;
use App\Http\Livewire\UserAccount\Monitoring\Index as MonitoringIndex;

use App\Http\Livewire\EmployeeManagement\Index as EmployeeManagementIndex;
use App\Http\Livewire\EmployeeManagement\EmployeeMonitoring\Index as EmployeeMonitoringIndex;

use App\Http\Livewire\ReligiousGroups\Index as ReligiousGroupsIndex;
use App\Http\Livewire\ReligiousGroups\Religiousname\Index as ReligiousNameIndex;
use App\Http\Livewire\ReligiousGroups\Religiousmonitoring\Index as ReligiousMonitoringIndex;

use App\Http\Livewire\GroupManagement\Index as GroupManagementIndex;
use App\Http\Livewire\GroupManagement\Postlist\Index as PostListIndex;
use App\Http\Livewire\PostsManagement\Index as PostsManagementIndex;

use App\Http\Livewire\InquiryPage\Index as InquiryPageIndex;
use App\Http\Livewire\InquiryPage\GeneralQuery\Index as GeneralQueryIndex;
use App\Http\Livewire\InquiryPage\WorshipQuery\Index as WorshipQueryIndex;
use App\Http\Livewire\InquiryPage\Confessionofsin\Index as ConfessionOfSinIndex;
use App\Http\Livewire\InquiryPage\Pending\Index as PendingIndex;
use App\Http\Livewire\InquiryPage\Resolved\Index as ResolvedIndex;

use App\Http\Livewire\Dashboard\Index;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// dashboard
Route::get('/', Index::class)->name('index');

// user-account
Route::prefix('user-account')->name('user-account.')->group(function () {
    Route::get('/index', UserAccountIndex::class)->name('user-account');
});

// role
Route::prefix('role')->name('role.')->group(function () {
    Route::get('/index', RoleIndex::class)->name('role');
});

// department
Route::prefix('departments')->name('departments.')->group(function () {
    Route::get('/index', DepartmentsIndex::class)->name('departments');
});

// monitoring
Route::prefix('monitoring')->name('monitoring.')->group(function () {
    Route::get('/index', monitoringIndex::class)->name('monitoring');
});

//employee management
Route::get('/employee-management', EmployeeManagementIndex::class)->name('employee-management');
// monitoring
Route::prefix('employeemonitoring')->name('employeemonitoring.')->group(function () {
    Route::get('/index', EmployeeMonitoringIndex::class)->name('employeemonitoring');
});

//religious groups
Route::get('/religious-groups', ReligiousGroupsIndex::class)->name('religious-groups');
// religious name
Route::prefix('religiousname')->name('religiousname.')->group(function () {
    Route::get('/index', ReligiousNameIndex::class)->name('religiousname');
});

// religious monitoring
Route::prefix('religiousmonitoring')->name('religiousmonitoring.')->group(function () {
    Route::get('/index', ReligiousMonitoringIndex::class)->name('religiousmonitoring');
});

// group management
Route::get('/group-management', GroupManagementIndex::class)->name('group-management');

// group management
Route::prefix('postlist')->name('postlist.')->group(function () {
    Route::get('/index', PostListIndex::class)->name('postlist');
});

Route::get('/posts-management', PostsManagementIndex::class)->name('posts-management');

//inquiry page
Route::get('/inquiry-page', InquiryPageIndex::class)->name('inquiry-page');

// inquiry general
Route::prefix('generalquery')->name('generalquery.')->group(function () {
    Route::get('/index', GeneralQueryIndex::class)->name('general-query');
});

// inquiry worship
Route::prefix('worshipquery')->name('worshipquery.')->group(function () {
    Route::get('/index', WorshipQueryIndex::class)->name('worship-query');
});

// inquiry confession
Route::prefix('confessionofsin')->name('confessionofsin.')->group(function () {
    Route::get('/index', ConfessionOfSinIndex::class)->name('confessionofsin');
});

// inquiry pending
Route::prefix('pending')->name('pending.')->group(function () {
    Route::get('/index', pendingIndex::class)->name('pending');
});

// inquiry resolved
Route::prefix('resolved')->name('resolved.')->group(function () {
    Route::get('/index', ResolvedIndex::class)->name('resolved');
});
