<?php

/* -------------------------------------------------------------------------- */
/*                           Admin Breadcrumb Start                           */
/* -------------------------------------------------------------------------- */

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('home.dashboard'));
});

// Dashboard > User
Breadcrumbs::for('home.users', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('User', route('home.users.index'));
});

// Dashboard > User > Create
Breadcrumbs::for('home.users.create', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Create', route('home.users.create'));
});

// Dashboard > User > Show
Breadcrumbs::for('home.users.show', function ($trail, $id) {
    $trail->parent('dashboard');
    $trail->push('Show', route('home.users.show', $id));
});

// Dashboard > User > Edit
Breadcrumbs::for('home.users.edit', function ($trail, $id) {
    $trail->parent('dashboard');
    $trail->push('Edit', route('home.users.edit', $id));
});
