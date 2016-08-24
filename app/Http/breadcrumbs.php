<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('homepage'));
});
Breadcrumbs::register('product_detail', function($breadcrumbs, $product)
{
    $breadcrumbs->parent('category', $product->categories()->first());
    $breadcrumbs->push($product->name, route('product_detail', $product->id));
});
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($category->title, route('category_detail', $category->id));
});


/////////////

// dashboard
Breadcrumbs::register('dashboard', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('admin_panel'));
});

// dashboard > orders
Breadcrumbs::register('dashboard.orders', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Orders', route('admin_orders_all'));
});

// dashboard > orders > edit
Breadcrumbs::register('dashboard.orders.edit', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.orders');
    $breadcrumbs->push('Edit', route('admin_orders_edit', $id));
});

// dashboard > video
Breadcrumbs::register('dashboard.videos', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Videos', route('admin_videos_all'));
});

// dashboard > video > edit
Breadcrumbs::register('dashboard.videos.edit', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.videos');
    $breadcrumbs->push('Edit', route('admin_videos_edit', $id));
});


// dashboard > Category
Breadcrumbs::register('dashboard.category', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Categories', route('admin_category_all'));
});

// dashboard > Category > edit
Breadcrumbs::register('dashboard.category.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard.category');
    $breadcrumbs->push('Edit', route('admin_category_create'));
});


// dashboard > Users
Breadcrumbs::register('dashboard.user', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Users', route('admin_profile_all'));
});

// dashboard > Users > edit
Breadcrumbs::register('dashboard.user.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard.user');
    $breadcrumbs->push('Edit', route('admin_user_edit'));
});

// dashboard > Authors
Breadcrumbs::register('dashboard.author', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Author', route('admin_authors_all'));
});

// dashboard > Authors > edit
Breadcrumbs::register('dashboard.author.edit', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard.author');
    $breadcrumbs->push('Edit', route('admin_authors_update'));
});

//Breadcrumbs::register('product_detail_with_category', function($breadcrumbs, $product)
//{
//    $breadcrumbs->parent('category', $product->categories->first()->title);
//    $breadcrumbs->push($product->name, route('category_detail', $product->id));
//
//});
//
//// Home > About
//Breadcrumbs::register('about', function($breadcrumbs)
//{
//    $breadcrumbs->parent('home');
//    $breadcrumbs->push('About', route('about'));
//});
//
//// Home > Blog
//Breadcrumbs::register('blog', function($breadcrumbs)
//{
//    $breadcrumbs->parent('home');
//    $breadcrumbs->push('Blog', route('blog'));
//});
//
//// Home > Blog > [Category]

//
//// Home > Blog > [Category] > [Page]
//Breadcrumbs::register('page', function($breadcrumbs, $page)
//{
//    $breadcrumbs->parent('category', $page->category);
//    $breadcrumbs->push($page->title, route('page', $page->id));
//});
