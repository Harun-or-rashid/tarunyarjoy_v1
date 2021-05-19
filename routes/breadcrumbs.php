<?php

/* -------------------------------------------------------------------------- */
/*                           Admin Breadcrumb Start                           */
/* -------------------------------------------------------------------------- */

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('home.dashboard'));
});

// Dashboard > Profile
Breadcrumbs::for('home.profile', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Profile', route('home.profile'));
});


// Dashboard > User
Breadcrumbs::for('home.users', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('User', route('home.users.index'));
});

// Dashboard > User > Create
Breadcrumbs::for('home.users.create', function ($trail) {
    $trail->parent('home.users');
    $trail->push('Create', route('home.users.create'));
});

// Dashboard > User > Show
Breadcrumbs::for('home.users.show', function ($trail, $id) {
    $trail->parent('home.users');
    $trail->push('Show', route('home.users.show', $id));
});

// Dashboard > User > Edit
Breadcrumbs::for('home.users.edit', function ($trail, $id) {
    $trail->parent('home.users');
    $trail->push('Edit', route('home.users.edit', $id));
});

// Dashboard > Event
Breadcrumbs::for('home.events', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Event', route('home.events.index'));
});

// Dashboard > Event > Create
Breadcrumbs::for('home.events.create', function ($trail) {
    $trail->parent('home.events');
    $trail->push('Create', route('home.events.create'));
});

// Dashboard > Event > Show
Breadcrumbs::for('home.events.show', function ($trail, $id) {
    $trail->parent('home.events');
    $trail->push('Show', route('home.events.show', $id));
});

// Dashboard > Event > Edit
Breadcrumbs::for('home.events.edit', function ($trail, $id) {
    $trail->parent('home.events');
    $trail->push('Edit', route('home.events.edit', $id));
});

// Dashboard > Product
Breadcrumbs::for('home.products', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Product', route('home.products.index'));
});

// Dashboard > Product > Create
Breadcrumbs::for('home.products.create', function ($trail) {
    $trail->parent('home.products');
    $trail->push('Create', route('home.products.create'));
});

// Dashboard > Product > Show
Breadcrumbs::for('home.products.show', function ($trail, $id) {
    $trail->parent('home.products');
    $trail->push('Show', route('home.products.show', $id));
});

// Dashboard > Product > Edit
Breadcrumbs::for('home.products.edit', function ($trail, $id) {
    $trail->parent('home.products');
    $trail->push('Edit', route('home.products.edit', $id));
});

// Dashboard > Product Request
Breadcrumbs::for('home.requests', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Product Request', route('home.requests.index'));
});

// Dashboard > Product Request > Show
Breadcrumbs::for('home.requests.show', function ($trail, $id) {
    $trail->parent('home.requests');
    $trail->push('Show', route('home.requests.show', $id));
});

// Dashboard > Product Request > Create
Breadcrumbs::for('home.requests.create', function ($trail) {
    $trail->parent('home.requests');
    $trail->push('Create', route('home.requests.create'));
});

// Dashboard > Member
Breadcrumbs::for('home.members', function ($trail) {
    $trail->parent('dashboard');
    $trail->push('Member', route('home.members.index'));
});

// Dashboard > Member > Show
Breadcrumbs::for('home.members.show', function ($trail, $id) {
    $trail->parent('home.members');
    $trail->push('Show', route('home.members.show', $id));
});
