<?php

/**
 * roleText
 *
 * @return string
 */
function roleText(): string
{
    if (auth()->check()) {
        $role = ucwords(join(' ', auth()->user()->getRoleNames()->all()));
        return $role;
    }
}
