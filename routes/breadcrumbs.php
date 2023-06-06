<?php
use App\Models\User;
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('admin-dashboard', function (BreadcrumbTrail $trail): void {
    $trail->push('Admin-Dashboard', route('admin-dashboard'));
});
Breadcrumbs::for('Genres', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Genres', route('genres'));
});
Breadcrumbs::for('Regions', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Regions', route('regions'));
});
Breadcrumbs::for('Articles', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Articles', route('articles'));
});
Breadcrumbs::for('Publications', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Publications', route('publications'));
});
Breadcrumbs::for('Insert-publications', function (BreadcrumbTrail $trail): void {
    $trail->parent('Publications');
    $trail->push('Insert-publications', route('inset-publication'));
});
Breadcrumbs::for('Update-publications', function (BreadcrumbTrail $trail): void {
    $trail->parent('Publications');
    $trail->push('Update-publications', route('update-publication',['id'=>1]));
});
Breadcrumbs::for('Update-token', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Update-token', route('Update-token'));
});
Breadcrumbs::for('Press-package', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Press-package', route('package-list'));
});
Breadcrumbs::for('Package-insert', function (BreadcrumbTrail $trail): void {
    $trail->parent('Press-package');
    $trail->push('Insert', route('press-package'));
});
Breadcrumbs::for('Package-category', function (BreadcrumbTrail $trail): void {
    $trail->parent('Press-package');
    $trail->push('Category', route('package-category'));
});
Breadcrumbs::for('Update-package', function (BreadcrumbTrail $trail): void {
    $trail->parent('Press-package');
    $trail->push('Update-package', route('update-package',['id'=>1]));
});
Breadcrumbs::for('Services', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Services', route('serice-list'));
});
Breadcrumbs::for('Service-insert', function (BreadcrumbTrail $trail): void {
    $trail->parent('Services');
    $trail->push('Insert', route('insert-serices-list'));
});
Breadcrumbs::for('Service-update', function (BreadcrumbTrail $trail): void {
    $trail->parent('Services');
    $trail->push('Update', route('update-service',['id'=>1]));
});
Breadcrumbs::for('Press-release', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Press-release', route('press-release'));
});
Breadcrumbs::for('Csv-upload', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('CSV-upload', route('upload-csv'));
});
Breadcrumbs::for('Update-access', function (BreadcrumbTrail $trail): void {
    $trail->parent('admin-dashboard');
    $trail->push('Update-access', route('update-access'));
});