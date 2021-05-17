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
