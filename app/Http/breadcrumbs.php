<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Home', route('homepage'));
});
Breadcrumbs::register('category', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push($category->title, route('category.show', [$category->title, $category->id]));
});
Breadcrumbs::register('category.show', function($breadcrumbs, $category)
{
    $breadcrumbs->parent('category', $category->parent);
    $breadcrumbs->push($category->title, route('product.index', [ str_replace(' ', '-', $category->parent->title),  str_replace(' ', '-', $category->title), $category->id]));
});
Breadcrumbs::register('product.show', function($breadcrumbs, $product)
{
    $breadcrumbs->parent('category.show', $product->category);
    $breadcrumbs->push($product->name, route('product.show', [$product->title, $product->id]));
});

Breadcrumbs::register('cart', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Winkelwagen', route('cart'));
});

Breadcrumbs::register('user.dashboard', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Account Paneel', route('user.show'));
});
Breadcrumbs::register('user.dashboard.wijzigen', function($breadcrumbs)
{
    $breadcrumbs->parent('user.dashboard');
    $breadcrumbs->push('Persoonsgegevens Wijzigen', route('user.edit'));
});
Breadcrumbs::register('user.dashboard.password.wijzigen', function($breadcrumbs)
{
    $breadcrumbs->parent('user.dashboard');
    $breadcrumbs->push('Wachtwoord Wijzigen', route('user.password.edit'));
});


/////////////

// dashboard
Breadcrumbs::register('dashboard', function($breadcrumbs)
{
    $breadcrumbs->push('Dashboard', route('admin_dashboard_index'));
});

Breadcrumbs::register('dashboard.detail', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Detail', route('admin_property_index'));
});

Breadcrumbs::register('dashboard.detail.edit', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.detail');
    $breadcrumbs->push('Wijzigen', route('admin_property_edit', $id));
});

Breadcrumbs::register('dashboard.detail.create', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard.detail');
    $breadcrumbs->push('nieuw', route('admin_property_create'));
});

// dashboard > Category
Breadcrumbs::register('dashboard.category', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Categorieën', route('admin_category_index'));
});

// dashboard > Category > edit
Breadcrumbs::register('dashboard.category.edit', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.category');
    $breadcrumbs->push('Wijzigen', route('admin_category_edit', $id));
});

// dashboard > Category > new
Breadcrumbs::register('dashboard.category.create', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard.category');
    $breadcrumbs->push('Nieuw', route('admin_category_create'));
});

// dashboard > product
Breadcrumbs::register('dashboard.product.index', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Producten', route('admin_product_index'));
});

// dashboard > product > edit
Breadcrumbs::register('dashboard.product.edit', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.product.index');
    $breadcrumbs->push('Wijzigen', route('admin_product_edit', $id));
});

// dashboard > product > create
Breadcrumbs::register('dashboard.product.create', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard.product.index');
    $breadcrumbs->push('Nieuw', route('admin_product_create'));
});

// dashboard > product > wijzigen > property
Breadcrumbs::register('dashboard.product.edit.property.create', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.product.edit', $id);
    $breadcrumbs->push('Detail nieuw', route('admin_product_create'));
});

// dashboard > product > wijzigen > property
Breadcrumbs::register('dashboard.product.edit.property.edit', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.product.edit', $id);
    $breadcrumbs->push('Detail wijzigen', route('admin_product_create'));
});

///ok

// dashboard > orders
Breadcrumbs::register('dashboard.orders', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Orders', route('admin_order_index'));
});

// dashboard > orders > edit
Breadcrumbs::register('dashboard.orders.edit', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.orders');
    $breadcrumbs->push('Wijzigen', route('admin_order_edit', $id));
});

// dashboard > Users
Breadcrumbs::register('dashboard.user', function($breadcrumbs)
{
    $breadcrumbs->parent('dashboard');
    $breadcrumbs->push('Users', route('admin_user_index'));
});

// dashboard > Users > edit
Breadcrumbs::register('dashboard.user.edit', function($breadcrumbs, $id)
{
    $breadcrumbs->parent('dashboard.user');
    $breadcrumbs->push('Wijzigen', route('admin_user_edit', $id));
});

// home > algemenevoorwaarden
Breadcrumbs::register('algemenevoorwaarden', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Algemene voorwaarde', route('voorwaarde'));
});

// home > contact
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contact', route('contact'));
});

