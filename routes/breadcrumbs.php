<?php

/* -------------------------------------------------------------------------- */
/*                           Admin Breadcrumb Start                           */
/* -------------------------------------------------------------------------- */

// Dashboard
Breadcrumbs::for('dashboard', function ($trail) {
    $trail->push('Dashboard', route('home.dashboard'));
});

// // Dashboard > Admin
// Breadcrumbs::for('admin.admin', function ($trail) {
//     $trail->parent('admin.dashboard');
//     $trail->push('Admin', route('admin.users.admin.index'));
// });
